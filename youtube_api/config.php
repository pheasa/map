<?php
require_once 'vendor/autoload.php';
require_once 'class-db.php';
 
define('GOOGLE_CLIENT_ID', '92773420510-1q2m6h8dkpvjsoogkm9prrpvqtvuq03s.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET', 'GgBbS2H4Q5KM8QR2f5SsIb_E');
 
$config = [
    'callback' => 'http://localhost/test/youtube_api/callback.php',
    'keys'     => [
                    'id' => GOOGLE_CLIENT_ID,
                    'secret' => GOOGLE_CLIENT_SECRET
                ],
    'scope'    => 'https://www.googleapis.com/auth/youtube https://www.googleapis.com/auth/youtube.upload',
    'authorize_url_parameters' => [
            'approval_prompt' => 'force', // to pass only when you need to acquire a new refresh token.
            'access_type' => 'offline'
    ]
];
 
$adapter = new Hybridauth\Provider\Google( $config );