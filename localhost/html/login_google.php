
<?php
require("../includes/config.php");
require_once 'google-api-php-client/src/Google_Client.php';
require_once 'google-api-php-client/src/contrib/Google_PlusService.php';
require_once 'google-api-php-client/src/contrib/Google_Oauth2Service.php';
// Set your cached access token. Remember to replace $_SESSION with a
// real database or memcached.


$client = new Google_Client();
$client->setApplicationName('Google+ PHP Starter Application');
// Visit https://code.google.com/apis/console?api=plus to generate your
// client id, client secret, and to register your redirect uri.
$client->setClientId('972439704915-h4b1n0gt0hv3qdnkoijmuocegjguc6j4.apps.googleusercontent.com');
$client->setClientSecret('ekUoP_YzHSswopHxBSz0JPuU');
$client->setRedirectUri('http://localhost/portfolio.php');
$client->setDeveloperKey('AIzaSyCeHWt3TZs4iFljqCzYMbR7QIfGWb0n78E');



if (isset($_REQUEST['logout'])) {
  unset($_SESSION['access_token']);
}

if (isset($_GET['code'])) {
  $client->authenticate($_GET['code']);
  $_SESSION['access_token'] = $client->getAccessToken();
  header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
}
else
{
    $scope='https://www.googleapis.com/auth/userinfo.profile';
    $re='http://localhost/portfolio.php';
    $id='972439704915-h4b1n0gt0hv3qdnkoijmuocegjguc6j4.apps.googleusercontent.com';
    header("https://accounts.google.com/o/oauth2/auth?response_type=code&redirect_uri={$re}&client_id={$id}&scope={$scope}");
}
if (isset($_SESSION['access_token'])) {
  $client->setAccessToken($_SESSION['access_token']);
}

if ($client->getAccessToken()) {
  $me = $plus->people->get('me');

  // These fields are currently filtered through the PHP sanitize filters.
  // See http://www.php.net/manual/en/filter.filters.sanitize.php
  $url = filter_var($me['url'], FILTER_VALIDATE_URL);
  $img = filter_var($me['image']['url'], FILTER_VALIDATE_URL);
  $name = filter_var($me['displayName'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  $personMarkup = "<a rel='me' href='$url'>$name</a><div><img src='$img'></div>";

  $optParams = array('maxResults' => 100);
$comments = $plus->comments->listComments('z12gtjhq3qn2xxl2o224exwiqruvtda0i', 
    $optParams);
foreach($comments['items'] as $comment) {
  print "{$comment['id']}, {$comment['object']['content']}\n"; 
}

  }

 
 else {
  $authUrl = $client->createAuthUrl();
}
?>


