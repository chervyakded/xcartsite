; <?php /*
; WARNING: Do not change the line above
;
; +-------------------------------------+
; |   X-Cart 5 configuration file   |
; +-------------------------------------+
;
; -----------------
;  About this file
; -----------------
;

;
; ----------------------
;  SQL Database details
; ----------------------
;
[database_details]
hostspec = ""
socket   = ""
port     = ""
database = ""
username = ""
password = ""
table_prefix = "xlite_"
charset = "utf8"

;
; ----------------------
;  Cache settings
; ----------------------
;
[cache]
; default cache ttl in seconds, 604800 - 1 week
default_cache_ttl = 604800
; Type of cache used. Can take auto, redis, memcache, memcached, apcu, xcache, file values.
type=file
; Cache namespace
namespace=XLite
; List of memcache\redis servers. Semicolon is used as a delimiter.
; Each server is specified with a host name and port number, divided
; by a colon. If the port is not specified, the default
; port 11211 is used for memcache(d), or 6379 for redis.
servers=

;
; -----------------------------------------------------------------------
;  X-Cart 5 HTTP & HTTPS host, web directory where cart installed
;  and allowed domains
; -----------------------------------------------------------------------
;
; NOTE:
; You should put here hostname ONLY without http:// or https:// prefixes.
; Do not put slashes after the hostname.
; Web dir is the directory in the URL, not the filesystem path.
; Web dir must start with slash and have no slash at the end.
; The only exception is when you configure for the root of the site,
; in which case you should leave the option empty.
; Domains should be listed separated by commas.
;
; WARNING: Do not set the "$" sign before the parameter names!
;
; EXAMPLE 1:
;
;   http_host = "www.yourhost.com"
;   https_host = "www.securedirectories.com/yourhost.com"
;   web_dir = "/shop"
;   domains = "www.yourhost2.com,yourhost3.com"
;
; will result in the following URLs:
;
;   http://www.yourhost.com/shop
;   https://www.securedirectories.com/yourhost.com/shop
;
;
; EXAMPLE 2:
;
;   http_host = "www.yourhost.com"
;   https_host = "www.yourhost.com"
;   web_dir = ""
;
; will result in the following URLs:
;
;   http://www.yourhost.com
;   https://www.yourhost.com
;
[host_details]
http_host = ""
https_host = ""
web_dir = ""
domains = ""
admin_self = "admin.php"
cart_self = "cart.php"

[clean_urls]
; Is use urls like domain.com/LG for languages
; possible values "Y", "N"
; Changing this setting requires to re-deploy your store
use_language_url = "Y"

; String with one or more chars.
; It will be used to autogenerate clean URLs.
; By default, only the "-" or "_" characters are allowed.
; Empty string is also allowed.
default_separator = "-"

; Get clean URLs capitalized for every starting letter of a word
capitalize_words = Off

; Allow non latin symbols for autogenerated clean URLs
use_unicode = Off

; Canonical product Clean URL’s format
; possible values:
; domain/product_clean_url
; domain/main_category_clean_url/product_clean_url
;
canonical_product_clean_urls_format = "domain/product_clean_url"

; Category Clean URL’s format
; possible values:
; domain/parent/goalcategory/
; domain/goalcategory/
; domain/parent/goalcategory.html
; domain/goalcategory.html
;
; Changing this setting will not affect existing url's
; and requires to re-deploy your store
category_clean_urls_format = "domain/parent/goalcategory/"

; Product Clean URL’s format
; possible values:
; domain/goalproduct
; domain/goalproduct.html
;
; Changing this setting will not affect existing url's
; and requires to re-deploy your store
product_clean_urls_format = "domain/goalproduct"

; Static page Clean URL’s format
; possible values:
; domain/goalpage
; domain/goalpage.html
;
; Changing this setting will not affect existing url's
; and requires to re-deploy your store
static_page_clean_urls_format = "domain/goalpage"

; Sale discount page Clean URL’s format
; possible values:
; domain/goaldiscount
; domain/goaldiscount.html
;
; Changing this setting will not affect existing url's
; and requires to re-deploy your store
sale_discount_clean_urls_format = "domain/goaldiscount"

; Vendor Clean URL’s format
; possible values:
; domain/goalvendor
; domain/goalvendor.html
;
; Changing this setting will not affect existing url's
; and requires to re-deploy your store
vendor_clean_urls_format = "domain/goalvendor"

; News Clean URL’s format
; possible values:
; domain/goalnews
; domain/goalnews.html
;
; Changing this setting will not affect existing url's
; and requires to re-deploy your store
news_clean_urls_format = "domain/goalnews"

; Brand Clean URL’s format
; possible values:
; domain/goalbrand
; domain/goalbrand.html
;
; Changing this setting will not affect existing url's
; and requires to re-deploy your store
brand_clean_urls_format = "domain/goalbrand"

; MMYE info page Clean URL's format
; possible values:
; domain/level1/level2/level3/level4
; domain/all_levels_clean_url
; domain/level1/level2/level3/level4.html
; domain/all_levels_clean_url.html
;
; Changing this setting will not affect existing url's
; and requires to re-deploy your store
mmye_info_clean_urls_format = "domain/level1/level2/level3/level4"

[clean_urls_aliases]
; to define your own alias add line below as:
; target = "clean-url"
new_arrivals = "newarrivals"
sale_products = "sale-products"
coming_soon = "coming-soon"
bestsellers = "bestsellers"
contact_us = "contact-us"
brands = "all-brands"
shop_by_level1 = "shop-by-make"
shop_by_level2 = "shop-by-model"
shop_by_level3 = "shop-by-year"
shop_by_level4 = "shop-by-engine"

;
; -----------------
;  Logging details
; -----------------
;
[log_details]
type = file
name = "var/log/xlite.log.php"
level = LOG_WARNING
ident = "XLite"
suppress_errors = On
suppress_log_errors = Off

;
; Skin details
;
[skin_details]
skin = customer
locale = en

;
; Default image settings
;
[images]
default_image = "images/no_image.png"
default_image_width = 110
default_image_height = 110
make_progressive = On
generate_retina_images = On

; Installation path of Image Magick executables:
; for example:
; image_magick_path = "C:\\Program Files\\ImageMagick-6.7.0-Q16\\"   (in Windows)
; image_magick_path = "/usr/local/imagemagick/" (in Unix/Linux )
; You should consult with your hosting provider to find where Image Magick is installed
; If you leave it empty then PHP GD library will be used.
;
image_magick_path =

;
; Installer authcode.
; A person who do not know the auth code can not access the installation script.
; Installation authcode is created authomatically and stored in this section.
;
[installer_details]
auth_code = ""
shared_secret_key = ""

;
; Some options to optimize the store
;
[performance]
developer_mode = Off

; Enable to cache resource paths
skins_cache = off

;
; Decorator options
;
[decorator]
time_limit = 600
use_tokenizer = Off
disable_software_reset = Off
use_output = Off
quick_data_rebuilding = Off

;
; Error handling options
;
[error_handling]
; Template for error pages
page = "public/error.html"
page_customer = "public/customer/error.html"
; Template for maintenance pages
maintenance = "public/maintenance.html"

;
; Marketplace
;
[marketplace]
url = "https://my.x-cart.com/index.php?q=api"
upgrade_step_time_limit = 240
banner_url = "https://my.x-cart.com/xcinfo"
editions_url = "https://my.x-cart.com/sites/default/files/editions.yaml"
segment_url = "https://mc-end-auth.qtmsoft.com"

;
; Service tool
;
[service]
verify_certificate = On

; Tar executable path
; for example:
; tar_path = "C:\\Program Files\\Tar\\tar.exe"   (in Windows)
; tar_path = "/usr/bin/tar" (in Unix/Linux )
; You should consult with your hosting provider to find where Tar is installed
; If you leave it empty then PATH everonment will be used to find tar executable.
;
tar_path =

basic_auth_user = ''
basic_auth_pass = ''

;
; Language options
;
[language]
default = en

;
; Installation parameters
;
[installation]
installation_lng = en

;
; AMQP server
;
[amqp]
host     = "localhost"
port     = 5672
user     = "guest"
password = "guest"
vhost    = "/"
exchange = "xlite"

;
; HTML Purifier options
; See http://htmlpurifier.org/live/configdoc/plain.html for more details on HTML Purifier options
;
[html_purifier]
; Allow link 'target' attribute
Attr.AllowedFrameTargets = On

; List of allowed values for 'target' attribute
Attr.AllowedFrameTargets[] = _blank
Attr.AllowedFrameTargets[] = _self
Attr.AllowedFrameTargets[] = _top
Attr.AllowedFrameTargets[] = _parent

; Allow 'id' attribute
Attr.EnableID = On

; Allow tricky css like 'display:block;' on images
CSS.AllowTricky = On

; Allow embed tags
HTML.SafeEmbed = On

; Allow object tags
HTML.SafeObject = On

; Allow iframe tags
HTML.SafeIframe = On

; List of allowed URI (without http:// or https:// part) for iframe tags
; If there are no allowed URIs specified then any src will be allowed for iframe tags
;
; Examples:
;
; URI.SafeIframeRegexp[] = "www.youtube.com/embed/"
; URI.SafeIframeRegexp[] = "www.youtube-nocookie.com/embed/"
; URI.SafeIframeRegexp[] = "player.vimeo.com/video/"

; HTML Purifier additional attributes
; format:
; tag[] = attribute1:attribute_definition2
; tag[] = attribute2:attribute_definition2
;
; For tag only(if you specified attribute as above - tag will be added automatically):
; tag[] =
;
; Attribute definitions:
; Enum      - as example "Enum#_blank,_self,_target,_top"
; Bool      - Boolean attribute, with only one valid value: the name of the attribute.
; CDATA     - Attribute of arbitrary text. (also Text valid)
; ID        - Attribute that specifies a unique ID
; Pixels    - Attribute that specifies an integer pixel length
; Length    - Attribute that specifies a pixel or percentage length
; NMTOKENS  - Attribute that specifies a number of name tokens, example: the class attribute
; URI       - Attribute that specifies a URI, example: the href attribute
; Number    - Attribute that specifies an positive integer number
[html_purifier_additional_attributes]
iframe[] = allowfullscreen:CDATA
video[] = src:URI
video[] = type:Text
video[] = width:Length
video[] = height:Length
video[] = poster:URI
video[] = preload:Enum#auto,metadata,none
video[] = controls:Bool

[storefront_options]
; Do not close target=callback for payments if storefront is closed
callback_opened = On
; Works only with 'Aggregate CSS files' option enabled
optimize_css = On

; All the following countries always uses custom state with autocomplete(if available)
; possible values - country codes ('GB,US,DE' as example), 'All' or empty ''
autocomplete_states_for_countries = 'GB'
;
; Other options
;
[other]
; Translation drive code - auto / gettext / db
translation_driver = auto
; Event driver code - auto / db / amqp
event_driver = auto

; List of trusted domains.
; This option prevents redirecting to untrusted URLs passed via returnURL parameter.
; Examples:
; trusted_domains = "google.com"
; trusted_domains = "google.com, yahoo.com"
trusted_domains =

; List of trusted proxies.
; CloudFlare IPs are set by default
; Examples:
; trusted_proxies = "17.250.45.232, 88.21.194.95"
; trusted_proxies = "162.158.0.0/15" # ip range
trusted_proxies = "173.245.48.0/20, 103.21.244.0/22, 103.22.200.0/22, 103.31.4.0/22, 141.101.64.0/18, 108.162.192.0/18, 190.93.240.0/20, 188.114.96.0/20, 197.234.240.0/22, 198.41.128.0/17, 162.158.0.0/15, 104.16.0.0/12, 172.64.0.0/13, 131.0.72.0/22, 2400:cb00::/32, 2606:4700::/32, 2803:f800::/32, 2405:b500::/32, 2405:8100::/32, 2a06:98c0::/29, 2c0f:f248::/32"

; X-Frame-Options value
; For possible values see https://developer.mozilla.org/en-US/docs/Web/HTTP/X-Frame-Options
; Examples:
; x_frame_options = 'disabled'
; x_frame_options = 'sameorigin'
x_frame_options = 'sameorigin'

; X-XSS-Protection value
; For possible values see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-XSS-Protection
; Examples:
; x_xss_protection = 'disabled' # prevent X-XSS-Protection header sending
; x_xss_protection = '0'
; x_xss_protection = '1; mode=block'
x_xss_protection = '1; mode=block'

; Content-Security-Policy value
; For possible values see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy
; Examples:
; content_security_policy = 'disabled' # prevent Content-Security-Policy header sending
; content_security_policy = "default-src 'self'"
; content_security_policy = "default-src 'self'; img-src *;"
content_security_policy = 'disabled'

; X-Content-Type-Options value
; For possible values see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-Content-Type-Options
; Examples:
; x_content_type_options = 'disabled' # prevent X-Content-Type-Options header sending
; x_content_type_options = 'nosniff'
x_content_type_options = 'nosniff'

; CSRF token strategy
; possible values: per-session, per-form
csrf_strategy = per-session
meta_upgrade_insecure = Off

show_initialized_transactions = Off

; Use X-Sendfile and X-Accel-Redirect to download files
; Note that server should be properly configured
use_sendfile = Off

; Next-previous order criteria
; allowed values: orderNumber, date
next_previous_order_criteria = orderNumber

; SameSite prevents the browser from sending this cookie along with cross-site requests.
; The main goal is mitigate the risk of cross-origin information leakage. It also provides
; some protection against cross-site request forgery attacks (https://www.owasp.org/index.php/SameSite)
; Possible values for the flag are 'lax', 'strict' or '' (not set)
cookie_samesite = 'lax'

[export-import]

; Export/Import available encodings list
; This values should be valid iconv encoding alias and should be listed in iconv -l output
encodings_list[] = 'UTF-8'
encodings_list[] = 'ISO-8859-1'
encodings_list[] = 'WINDOWS-1251'
encodings_list[] = 'CSSHIFTJIS'
encodings_list[] = 'WINDOWS-1252'
encodings_list[] = 'GB2312'
encodings_list[] = 'EUC-KR'
encodings_list[] = 'EUC-JP'
encodings_list[] = 'GBK'
encodings_list[] = 'ISO-8859-2'
encodings_list[] = 'ISO-8859-15'
encodings_list[] = 'WINDOWS-1250'
encodings_list[] = 'WINDOWS-1256'
encodings_list[] = 'ISO-8859-9'
encodings_list[] = 'BIG5'
encodings_list[] = 'WINDOWS-1254'
encodings_list[] = 'WINDOWS-874'

[google_product_feed]
; This values will be added into google shopping group selector 
;additional_options[] = 'condition'
;additional_options[] = 'adult'
;additional_options[] = 'tax_category'
;additional_options[] = 'shipping_label'
;additional_options[] = 'multipack'
;additional_options[] = 'is_bundle'

[queue]
; Enable to consume jobs via Cron or Demon(target=consumer, action=consumeAll)
backgroundJobsSchedulingEnabled = false

; Consume jobs via js runner
jsRunnerForOnlineEnabled = true

[shipping_list]
; Maximum number of shipping options to be shown as a radio button list on the order creation page. If the number of available options exceeds this value, the options will be shown in a drop-down box.
display_selector_cutoff = 8

; WARNING: Do not change the line below
; */ ?>
