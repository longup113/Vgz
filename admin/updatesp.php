save????



<?php 
include( "../inc/conn.php" );

if(   $_SERVER['REQUEST_METHOD'] == 'POST' ){

	$id = $_GET['ID'];
	$tensp = $_POST['Name'];
	$giasp= $_POST['Price'];
	$mota = $_POST['NoiDung'];

	$file = $_FILES['Image']; // 1 mang chua thong tin file da upload  

	//chỉ update file nếu người dùng có chọn file upload.

	if( !empty( $file ) ){
		$tenFile = rand() . $file['name']; //asdasd232anh.jpg cho hai file trong thu muc khong bi trung=>ten file luu trong server
		if( move_uploaded_file($file['tmp_name'], "../images/" . $tenFile ) ){

			$sql = "UPDATE product SET Image=? WHERE id=? "; //php prepare statement
			$stmt = mysqli_prepare($conn ,$sql);
			mysqli_stmt_bind_param( $stmt, "sd" , $tenFile, $id );
			mysqli_stmt_execute($stmt);
			echo "Update hình ảnh thành công! <br/>";

		}
		else{
			echo "Có lỗi khi upload file ! ";
		}	
	}
	


	// $anh = $_POST['anhsp'];
	//$q = "UPDATE product SET tieude =  , noidung = $noidung , anh ='{$anh}' "; //gay co kha nang loi sql injection + gay kho viet 
	// mysqli_query($conn , $q);


	$sql = "UPDATE product SET Name=?, NoiDung=?, Price=?  WHERE ID=? "; //php prepare statement
	$stmt = mysqli_prepare($conn ,$sql);
	mysqli_stmt_bind_param( $stmt, "ssdd" , $tensp, $mota, $giasp, $id );

	//s = string 
	// d = double 
	// i = integer
	if( mysqli_stmt_execute($stmt) ) {
		echo "đã cập nhật sản phẩm thành công! ";
	}else{
		echo "Lõi : " . mysqli_error($conn);//ham lay loi gan nhat cua connection sinh ra
	}


}// POST 

//lay id san pham 


$id = $_GET['ID'];
$sql = mysqli_query( $conn , "SELECT * FROM product WHERE id={$id}" );
$row =  mysqli_fetch_assoc($sql);
include ("inc/header.php");
?>

	<!-- phai co ectype="multipart/form-data" thi moi upload dc file len server  -->
	<form class="form" method="post" enctype="multipart/form-data">
	  <label>Name Product </label>
		<input type="text" name="tensp" value="<?= $row['Name'] ?>"/>
		<label>Price Product</label>
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