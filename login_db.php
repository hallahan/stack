<?php 
include 'dbsetup.php';

$usr_name = mysql_real_escape_string($_POST['usr_name']); 
$usr_email = mysql_real_escape_string($_POST['usr_email']);

$sql=
"INSERT INTO stk_usr (usr_name, usr_email)
VALUES ('$usr_name','$usr_email')";

$added = mysql_query($sql);
$usr_id = mysql_insert_id();

if ( $usr_name && $added && $usr_id ) {
  session_start();
  $_SESSION['usr_id'] = $usr_id;
  $_SESSION['loggedin'] = true;
  header( 'location: stack.php' );
} else {
  header( 'location: login.php?failed="true"' );
}

?>