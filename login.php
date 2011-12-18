<?php
$failed = $_GET['failed'];
?>

<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />

<link href="style.css" rel="stylesheet" type="text/css" />

<style type="text/css"></style>
<title>stack.</title>
</head>

<br/>
<div id="login-vert">
<div id="login-hori">

<h1>stack.</h1>
<br/>

<form action="login_db.php" method="post">

<input type="text" id="usr_name" name="usr_name" placeholder="Who are you?"/><br/><br/>
<input type="text" id="usr_email" name="usr_email" placeholder="What is your email? (optional)"/><br/><br/>

<table class="silent" align="right" >
<tr>
<?php 
if ( $failed )
  echo '<td width="200">You must be somebody...</td>';
?>
<td width="90">
<input type="submit" class="full" value="Login"/>
</td>
</tr>
</table>
			
</form>

</div>
</div>
<?php 
include 'tail.php';
?>