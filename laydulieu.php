<?php
include("ketnoi.php");
$sql = "SELECT * FROM sanpham";

$result = $conn->query($sql);


if($result-> num_rows > 0){
	?>
	<table border = 1>
	<tr>
		<td>ID</td>
		<td>Ho</td>
		<td>Ten</td>
	</tr>
	<?php
	while($row = $result->fetch_assoc()){
		?>
	<tr>
		<td><?=$row["id"]?></td>
		<td><?=$row["ho"]?></td>
		<td><?=$row["ten"]?></td>
	</tr>
	<?php
	}
	?>
	</table>
	<?php
	
}
?>