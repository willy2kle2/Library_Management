<?php 

include('include/dbcon.php');

$get_id=$_GET['user_id'];

mysql_query("delete from user where user_id = '$get_id' ")or die(mysql_error());

header('location:user.php');
?>