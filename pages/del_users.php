<?php
	include '../config/config.php';
	$id = $_GET["id"];
	$query="delete FROM tb_users where id_user='$id'";
	$hasil=$koneksi->query($query);
	if ($hasil) {
			?>
				<script language="javascript">
					alert("Data Berhasil Dihapus !");
					document.location="home.php?home=data_users";
				</script>
			<?php
	}
?>