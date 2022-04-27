<?php
include '../config/config.php';

$nama_konsumen = $_POST["nama_konsumen"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$pekerjaan = $_POST["pekerjaan"];
$email = $_POST["email"];
$telepon = $_POST["telepon"];
$alamat = $_POST["alamat"];
$username = $_POST["username"];
$password = $_POST["password"];

$koneksi->query("insert into tb_konsumen(nama_konsumen,jenis_kelamin,pekerjaan,email,telepon,alamat,username,password) values('$nama_konsumen','$jenis_kelamin','$pekerjaan','$email','$telepon','$alamat','$username','$password')");
	header("location:home.php?home=data_konsumen");
?>