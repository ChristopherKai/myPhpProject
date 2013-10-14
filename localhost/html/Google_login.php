<?php
require_once 'google-api-php-client/src/Google_Client.php';
require_once 'google-api-php-client/src/contrib/Google_CalendarService.php';
require("../includes/config.php"); 
require_once 'google-api-php-client/src/contrib/Google_Oauth2Service.php';

$client = new Google_Client();
$client->setApplicationName("Google Calendar PHP Starter Application");

// Visit https://code.google.com/apis/console?api=calendar to generate your
// client id, client secret, and to register your redirect uri.
// $client->setClientId('insert_your_oauth2_client_id');
// $client->setClientSecret('insert_your_oauth2_client_secret');
// $client->setRedirectUri('insert_your_oauth2_redirect_uri');
// $client->setDeveloperKey('insert_your_developer_key');



if (isset($_GET['logout'])) {
  unset($_SESSION['token']);
}

if (isset($_GET['code'])) {
  $client->authenticate($_GET['code']);
  $_SESSION['token'] = $client->getAccessToken();
  header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
}

if (isset($_SESSION['token'])) {
 
  $rows = query("SELECT * FROM users WHERE username = ?", $email);
  if (count($rows) == 0)
  {
    $result = query("INSERT INTO users (username, cash) VALUES(?, 10000.00)",$email);
    if ( $result === false)
        {
             apologize("This email exists.");
        }
    $rows = query("SELECT LAST_INSERT_ID() AS id"); 
        $id = $rows[0]["id"];
        $_SESSION["id"] = $id;
        redirect("index.php");
  }
  else
  {
    
  }
  
}

if ($client->getAccessToken()) {

$user = $oauth2->userinfo->get();

}

 else 
{
  $authUrl = $client->createAuthUrl();
  print "<a class='login' href='$authUrl'>Connect Me!</a>";
  
}
?>

