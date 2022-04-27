<?php
	$koneksi = new mysqli("localhost", "root", "", "db_toko_online");
	if($koneksi->connect_error){
		trigger_error('Koneksi ke database gagal: ' .$koneksi->connect_error,E_USER_ERROR );
	}
?>