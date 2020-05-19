<?php
session_start();
include('header.php');
include('menu.php');
include('ketnoi.php');

$giohang = array();
if(isset($_SESSION["giohang"])){
	$giohang = $_SESSION["giohang"];
}
if(isset($_GET["thaotac"]) && isset($_GET["id"])){
	$id = $_GET["id"];
	if(($_GET["thaotac"]) =="them"){
		for($i=0; $i<count($giohang);$i++){
		 if($giohang[$i]["id"] == $id){
			 $giohang[$i]["soluong"]++;
			 break; 
			}
			}
		if($i == count($giohang)){
			$sql = "SELECT * FROM sanpham,loaisanpham WHERE id =$id AND loaisanpham.maloai = sanpham.maloai";
			$result = $conn->query($sql);
			if($result->num_rows > 0){
				$sanpham = $result->fetch_assoc();
				$sanpham["soluong"] = 1;
				$giohang[] = $sanpham;
				}
			} 
	} else{
		if(($_GET["thaotac"]) =="xoa"){

			for($i=0; $i<count($giohang);$i++){
				if($giohang[$i]["id"] == $id){
				array_splice($giohang,$i,1);//ham xoa san ophan cua mang tai vi tri i
							 
				break; 
						 }
			}
				
		}
	}
	//cap nhat gio hang
$_SESSION["giohang"] = $giohang;
}
//xu ly cap nhat gio hang
if(isset($_POST["id"]) && isset($_POST["soluong"])){
	$id = $_POST["id"];
	$soluongsau = $_POST["soluong"];
	for($i=0; $i<count($giohang);$i++){
		$giohang[$i]["soluong"] = $soluongsau[$i];
	}
		//cap nhat gio hang
$_SESSION["giohang"] = $giohang;
}

?>
	
 <div id="templatemo_main">
 <div id="sidebar" class="float_l">

</div>
 <div id="content" class="float_r">
  <h1>Shopping Cart</h1>
	<form method ="post" action ="gio-hang.php">
        	<table width="680px" cellspacing="0" cellpadding="5">
                   	  <tr bgcolor="#ddd">
                        	<th width="220" align="left">Image </th> 
                        	<th width="180" align="left">Description </th> 
                       	  	<th width="100" align="center">Quantity </th> 
                        	<th width="60" align="right">Price </th> 
                        	<th width="60" align="right">Total </th> 
                        	<th width="90"> </th>
                            
                      </tr>
					  <?php
					  $tongtien = 0;
					  foreach($giohang as $sp){
						 $tien = $sp["gia"]*$sp["soluong"];
						 $tongtien+=$tien;
					  ?>
                    	
                        <tr>
                        	<td><img src="images/product/<?=$sp["hinhanh"]?>" alt="image" /> </td>
                            <td><?=$sp["ten"]?><input type="hidden" name="id[]" value="<?=$sp["id"]?>" style="width: 20px; text-align: right" /> </td> 
                       	  	<td align="center"><input type="text" name="soluong[]" value="<?=$sp["soluong"]?>" style="width: 20px; text-align: right" />  </td>
                            <td align="right">$ <?=$sp["soluong"]?> </td>
                            <td align="right">$ <?=$tien?> </td>
                            <td align="center"> <a href="gio-hang.php?thaotac=xoa&id=<?=$sp["id"]?>"><img src="images/remove_x.gif" alt="remove" /><br />Remove</a>  </td>
						</tr>
						<?php
						}
						?>
						<tr>
                       
                        	<td colspan="3" align="right"  height="30px">Have you modified your basket? Please click here to<input type="submit" value="Update"&nbsp;&nbsp;</td>
                            <td align="right" style="background:#ddd; font-weight:bold"> Total </td>
                            <td align="right" style="background:#ddd; font-weight:bold">$ <?=$tongtien?></td>
                            <td style="background:#ddd; font-weight:bold"> </td>
						</tr>
					</table>
					</form>
                    <div style="float:right; width: 215px; margin-top: 20px;">
                    
					<p><a href="checkout.html">Proceed to checkout</a></p>
                    <p><a href="javascript:history.back()">Continue shopping</a></p>
                    	
                    </div>   	
            </div>
        <div class="cleaner"></div>
    </div>
<?php
include('footer.php');
?>
