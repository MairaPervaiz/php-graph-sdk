<html>
<head>
<meta charset="utf-8"/>
<title>Post</title>
<body>
<?php
require 'Facebook.php';
$fb = new Facebook(array(
  'app_id' => '1991829711029056', // Replace {app-id} with your app id
  'app_secret' => 'e6ba27898880d0860182ba00482e06c1',
  'default_graph_version' => 'v2.10'));
  if($fb->getUser==0){
	  $loginURL=$fb->getLoginUrl(array(
	  scope=>'user_groups,manage_pages,publish_actions,publish_stream'
	  ));
	  echo "<a href=$loginURL> LOGIN WITH FACEBOOK</a>";
  }
  else{
	  //for posting on user wall
  $api=$fb->api('me/feed', 'POST',array(
  link=>'facebook.com',
  message=> 'just checking',
  picture=>''
  ));
  
  //for page post
  /*$pages= $fb->api('me/accounts');
  $id=$pages[data][0][id];
  $token=$pages[data][0][access_token];
  $api=$fb->api(id.'/feed'.'POST'.array(
  link=>'facebook.com',
  message=> 'just checking'
  picture=>''
  ));
  echo "<pre>";
  print_r($pages);
  echo "</pre>";*/
  }
	?>
	<html>
	<body>
