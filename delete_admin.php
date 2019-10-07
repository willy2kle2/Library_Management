<?php 

include('include/dbcon.php');

$get_id=$_GET['adminid'];

mysqli_query($conn, "delete from admin where adminid = '$get_id' ")or die(mysqli_error());

header('location:admin_profile.php');
?>