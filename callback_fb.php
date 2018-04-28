<html>
<head>
<meta charset="utf-8">
<title> Untitled Document </title>
<script language="Java script">
document.write("FACEBOOK");
</script>
</head>
<body>
<?php
$fb = new Facebook(array(
  'app_id' => '1991829711029056',
  'app_secret' => 'e6ba27898880d0860182ba00482e06c1',
  'default_graph_version' => 'v2.10'
  
  ));
$helper = $fb->getRedirectLoginHelper();

try {
  $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Response Exception:' . $e->getMessage();
  exit();
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit();
}

if (!$accessToken) {
    header("Location: loginfb.php");
	exit();
}

// The OAuth 2.0 client handler helps us manage access tokens
$oAuth2Client = $fb->getOAuth2Client();

if (! $accessToken->isLongLived()) {
  // Exchanges a short-lived access token for a long-lived one
  try {
    $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
  } catch (Facebook\Exceptions\FacebookSDKException $e) {
    echo "<p>long-lived access token error: " . $helper->getMessage() . "</p>\n\n";
    exit;
  }
  $response=$fb->get('endpoint:/me?fields=id,name,email');
  $userdata=$response->getGraphNode()->asArray();

  var_dump($userdata);
}$_SESSION['userdata']=$userdata;

$_SESSION['access_token'] = (string) $accessToken;
header("Location: indexfb.php");
exit();

// User is logged in with a long-lived access token.
// You can redirect them to a members-only page.
//header('Location: https://example.com/members.php');
?>