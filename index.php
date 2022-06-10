<?php

require 'vendor/autoload.php';

$session = new SpotifyWebAPI\Session(
    '4c5f9076f9c84121ba5624c470cbcf9e',
    '35c33c8d51e6429ba6e9937319d981c3',
    'http://localhost/index.php',
);
$api = new SpotifyWebAPI\SpotifyWebAPI();

if (isset($_GET['code'])) {
    $session->requestAccessToken($_GET['code']);
    $api->setAccessToken($session->getAccessToken());

} else {
    header('Location: ' . $session->getAuthorizeUrl(array(
            'scope' => array(
                'playlist-read-private',
                'playlist-modify-private',
                'user-read-private',
                'playlist-modify'
            )
        )));
    die();
}

echo '<pre>';
print_r($api->me()); //認証を受けたアカウントのプロフィールが表示される
echo '</pre>';
?>