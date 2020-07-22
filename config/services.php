<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
        'webhook' => [
            'secret' => env('STRIPE_WEBHOOK_SECRET'),
            'tolerance' => env('STRIPE_WEBHOOK_TOLERANCE', 300),
        ],
    ],
	'github' => [
    'client_id' => env('GITHUB_CLIENT_ID','feee6eb5f5c2c19744dd'),
    'client_secret' => env('GITHUB_CLIENT_SECRET','50f8ed645c4778cd1c82c5665cdab63d11db491f'),
    'redirect' => 'https://bashar-hrm-app-laravel.herokuapp.com/login/github/callback',
],
'google' => [
    'client_id' => env('GOOGLE_CLIENT_ID','638313626196-vfmkqqng70jub2ltmp7r0ak4rj2vcde1.apps.googleusercontent.com'),
    'client_secret' => env('GOOGLE_CLIENT_SECRET','wue-tYgCm09p7olawGg7okxB'),
    'redirect' => 'https://bashar-hrm-app-laravel.herokuapp.com/login/google/callback',
],

];
