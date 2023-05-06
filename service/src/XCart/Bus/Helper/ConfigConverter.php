<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XCart\Bus\Helper;

use Monolog\Logger;
use Silex\Application;
use XCart\Bus\System\FilesystemInterface;
use XCart\ConfigParser\ConfigParser;
use XCart\SilexAnnotations\Annotations\Service;

/**
 * @Service\Service()
 */
class ConfigConverter
{
    /**
     * @var FilesystemInterface
     */
    private $filesystem;

    /**
     * @var ConfigParser
     */
    private $configParser;

    /**
     * @var ConfigParser
     */
    private $defaultConfigParser;

    private $rootDir;

    /**
     * @param Application $app
     *
     * @return static
     *
     * @Service\Constructor
     * @codeCoverageIgnore
     */
    public static function serviceConstructor(
        Application $app,
        FilesystemInterface $filesystem
    ) {
        return new self(
            $filesystem,
            $app['config']['root_dir']
        );
    }

    /**
     * @param string $rootDir
     */
    public function __construct(
        FilesystemInterface $filesystem,
        $rootDir
    ) {
        $this->configParser = new ConfigParser($_SERVER, $rootDir . '/etc/');

        $this->defaultConfigParser = new ConfigParser($_SERVER, $rootDir . '/etc/');
        $this->defaultConfigParser->setFiles([]);

        $this->rootDir    = $rootDir;
        $this->filesystem = $filesystem;
    }

    public function convert()
    {
        $data        = $this->configParser->getData();
        $defaultData = $this->defaultConfigParser->getData();

        $envData = $this->getEnvDiff($this->getEnvConfiguration($data), $this->getEnvConfiguration($defaultData));

        $envData['XCART_PUBLIC_DIR'] = '1';

        $yamlData       = $this->getYamlDiff($this->getYamlConfiguration($data), $this->getYamlConfiguration($defaultData));
        $sharedYamlData = $this->getYamlDiff($this->getSharedYamlConfiguration($data), $this->getSharedYamlConfiguration($defaultData));

        $this->writeEnv($envData, $this->rootDir . '.env.local');
        $this->writeYaml(['x_cart' => $yamlData], $this->rootDir . 'config/local/x_cart.yaml');
        $this->writeYaml($sharedYamlData, $this->rootDir . 'config/local/shared/x_cart.yaml');
    }

    private function writeEnv($data, $path)
    {
        $content = '';

        foreach ($data as $name => $value) {
            $value   = preg_match('/[#\s]/Ss', $value) ? "\"$value\"" : $value;
            $content .= $name . '=' . $value . "\n";
        }

        $this->filesystem->mkdir(dirname($path));
        file_put_contents($path, $content);
    }

    private function writeYaml($data, $path)
    {
        $this->filesystem->mkdir(dirname($path));

        file_put_contents($path, \Symfony\Component\Yaml\Yaml::dump($data, 4, 3));
    }

    private function getEnvDiff($data, $default)
    {
        $result = [];

        foreach ($data as $name => $value) {
            if ($value !== $default[$name]) {
                $result[$name] = $value;
            }
        }

        return $result;
    }

    private function getYamlDiff($data, $default)
    {
        $result = [];

        foreach ($data as $section => $sectionData) {
            foreach ($sectionData as $name => $value) {
                if ($value !== $default[$section][$name]) {
                    $result[$section][$name] = $value;
                }
            }
        }

        return $result;
    }

    private function getEnvConfiguration($data)
    {
        $databaseURL = $this->constructDatabaseUrl([
            'host'     => $data['database_details']['hostspec'] ?? '',
            'socket'   => $data['database_details']['socket'] ?? '',
            'port'     => $data['database_details']['port'] ?? '',
            'dbname'   => $data['database_details']['database'] ?? '',
            'user'     => $data['database_details']['username'] ?? '',
            'password' => $data['database_details']['password'] ?? '',
        ]);

        $developerMode = (bool) $this->convertToBool($data['performance']['developer_mode']);

        return [
            'APP_ENV'    => $developerMode ? 'dev' : 'prod',
            'APP_DEBUG'  => $developerMode,
            'APP_SECRET' => $this->generateHash(),

            'DATABASE_URL'                  => $databaseURL,
            'DATABASE_UNIX_SOCKET'          => $data['database_details']['socket'] ?? '',
            'DATABASE_CHARSET'              => $data['database_details']['charset'] ?? '',
            'DATABASE_DEFAULT_TABLE_PREFIX' => rtrim($data['database_details']['table_prefix'] ?? '', '_'),

            //'REDIS_HOST' => '',
            //'REDIS_PORT' => '',

            //'CORS_ALLOW_ORIGIN' => '',

            'XCART_CACHE_DEFAULT_CACHE_TTL' => $data['cache']['default_cache_ttl'] ?? '',

            'XCART_HOST_DETAILS_HTTP_HOST'  => $data['host_details']['http_host'] ?? '',
            'XCART_HOST_DETAILS_HTTPS_HOST' => $data['host_details']['https_host'] ?? '',
            'XCART_HOST_DETAILS_ADMIN_HOST' => $data['host_details']['admin_host'] ?? '',

            'XCART_HOST_DETAILS_WEB_DIR' => $data['host_details']['web_dir'] ?? '',
            'XCART_HOST_DETAILS_DOMAINS' => $data['host_details']['domains'] ?? '',
            //'XCART_HOST_DETAILS_ADMIN_SELF'  => $data['host_details'][''],
            //'XCART_HOST_DETAILS_CART_SELF'   => $data['host_details'][''],
            // todo: set value
            //'XCART_HOST_DETAILS_FORCE_HTTPS' => $data['host_details'][''],

            'XCART_PUBLIC_DIR' => '1',

            'XCART_IMAGES_IMAGE_MAGICK_PATH' => $data['images']['image_magick_path'] ?? '',

            'XCART_INSTALLER_DETAILS_AUTH_CODE'         => $data['installer_details']['auth_code'] ?? '',
            'XCART_INSTALLER_DETAILS_SHARED_SECRET_KEY' => $data['installer_details']['shared_secret_key'] ?? '',

            'LOGGER_LEVEL' => $this->convertToMonologLogLevel($data['log_details']['level'] ?? ''),

            //'LOGGER_FILE_STREAM_NAME' => '',

            //'LOGGER_CLOUD_WATCH_REGION'         => '',
            //'LOGGER_CLOUD_WATCH_VERSION'        => '',
            //'LOGGER_CLOUD_WATCH_KEY'            => '',
            //'LOGGER_CLOUD_WATCH_SECRET'         => '',
            //'LOGGER_CLOUD_WATCH_TOKEN'          => '',
            //'LOGGER_CLOUD_WATCH_GROUP_NAME'     => '',
            //'LOGGER_CLOUD_WATCH_STREAM_NAME'    => '',
            //'LOGGER_CLOUD_WATCH_RETENTION_DAYS' => '',

            'XCART_LOG_DETAILS_SUPPRESS_ERRORS'     => $this->convertToBool($data['log_details']['suppress_errors'] ?? ''),
            'XCART_LOG_DETAILS_SUPPRESS_LOG_ERRORS' => $this->convertToBool($data['log_details']['suppress_log_errors']) ?? '',

            //'XCART_SERVICE_IS_TRIAL' => '',

            'XCART_AFFILIATE_ID' => $data['affiliate']['id'] ?? '',

            'XCART_STOREFRONT_OPTIONS_CALLBACK_OPENED' => $this->convertToBool($data['storefront_options']['callback_opened'] ?? ''),
            'XCART_STOREFRONT_OPTIONS_OPTIMIZE_CSS'    => $this->convertToBool($data['storefront_options']['optimize_css'] ?? ''),

            'XCART_OTHER_TRANSLATION_DRIVER' => $data['other']['translation_driver'] ?? '',
            'XCART_OTHER_EVENT_DRIVER'       => $data['other']['event_driver'] ?? '',

            'XCART_OTHER_USE_SENDFILE' => $this->convertToBool($data['other']['use_sendfile'] ?? ''),

            'XCART_OTHER_TAR_EXECUTABLE' => $data['service']['tar_path'] ?? '',

            'XCART_TRIAL_END_DATE' => $data['trial']['end_date'] ?? '',

            'XCART_DEMO_DEMO_MODE' => $this->convertToBool($data['demo']['demo_mode'] ?? ''),

            //'BACKGROUND_JOBS_ENABLED' => '',

            //'MESSENGER_TRANSPORT_DSN' => '',

            //'JWT_SECRET_KEY' => '',
            //'JWT_PUBLIC_KEY' => '',
            'JWT_PASSPHRASE'       => $this->generateHash(),
        ];
    }

    private function getYamlConfiguration($data)
    {
        return [
            'clean_urls'         =>
                [
                    'use_language_url'  => (bool) $this->convertToBool($data['clean_urls']['use_language_url'] ?? ''),
                    'default_separator' => $data['clean_urls']['default_separator'] ?? '',
                    'capitalize_words'  => (bool) $this->convertToBool($data['clean_urls']['capitalize_words'] ?? ''),
                    'use_unicode'       => (bool) $this->convertToBool($data['clean_urls']['use_unicode'] ?? ''),
                    'formats'           =>
                        [
                            'canonical_product_clean_urls_format' => $data['clean_urls']['canonical_product_clean_urls_format'] ?? '',
                            'category_clean_urls_format'          => $data['clean_urls']['category_clean_urls_format'] ?? '',
                            'product_clean_urls_format'           => $data['clean_urls']['product_clean_urls_format'] ?? '',
                            'static_page_clean_urls_format'       => $data['clean_urls']['static_page_clean_urls_format'] ?? '',
                            'sale_discount_clean_urls_format'     => $data['clean_urls']['sale_discount_clean_urls_format'] ?? '',
                            'vendor_clean_urls_format'            => $data['clean_urls']['vendor_clean_urls_format'] ?? '',
                            'news_clean_urls_format'              => $data['clean_urls']['news_clean_urls_format'] ?? '',
                            'brand_clean_urls_format'             => $data['clean_urls']['brand_clean_urls_format'] ?? '',
                            'mmye_info_clean_urls_format'         => $data['clean_urls']['mmye_info_clean_urls_format'] ?? '',
                        ],
                    'aliases'           =>
                        [
                            'new_arrivals'   => $data['clean_urls_aliases']['new_arrivals'] ?? '',
                            'sale_products'  => $data['clean_urls_aliases']['sale_products'] ?? '',
                            'coming_soon'    => $data['clean_urls_aliases']['coming_soon'] ?? '',
                            'bestsellers'    => $data['clean_urls_aliases']['bestsellers'] ?? '',
                            'contact_us'     => $data['clean_urls_aliases']['contact_us'] ?? '',
                            'brands'         => $data['clean_urls_aliases']['brands'] ?? '',
                            'shop_by_level1' => $data['clean_urls_aliases']['shop_by_level1'] ?? '',
                            'shop_by_level2' => $data['clean_urls_aliases']['shop_by_level2'] ?? '',
                            'shop_by_level3' => $data['clean_urls_aliases']['shop_by_level3'] ?? '',
                            'shop_by_level4' => $data['clean_urls_aliases']['shop_by_level4'] ?? '',
                        ],
                ],
            'images'             =>
                [
                    'default_image'          => $data['images']['default_image'] ?? '',
                    'default_image_width'    => (int) ($data['images']['default_image_width'] ?? 0),
                    'default_image_height'   => (int) ($data['images']['default_image_height'] ?? 0),
                    'make_progressive'       => (bool) $this->convertToBool($data['images']['make_progressive'] ?? ''),
                    'generate_retina_images' => (bool) $this->convertToBool($data['images']['generate_retina_images'] ?? ''),
                ],
            'error_handling'     =>
                [
                    'page'          => $data['error_handling']['page'] ?? '',
                    'page_customer' => $data['error_handling']['page_customer'] ?? '',
                    'maintenance'   => $data['error_handling']['maintenance'] ?? '',
                ],
            //'marketplace'        =>
            //    [
            //        'url'                     => 'https://my.x-cart.com/index.php?q=api',
            //        'upgrade_step_time_limit' => 240,
            //        'banner_url'              => 'https://my.x-cart.com/xcinfo',
            //        'editions_url'            => 'https://my.x-cart.com/sites/default/files/editions.yaml',
            //        'segment_url'             => 'https://mc-end-auth.qtmsoft.com',
            //        'xb_host'                 => 'secure.x-cart.com',
            //    ],
            'html_purifier'      =>
                [
                    'options'    =>
                        [
                            'Attr.AllowedFrameTargets' => $data['html_purifier']['Attr.AllowedFrameTargets'] ?? [],
                            'Attr.EnableID'            => $this->convertToBool($data['html_purifier']['Attr.EnableID'] ?? '') ? '1' : '0',
                            'CSS.AllowTricky'          => $this->convertToBool($data['html_purifier']['CSS.AllowTricky'] ?? '') ? '1' : '0',
                            'HTML.SafeEmbed'           => $this->convertToBool($data['html_purifier']['HTML.SafeEmbed'] ?? '') ? '1' : '0',
                            'HTML.SafeObject'          => $this->convertToBool($data['html_purifier']['HTML.SafeObject'] ?? '') ? '1' : '0',
                            'HTML.SafeIframe'          => $this->convertToBool($data['html_purifier']['HTML.SafeIframe'] ?? '') ? '1' : '0',
                        ],
                    'attributes' =>
                        [
                            'iframe' => $data['html_purifier_additional_attributes']['iframe'] ?? [],
                            'video'  => $data['html_purifier_additional_attributes']['video'] ?? [],
                        ],
                ],
            'storefront_options' =>
                [
                    'autocomplete_states_for_countries' => explode(',', $data['storefront_options']['autocomplete_states_for_countries'] ?? ''),
                ],
            'other'              =>
                [
                    'trusted_domains'               => explode(',', $data['other']['trusted_domains'] ?? ''),
                    'x_frame_options'               => $data['other']['x_frame_options'] ?? '',
                    'x_xss_protection'              => $data['other']['x_xss_protection'] ?? '',
                    'content_security_policy'       => $data['other']['content_security_policy'] ?? '',
                    'x_content_type_options'        => $data['other']['x_content_type_options'] ?? '',
                    'csrf_strategy'                 => $data['other']['csrf_strategy'] ?? '',
                    'meta_upgrade_insecure'         => (bool) $this->convertToBool($data['other']['meta_upgrade_insecure'] ?? ''),
                    'show_initialized_transactions' => (bool) $this->convertToBool($data['other']['show_initialized_transactions'] ?? ''),
                    'next_previous_order_criteria'  => $data['other']['next_previous_order_criteria'] ?? '',
                    'cookie_samesite'               => $data['other']['cookie_samesite'] ?? '',
                ],
            'shipping_list'      =>
                [
                    'display_selector_cutoff' => (int) ($data['shipping_list']['display_selector_cutoff'] ?? ''),
                ],
            'export_import'      =>
                [
                    'encodings_list' => $data['export-import']['encodings_list'] ?? [],
                ],
        ];
    }

    private function getSharedYamlConfiguration($data)
    {
        $marketplaceUrl = rtrim($data['marketplace']['url'] ?? '', '/');
        $marketplaceUrl = $marketplaceUrl ? ($marketplaceUrl . '/') : '';

        return [
            'parameters' =>
                [
                    'xcart.marketplace.url'                     => $marketplaceUrl,
                    'xcart.marketplace.upgrade_step_time_limit' => (int) ($data['marketplace']['upgrade_step_time_limit'] ?? 0),
                    'xcart.marketplace.banner_url'              => $data['marketplace']['banner_url'] ?? '',
                    'xcart.marketplace.editions_url'            => $data['marketplace']['editions_url'] ?? '',
                    'xcart.marketplace.segment_url'             => $data['marketplace']['segment_url'] ?? '',
                    'xcart.marketplace.xb_host'                 => $data['marketplace']['xb_host'] ?? '',
                ],
        ];
    }

    private function constructDatabaseUrl(array $params): string
    {
        $url = '//';

        if (($params['user'] ?? '')) {
            $url .= $params['user'];
            if (($params['password'] ?? '')) {
                $url .= ':' . $params['password'];
            }

            $url .= '@';
        }


        $host = empty($params['host']) ? 'localhost' : $params['host'];
        if (empty($params['socket']) && $host === 'localhost') {
            $host = '127.0.0.1';
        }

        $url .= $host;

        if (!empty($params['port'])) {
            $url .= ':' . $params['port'];
        }

        if (!empty($params['dbname'])) {
            $url .= '/' . $params['dbname'];
        }

        $url .= '?serverVersion=5.7';

        return $url;
    }

    private function getConfiguration()
    {
        return $this->configParser->getData();
    }

    private function convertToBool($value)
    {
        $value = strtolower($value);

        return (string) (!in_array($value, ['off', 'n'], true) && $value);
    }

    private function convertToMonologLogLevel($level)
    {
        $logLevels = [
            LOG_DEBUG   => Logger::DEBUG,
            LOG_INFO    => Logger::INFO,
            LOG_NOTICE  => Logger::NOTICE,
            LOG_WARNING => Logger::WARNING,
            LOG_ERR     => Logger::ERROR,
            LOG_CRIT    => Logger::CRITICAL,
            LOG_ALERT   => Logger::ALERT,
            LOG_EMERG   => Logger::EMERGENCY,
        ];

        return $logLevels[(is_string($level) && !is_numeric($level)) ? constant($level) : $level] ?? Logger::WARNING;
    }

    private function generateHash($bytesLength = 16)
    {
        return bin2hex(random_bytes($bytesLength));
    }
}
