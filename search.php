<?php
include('inc/conn.php');
include('inc/header.php');
?>
<div class="row">
	<div class="leftcolumn">
<?php

if (isset($_REQUEST['search']))
{
	$search= addslashes($_GET['search']);
	$query= "SELECT *FROM product WHERE Name LIKE '%{$search}%'";
	// thưc thi cau truy van
$sql= mysqli_query($conn,$query);
$num= mysqli_num_rows($sql);
// ne $search rong thi bao loi 
	if(empty($search)){
		echo "Please enter data ";
	}

	else {
	if($num > 0&& $search != "")
	{

		echo "<h2>$num Results returned with keywords: <b>$search</b></h2>"	;
		// vong lap while dung lay toan bo du lieu
    while($row= mysqli_fetch_assoc($sql)){
    ?>
      <div class="single-product">
                <h2 class="product-title"><?php echo $row['Name']; ?></h2>
                <div class="product-image"><img src="img/<?php echo $row['Image'] ?>"></div>
            <p class="product-price"> <?php echo $row['Price']."-$" ?> </p>
            <br>
            <form method="POST" action="cart.php">
                So Luong: 
                <input type="number" name="quantity" value="1"> <br>
                <input type="hidden" name="name" value=" <?= $id?>" >
                <button type="submit" class="button-buy">Buy Now!</button>

            </form>
            <div class="product-content">
                <h3>Information Product</h3> <br>
                <? echo $row['Noi Dung'] ?>
            </div>
 <?php 
 }
?>		
	</div>
	<?php
    }
    else {
    	echo "No results were found";
    }
	}
	
}
?>
	
	</div>
	
</div>
<?php 
include('inc/footer.php');
?>