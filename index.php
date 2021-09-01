<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DB";

$email = $_POST['email'];

  
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
  
if($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}else{
	//echo "Connected YAY!";
}

$sql = "INSERT INTO DB_Table (email) VALUES ('$email')";
$result = $conn->query($sql);

if($result === TRUE) {
	echo "New record added";
	header("Location: index.html");
}else{
	echo "ERROR: " . $sql . "<br>" . $conn->error;
}


$conn->close();

?>