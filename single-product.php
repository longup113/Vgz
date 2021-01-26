

<?php
session_start();
include('inc/conn.php');
include('inc/header.php');
?>

<div class="row">
    <div class="leftcolumn">

        <?php
        $id=$_GET['id'];
        
        $sql ="SELECT * FROM product WHERE ID = {$id}"; 
        $rs = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($rs) ){
        ?> 
            <div class="single-product">
                <h2 class="product-title"><?php echo $row['Name']; ?></h2>
                <div class="product-image"><img src="img/<?php echo $row['Image'] ?>"></div>
            <p class="product-price"> <?php echo $row['Price']."$" ?> </p>
            <br>
            <form method="GET" action="cart.php">
                So Luong: 
                <input type="number" name="sl" value="1"> <br>
                <input type="hidden" name="name" value="<?php echo $id ?>" >
                <button type="submit" class="button-buy">Buy Now!</button>

            </form>
            <div class="product-content">
                <h3>Information Product</h3> <br>
                <? echo $row['Noi Dung'] ?>
            </div>
        <?php  
          
                }//end while
             
?>
</div>
</div>
<?php include('inc/pagination.php'); ?> 
   </div> 
   <!--END left colum --> 
<?php 
    include('inc/footer.php');
?>

