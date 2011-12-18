<?php
if(!isset($_SESSION['loggedin']))
  header( 'location: login.php' ); 
include 'dbsetup.php';
?>

<html>
<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
<link href="style.css" rel="stylesheet" type="text/css" />
<title>stack.</title>
</head>
<body>