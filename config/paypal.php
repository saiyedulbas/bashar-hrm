<?php 
return [ 
    'client_id' => env('PAYPAL_CLIENT_ID','ASAGXPw3AikMUotl02I3d2qE7PPd8v1kt6mPZF_Oy51jQoiEwz4b0qEHseuMelZOtkqxfyciJOMWnSJv'),
    'secret' => env('PAYPAL_SECRET','EFj2vFs9Lfo3LdwCySZvlUME3Tim8PNo1qVED20VdQY85PpP01_AlNKVXpTctEj96AzRqGBjoDmBhAWz'),
    'settings' => array(
        'mode' => env('PAYPAL_MODE','sandbox'),
        'http.ConnectionTimeOut' => 30,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'ERROR'
    ),
];