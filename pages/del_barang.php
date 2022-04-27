<?php
	include '../config/config.php';
	$id = $_GET["id"];
	$del_barang = mysqli_fetch_array($koneksi->query("select foto from tb_barang where kodebarang ='$id' "));
	if ($del_barang['foto']!=''){
	$query="delete FROM tb_barang where kodebarang='$id'";
	$hasil=$koneksi->query($query);
	unlink("../foto/$del_barang[foto]");
	?>
	<script language="javascript">
 		alert("Data Berhasil Dihapus !");
		document.location="home.php?home=data_barang";
		</script>
		<?php
	}
	else {
		$query="delete FROM tb_barang where kodebarang='$id'";
		$hasil=$koneksi->query($query);
		if ($hasil) {
			?>
				<script language="javascript">
 		   			alert("Data Berhasil Dihapus !");
		 			document.location="home.php?home=data_barang";
		    </script>
		<?php
		}
	}
?>