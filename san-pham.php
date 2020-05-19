<?php
include('header.php');
include('menu.php');
?>
 <div id="templatemo_main">
 <div id="sidebar" class="float_l">
 <?php

include('left-side.php');
include('left-side-bot.php');
?>
</div>
 <div id="content" class="float_r">
	<?php
		if(isset($_GET['id'])){
				$id = $_GET['id'];
			include("ketnoi.php");
			$sql ="SELECT * FROM sanpham, loaisanpham WHERE id=$id AND sanpham.maloai=loaisanpham.maloai";
			$result = $conn->query($sql);
			if($result->num_rows > 0)
			{
				$row = $result->fetch_assoc();
			?>
		        	<h1><?=$row["ten"]?></h1>
            <div class="content_half float_l">
        	<a  rel="lightbox[portfolio]" href="images/product/<?=$row["hinhanh"]?>"><img src="images/product/<?=$row["hinhanh"]?>" alt="image" /></a>
            </div>
            <div class="content_half float_r">
                <table>
                    <tr>
                        <td width="160">Price:</td>
                        <td>$ <?=$row["gia"]?></td>
                    </tr>
                    <tr>
                        <td>Availability:</td>
                        <td>In Stock</td>
                    </tr>
                    <tr>
                        <td>Model:</td>
                        <td>Loai San Phẩm <?=$row["tenloai"]?></td>
                    </tr>
                    <tr>
                        <td>Manufacturer:</td>
                        <td>Apple</td>
                    </tr>
                    <tr>
                    	<td>Quantity</td>
                        <td><input type="text" value="1" style="width: 20px; text-align: right" /></td>
                    </tr>
                </table>
                <div class="cleaner h20"></div>

                <a href="shoppingcart.html" class="addtocart"></a>

			</div>
            <div class="cleaner h30"></div>
            
            <h5>Product Description</h5>
            <p><?=$row["mota"]?></p>
				<?php
				}
			}
			?>
</div>
<div class="cleaner"></div>
    </div>
<?php
include('footer.php');
?>
