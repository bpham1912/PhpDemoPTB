<?php
include("ketnoi.php");
$sql = "INSERT INTO sanpham (id, ten , maloai, hinhanh, mota, gia, soluong) VALUES (1, 'San pham 1', 1, "01.jpg", "Mota san pham 1", 100, 10)";

if ($conn->query($sql)){
	echo "Them thanh cong ";
}
else{
	echo "Khong them duoc";
}

$conn->close();
?>