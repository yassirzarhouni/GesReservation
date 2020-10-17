<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'facebook' => [
        'client_id' => '697467147448843',
        'client_secret' => '1336bdd5b14a4e86f16a12157a365695',
        'redirect' => 'http://127.0.0.1/login/facebook/callback',
    ],

    'google' => [
        'client_id' => '34863965832-s38v6n2p4r98cb8h38s7n8su3lb6l9eu.apps.googleusercontent.com',
        'client_secret' => 'VcaVL6mUDg_RRR3MYy2x7QcK',
        'redirect' => 'http://127.0.0.1/login/google/callback',
    ],

];
