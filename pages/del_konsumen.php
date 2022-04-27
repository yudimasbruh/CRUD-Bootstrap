<?php
	include '../config/config.php';
	$id = $_GET["id"];
	$query="delete FROM tb_konsumen where id_konsumen='$id'";
	$hasil=$koneksi->query($query);
	if ($hasil)	{
			?>
				<script language="javascript">
					alert("Data Berhasil Dihapus !");
					document.location="home.php?home=data_konsumen";
				</script>
			<?php
		}
?>