<?php 
	include "configure.php";

	$name = $_POST['fname'];
	$lastname= $_POST['lname'];
	$password = $_POST['password'];
	$email =$_POST['email'];
	$image =$_POST['image'];
     api ki call aw
    if(!empty($fname) && !empty($lname) && !empty($password) && !empty($email)){

    }
    else{
    	echo "All input fields are required"; 
    }



 ?>