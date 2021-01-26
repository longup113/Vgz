<?php
session_start(); // khoi tao session
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	include('../inc/conn.php');
	$username = $_POST['name'];
	$password = $_POST['pass'];
	$user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT *FROM user WHERE username ='{$username}'AND password='{$password}'"));
	if ($user) {
		//luu thong tin cua nguoi dung vao session
		$_SESSION['user'] = $user['username'];
		header('location:index.php'); //dua nguoi dung ve trang index.php
		die;
	}
	else{
		echo "sai thong tin tai khoan";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login form</title>
	<link rel="stylesheet" type="text/css" href="admin/asset/admin.css">
</head>
<body>
	<h2>Logins</h2>
	<form method="POST">
		<label> Username:</label>
		<input type="text" name="name"> <br>
		<label>Password:</label>
		<input type="Password" name="pass"><br>
		<button type="submit">Login</button>
	</form>

</body>
</html>