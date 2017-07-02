<?php
session_start();
require('vendor/autoload.php');
$provider = new \Discord\OAuth\Discord([
    'clientId'     => '330031331201384448',
    'clientSecret' => 'wAjkGyebc3tQMHkZo4wnIAUIhoJtS7Ae',
    'redirectUri'  => 'https://apollobots.herokuapp.com/login.php',
]);

if (! isset($_GET['code'])) {
    header('Location: '.$provider->getAuthorizationUrl());
} else {
    $token = $provider->getAccessToken('authorization_code', [
        'code' => $_GET['code'],
    ]);

    // Get the user object.
    $user = $provider->getResourceOwner($token);
    $_SESSION['userid'] = $user->id;
    $_SESSION['username'] = $user->username;
    $_SESSION['avataruri'] = $user->avatar;
    header('Location: /');
    
}
