<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8"/>
<title>User Profile</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<body>

<div class="container" style="margin-top: 100px">
<div class="row justify-content-center">
<div class="col-md-3" align="center">
</div>
<div class="col-md-9" align="center">
<table class="table table-hover table-bordered">
<tbody><tr><td>ID</td>
<td><?php $_SESSION['userdata']['id']?></td></tr>
<tr><td>Name</td>
<td><?php $_SESSION['userdata']['name']?></td></tr>
<tr><td>Email</td>
<td><?php $_SESSION['userdata']['email']?></td></tr></tbody>
</table> 
</div>

</div>
</div>
<html>
	<body>