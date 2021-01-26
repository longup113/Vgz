
<?php
session_start();
include('inc/conn.php');
include('inc/header.php');

if($_SERVER['REQUEST_METHOD']=='GET'){
	$id=$_GET['name'];
	if(empty($SESSION['cart'][$id])){
		$connt = mysqli_connect("localhost", "root","","stressworld");
		$q="SELECT * FROM product WHERE ID={$id}";
		$rs = mysqli_query($connt, $q);
		$product=mysqli_fetch_assoc($rs);
		$num = $_GET['sl'];
		$_SESSION['cart'][$id]=$product;
		$_SESSION['cart'][$id][$sl]=$_GET['sl'];
	}
	else{
		$slMoi=$_SESSION['cart'][$id]['sl']+$_GET['sl'];
		$_SESSION['cart'][$id]['sl']=$slMoi;
	}

}
?>
<div class="row">
	<link rel="stylesheet" type="text/css" href="css/card.css">
	<div class="leftcolumn">
		<h3 style="text-align: center;" class="title"> Cart</h3>
		<?php 
		if (!empty($_SESSION['cart'])){
			# code...
		
		foreach($_SESSION['cart'] as $item){
			?>
		<a href="single-product.php?id=<?php echo $item['ID']?>" class="product">
			<h2 class="product-title"><?php echo $item['Name']; ?></h2>
			<div class="product-image"><img src="image/<?php echo $item['Image'];?>"></div>
			<p class="product-price"><?php echo $item['Price'];?> </p>
			<p class="sl">Amount: <?php echo $num ?></p>
		</a>
		<?php
		}
	   ?>
	   <div id="total" class="clearfix">
		<?php
		$tong = 0;
		foreach($_SESSION['cart'] as $item){
			$tong = $tong + $num * $item['Price'];
		}
		?>
		<h3>Total money: <?php echo $tong?>$</h3>
	</div>
	<?php
	}
	else{
		echo "Not thing";
	}
	?>
</div>
			







		



















/////////////////////////////////////////////
</div>
</div>
<?php include('inc/pagination.php'); ?> 
   </div> 
   <!--END left colum --> 
<?php 
    include('inc/footer.php');
?>