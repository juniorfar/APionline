<?php
// Copy this file to config/paypal.php on your server and fill in real credentials.
// Do NOT commit the real file to source control. Keep it outside the webroot if possible.

return [
    // 'env' => 'sandbox' or 'live'
    'env' => 'sandbox',

    // REST API credentials (create an app in PayPal Developer Dashboard)
    'client_id' => 'ARRrOcdVX_N7KNHLuO_DLTWvM_QWN2imRTaGRyhlEJSdJI2j0_0xf2cqDRSxJZOT3b9g3Iv8o_I5LCko',
    'client_secret' => 'YOUR_PAYPAL_CLIENT_SECRET_HERE',

    // Base API URLs for sandbox and live.
    // Note: PayPal sometimes uses api-m.sandbox.paypal.com or api.sandbox.paypal.com;
    // both can work, but prefer api-m for newer integrations if available.
    'api_base' => [
        'sandbox' => 'https://api-m.sandbox.paypal.com',
        'live' => 'https://api-m.paypal.com',
    ],

    // Default payout currency
    'currency' => 'USD',

    // Minimal payout amount (server-side enforce)
    'min_payout' => 1.00,

    // Token cache filename (relative to sys_get_temp_dir()). This is used by sample code.
    'token_cache_file' => 'paypal_token_cache.json',
];