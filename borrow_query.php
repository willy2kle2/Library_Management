<?php 
	include ('include/dbcon.php');
	
	if (isset($_POST['submit'])) {
	
	$school_number = $_POST['school_number'];
	
	$sql = mysql_query("SELECT * FROM user WHERE school_number = '$school_number' ");
	$count = mysql_num_rows($sql);
	$row = mysql_fetch_array($sql);
	
		if($count <= 0){
			echo "<div class='alert alert-success'>".'No match found for the School ID Number'."</div>";
		}else{
			$school_number = $_POST['school_number'];
			header('location: borrow_book.php?school_number='.$school_number);
		} 
	}
?>