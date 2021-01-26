<?php
include("../inc/conn.php");
 if($_SERVER['REQUEST_METHOD']=='GET'&& !empty($_GET['idxoa'])){
 	$idxoa=$_GET['idxoa'];
 	$sql="DELETE from product WHERE id={$idxoa} limit 1";
 	if(mysqli_query($conn, $sql))
 	{
 		echo "Xoa Thanh Cong".$idxoa;

 	}
 	else{
 		echo "co loi say ra".mysqli_error($conn);
 	}
 }
 include("inc/header.php");
 include("listsp.php");