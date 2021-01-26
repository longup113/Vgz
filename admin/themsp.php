<?php 
include( "../inc/conn.php" );

if(   $_SERVER['REQUEST_METHOD'] == 'POST' ){

	$id = $_GET['ID'];
	$tensp = $_POST['Name'];
	$giasp= $_POST['Price'];
	$mota = $_POST['NoiDung'];
	$sql="INSERT INTO product(ten, noidung, giatien ) VALUES ( ?, ?, ?, )";
	$file = $_FILES['Image']; // 1 mang chua thong tin file da upload  
	


}// POST 

//lay id san pham 


$id = $_GET['ID'];
$sql = mysqli_query( $conn , "SELECT * FROM product WHERE ID={$id}" );
$row =  mysqli_fetch_assoc($sql);
include ("inc/header.php");
?>

	<!-- phai co ectype="multipart/form-data" thi moi upload dc file len server  -->
	<form class="form" method="post" enctype="multipart/form-data">
	  <label>Name Product </label>
		<input type="text" name="tensp" value="<?= $row['Name'] ?>"/>
		<label>Price</label>
		<input type="number" name="giasp" value="<?= $row['Price'] ?>">
		<label>Information Product</label>
		<textarea name="mota"><?= $row['NoiDung']?></textarea>
		<label>Picture Product</label>
		<img class="anhsp" src="image/<?= $row['Image']?>" />
	    <input type="file" name="anhsp" >
		<input type="submit" name="submit" value="Update ">
	</form>
<?php 	
include ("inc/footer.php");