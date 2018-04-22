<?php
session_start();
require_once "Facebook/autoload.php";
?>
<html>
<head>
<meta charset="utf-8">
<title> Facebook Login </title>
<script language="Java script">
document.write("FACEBOOK");
</script>
</head>
<body>
<?php
$appid = '1991829711029056';
$appsecret = 'e6ba27898880d0860182ba00482e06c1';
$fb = new \Facebook\Facebook(['app_id' => '1991829711029056',
  'app_secret' => 'e6ba27898880d0860182ba00482e06c1',
  'default_graph_version' => 'v2.10'
]);
$fbApp = $fb->getApp();

$helper = $fb->getRedirectLoginHelper();

$permissions = 'email'; // Optional permissions
$redirectURL = 'http://localhost/fyp/callback_fb.php';
$loginUrl = $helper->getLoginUrl($redirectURL , $permissions);
$SESSION['userdata']=$userdata;
$SESSION['accessToken']=(String) $accessToken;


echo '<a href="' .htmlspecialchars($loginUrl). '"> Login with Facebook! </a>';'in as ' . $loginfb->getName();
?>
</html>
</body>