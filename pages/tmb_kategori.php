<?php
	include '../config/config.php';
	$nama_kategori = $_POST["nama_kategori"];
	$koneksi->query("insert into tb_kategori(namakat)values('$nama_kategori')");
	header("location:home.php?home=data_kategori");
?>