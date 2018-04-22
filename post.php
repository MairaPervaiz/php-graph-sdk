<html>
<head>
<meta charset="utf-8"/>
<title>Post</title>
<body>
<?php
$base = $_SERVER['localhost'];    
define('FACEBOOK_SDK_V4_SRC_DIR', $base.'/www/fyp/facebook-php-sdk-v4/src/Facebook/');
require ($base.'/www/fyp/facebook-php-sdk-v4/autoload.php');
$facebook = new Facebook(array(
  "1991829711029056",
  "e6ba27898880d0860182ba00482e06c1",
  true
));
$session = $facebook->getSession();

if($session && isset($_POST['fb_chkb'])) {
    $facebook->api('/me/feed', 'post', array($_POST['message']));
	}
	?>
	<html>
	<body>
