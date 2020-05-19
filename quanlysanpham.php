<?php
include('header.php');
include('menu.php');
?>
 <div id="templatemo_main">
 <div id="sidebar" class="float_l">


	<div>
		<table align="center" border="1">
		<tr>
			<td>ID</td>
			<td>Ten</td>
			<td>Maloai</td>
			<td>MoTa</td>
			<td>HinhAnh</td>
			<td>Gia</td>
			<td>SoLuong</td>
			<td>Delete</td>
			
		</tr>
	
		<?php
			include("ketnoi.php");
			$sql ="SELECT * FROM sanpham";
			$result = $conn->query($sql);
		
			if($result->num_rows > 0)
			{
				while($row = $result->fetch_assoc()){
				echo("<tr>");
				echo("<td>" .$row['id']."</td>");
				echo("<td>" .$row['ten']."</td>");
				echo("<td>" .$row['maloai']."</td>");
				echo("<td>" .$row['mota']."</td>");
				echo("<td><img src='images/product/".$row['hinhanh']."'/></td>");
				echo("<td>" .$row['gia']."</td>");
				echo("<td>" .$row['soluong']."</td>");
				echo("<td><a href='del_sp.php?id_delete=".$row['id']."'>Delete</a></td>");
		?>
			<?php
	if (isset($_GET["id_delete"])) {
		$sql = "DELETE FROM users WHERE id = ".$_GET["id_delete"];
		mysqli_query($conn,$sql);
	}
	
?>
			
		<?php
				}	
			}
		?>    	
    <div class="cleaner"></div>
	</div>
	









<?php
include('footer.php');
?>

