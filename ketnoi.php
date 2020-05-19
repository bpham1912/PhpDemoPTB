<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysqlsanpham";

$conn = new mysqli ($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("Ket noi csdl khong thanh cong");
}

?>