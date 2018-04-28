<?php
/*require_once "FacebookConnection.php";

if(isset($_SESSION['access_token'])){
header('Location: indexfb.php');
exit();
}
$redirectURL ="http://localhost/fyp/callback_fb.php";
$permissions = ['email'];*/
?>
<html>
<head>
<meta charset="utf-8">
<title> Write A Post </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
<div class="container" style="margin-top: 100px">
<div class="row justify-content-center">
<div class="col-md-6 col-md-offset-3" align="center">
<img src="postlogo.jpg" width="550"/>
<b>Write A Post</b><br><br>
<textarea name="message" width="700" height="400"> </textarea> <br><br>
<input type="checkbox" name="fb_chkb"/>Facebook<br><br>
<input type="checkbox" name="fb_chkb"/>Instagram<br><br>
<input type="checkbox" name="fb_chkb"/>Twitter<br><br>
<input type="button" value="Post" class="btn btn-primary"/>
</form>
</div>
</div>
</div>
</html>
</body>