<?php die(); ?>
[15:43:39.000000] PaypalCommercePlatform Onboarding AccessToken:Retrieve access token
Runtime id: ceaeb43dd0c141af909a26414269c0ae
SAPI: apache2handler; IP: 127.0.0.1
URI: /admin.php?target=onboarding_wizard
Method: GET

[15:43:41.000000] array (
  'message' => 'PaypalCommercePlatform Onboarding AccessToken:Access token recieved',
  'data' => 
  array (
    'scope' => 'https://uri.paypal.com/services/customer/partner-referrals/readwrite https://uri.paypal.com/services/payments/realtimepayment https://uri.paypal.com/services/disputes/update-seller https://uri.paypal.com/services/payments/payment/authcapture openid https://uri.paypal.com/services/disputes/read-seller https://uri.paypal.com/services/payments/refund https://uri.paypal.com/services/customer/onboarding/user https://uri.paypal.com/services/risk/raas/transaction-context https://uri.paypal.com/services/partners/merchant-accounts/readwrite https://uri.paypal.com/services/identity/grantdelegation https://api.paypal.com/v1/payments/.* https://uri.paypal.com/services/payments/referenced-payouts-items/readwrite https://uri.paypal.com/services/reporting/search/read https://uri.paypal.com/services/payments/initiatepayment https://uri.paypal.com/services/customer/onboarding/account https://uri.paypal.com/services/customer/partner https://uri.paypal.com/services/customer/onboarding/sessions https://uri.paypal.com/services/customer/merchant-integrations/read https://uri.paypal.com/services/applications/webhooks',
    'access_token' => 'A21AAMHQPl6pCm7U_620SmwsdUZRloGaJ-y4JQUy9Vl29HMLUS5JnHn2FLEve4ZUp6TusiXBpai329CYBvSNH6E9FAIDScYIw',
    'token_type' => 'Bearer',
    'app_id' => 'APP-14G02482RW819934D',
    'expires_in' => 32400,
    'nonce' => '2023-05-06T05:46:10ZcryYpMRsG13seTx82KbpDLGJR58ns4MjAXjZNucBqpc',
    'expiration' => 1683384310,
    'partner_id' => '5BPT2FEWWYATY',
  ),
)
Runtime id: ceaeb43dd0c141af909a26414269c0ae
SAPI: apache2handler; IP: 127.0.0.1
URI: /admin.php?target=onboarding_wizard
Method: GET

[15:43:41.000000] array (
  'message' => 'PaypalCommercePlatform Onboarding:Generate SignUp link',
  'data' => 
  array (
    'operations' => 
    array (
      0 => 
      array (
        'operation' => 'API_INTEGRATION',
        'api_integration_preference' => 
        array (
          'rest_api_integration' => 
          array (
            'integration_method' => 'PAYPAL',
            'integration_type' => 'FIRST_PARTY',
            'first_party_details' => 
            array (
              'features' => 
              array (
                0 => 'PAYMENT',
                1 => 'REFUND',
                2 => 'ACCESS_MERCHANT_INFORMATION',
              ),
              'seller_nonce' => 'bf5c839787584f87765186231b7e1edcee6489996233be0d3a0315ddc5603ccbad2da2b470a33dc247f504f536427968560256189e0fb7d22da2bad759711202',
            ),
          ),
        ),
      ),
    ),
    'products' => 
    array (
      0 => 'PPCP',
    ),
    'legal_consents' => 
    array (
      0 => 
      array (
        'type' => 'SHARE_DATA_CONSENT',
        'granted' => true,
      ),
    ),
    'partner_config_override' => 
    array (
      'return_url' => 'http://xcartsite/admin.php?target=paypal_commerce_platform_settings&action=onboarding_return&return=onboarding_wizard',
    ),
  ),
)
Runtime id: ceaeb43dd0c141af909a26414269c0ae
SAPI: apache2handler; IP: 127.0.0.1
URI: /admin.php?target=onboarding_wizard
Method: GET

[15:43:42.000000] array (
  'message' => 'PaypalCommercePlatform Onboarding:SignUp link',
  'data' => 
  array (
    'links' => 
    array (
      0 => 
      array (
        'href' => 'https://api.paypal.com/v2/customer/partner-referrals/YTg5MDM3ZGItOTg4OC00MDM0LWI0M2UtZTljMWQ0NWE4MDVkSDZzcVNMdEwxSWF2T1IySTBkOWNNWFZTZWluV3E4aCtSLzRsaXlaZ2FUUT12Mg==',
        'rel' => 'self',
        'method' => 'GET',
        'description' => 'Read Referral Data shared by the Caller.',
      ),
      1 => 
      array (
        'href' => 'https://www.paypal.com/bizsignup/partner/entry?referralToken=YTg5MDM3ZGItOTg4OC00MDM0LWI0M2UtZTljMWQ0NWE4MDVkSDZzcVNMdEwxSWF2T1IySTBkOWNNWFZTZWluV3E4aCtSLzRsaXlaZ2FUUT12Mg==',
        'rel' => 'action_url',
        'method' => 'GET',
        'description' => 'Target WEB REDIRECT URL for the next action. Customer should be redirected to this URL in the browser.',
      ),
    ),
  ),
)
Runtime id: ceaeb43dd0c141af909a26414269c0ae
SAPI: apache2handler; IP: 127.0.0.1
URI: /admin.php?target=onboarding_wizard
Method: GET

