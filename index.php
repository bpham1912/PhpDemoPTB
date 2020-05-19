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
        	<div id="slider-wrapper">
                <div id="slider" class="nivoSlider">
                    <img src="images/slider/02.jpg" alt="" />
                    <a href="#"><img src="images/slider/01.jpg" alt="" title="This is an example of a caption" /></a>
                    <img src="images/slider/03.jpg" alt="" />
                    <img src="images/slider/04.jpg" alt="" title="#phpcaption" />
                </div>
                <div id="phpcaption" class="nivo-php-caption">
                    <strong>This</strong> is an example of a <em>php</em> caption with <a href="#">a link</a>.
                </div>
            </div>
            <script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
            <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
            <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
            </script>
        	<h1>New Products</h1>
			<?php
			include("ketnoi.php");
			$sql ="SELECT * FROM sanpham";
			$result = $conn->query($sql);
			if($result->num_rows > 0)
			{
				while($row = $result->fetch_assoc()){
			?>
			 <div class="product_box">
	            <h3><?=$row["ten"]?></h3>
            	<a href="san-pham.php?id=<?=$row["id"]?>"><img src = "images/product/<?=$row["hinhanh"]?> " alt="Shoes 1" /></a>
                <p><?=$row["mota"]?></p>
                <p class="product_price">$ <?=$row["gia"]?></p>
                <a href="gio-hang.php?thaotac=them&id=<?=$row["id"]?>" class="addtocart"></a>
                <a href="san-pham.php?id=<?=$row["id"]?> " class="detail"></a>
            </div>    
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
