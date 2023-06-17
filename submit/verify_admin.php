<?php  

	require_once("../inc/connection.php");

	extract($_POST);

	$sql = "SELECT email,password from admin where email='$txtemail'";

	$result = mysqli_query($link,$sql) or die(mysql_error($link));

	$row = mysqli_fetch_assoc($result);

	$count = mysqli_num_rows($result);

	if($count > 0){

		if($row['password'] == $txtpassword){
			header("location:../dashboard.php?msg=Login Successfull");
		}else{
			header("location:../index.html?msg=WRONG PASSWORD");
		}

	}else{
		header("location:../index.html?msg=INVALID ATTEMPT");
	}
	

?>