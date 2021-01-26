<?php 
	session_start(); //khoi tao session => có thể sử dụng dc biến $_SESSION  

	if( !empty( $_SESSION['user'] ) ){
		echo "hello: " . $_SESSION['user'];
	}else{

		header('Location:login.php'); //dieu huong toi trang login.php
		die;

	}

	?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="asset/admin.css" />
</head>
<body>

<div class="header">
  <h1>Web Admin</h1>
</div>

<div class="row">
  <div class="leftcolumn">
  	<!-- navigation -->
	<div class="topnav">

	  <a href="index.php">Manage Website</a>
	  <hr>
	  <a href="themsp.php">Add Product  </a>
	  <a href="suasp.php">Delete Product  </a>
	 
	  <a href="index.php">Manage Product</a>
	  <a href="#">Manage User</a>
	  <a href="logout.php">Logout</a>

	</div>

	<!-- END navigation -->
  </div>
 <!-- END left column -->


  <div class="rightcolumn">