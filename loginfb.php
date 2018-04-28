<?php
require_once "FacebookConnection.php";

if(isset($_SESSION['access_token'])){
header('Location: indexfb.php');
exit();
}
$redirectURL ="http://localhost/fyp/callback_fb.php";
$permissions = 'email';
$loginURL=$helper->getloginURL($redirectURL, $permissions);
echo $loginURL;
?>
<html>
<head>
<meta charset="utf-8">
<title> Login To Facebook </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
<div class="container" style="margin-top: 100px">
<div class="row justify-content-center">
<div class="col-md-6 col-md-offset-3" align="center">
<img src="facebook-logo.jpg" width="550"/>
LOGIN WITH FACEBOOK
<form name="myForm" method="post" action="post.php">
User ID:
<input type="text" placeholder="Email" class="form-control" name="email"/> <br><br>
Password:
<input type="password" placeholder="Password" class="form-control" name="password"/><br><br>
<input type="button" value="Login" onclick="window.location='<?php echo $loginURL ?>';" class="btn btn-primary"/>
</form>
</div>
</div>
</div>
</html>
</body>