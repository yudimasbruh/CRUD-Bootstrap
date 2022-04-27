<?php
	include '../config/config.php';
	$username = $_POST["username"];
	$password = $_POST["password"];
	$koneksi->query("insert into tb_users(username,password)values('$username','$password')");
	header("location:home.php?home=data_users");
?>