<?php
	include("ketnoi.php");
	$id = $_GET["id_delete"];
	$sql ="delete FROM sanpham where id ='".$id."'";
	$result = $conn->query($sql);
	header("Location:quanlysanpham.php");
	
?>