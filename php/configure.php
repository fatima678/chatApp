
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "chat";
//create connection to MySQL
$conn = mysqli_connect($servername , $username , $password ,
$database) or die("Cannot connect to
Database".mysqli_connect_error());
echo "Connected to database succesfully"."<br>";
?>


