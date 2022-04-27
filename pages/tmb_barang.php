<?php
include '../config/config.php';

$namabarang = $_POST["namabarang"];
$kategori = $_POST["kategori"];
$harga = $_POST["harga"];
$foto = $_FILES["myfile"]["name"];

if (file_exists("../foto/" . $_FILES["myfile"]["name"])){
	$koneksi->query("insert into tb_barang(namabarang,kategoribarang,harga,foto)
					values('$namabarang','$kategori','$harga','$foto')");
}
else{
	move_uploaded_file($_FILES["myfile"]["tmp_name"],"../foto/" . $_FILES["myfile"]["name"]);
	$koneksi->query("insert into tb_barang(namabarang,kategoribarang,harga,foto)
					values('$namabarang','$kategori','$harga','$foto')");
}
	header("location:home.php?home=data_barang");
?>