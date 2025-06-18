<?php

use Google\Client as GoogleClient;
use Google\Service\Oauth2;

if (!function_exists('initGoogleClient')) {
    function initGoogleClient()
    {
        require_once APPPATH . '../vendor/autoload.php';
        
        $client = new Google_Client();
        
        // Get configuration from environment
        $clientId = env('google.clientId', 'your-google-client-id');
        $clientSecret = env('google.clientSecret', 'your-google-client-secret');
        $redirectUri = env('google.redirectUri', base_url('auth/google/callback'));
        
        $client->setClientId($clientId);
        $client->setClientSecret($clientSecret);
        $client->setRedirectUri($redirectUri);
        $client->addScope('email');
        $client->addScope('profile');
        
        return $client;
    }
}

if (!function_exists('getGoogleUserInfo')) {
    function getGoogleUserInfo($token)
    {
        $client = initGoogleClient();
        $client->setAccessToken($token);
        
        $oauth2 = new Google_Service_Oauth2($client);
        return $oauth2->userinfo->get();
    }
}

if (!function_exists('getGoogleAuthUrl')) {
    function getGoogleAuthUrl()
    {
        $client = initGoogleClient();
        return $client->createAuthUrl();
    }
} 