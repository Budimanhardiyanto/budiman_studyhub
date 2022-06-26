<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "tokopetika";

$conn = new mysqli($servername,$username,$password,$database);

if($conn->connect_eror){
	die("connnection failed:" . $conn->connect_eror);
}
else{
	echo"connected";
}