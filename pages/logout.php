<?php
session_start();
session_destroy();
echo "<script>alert('Terima kasih, Anda Berhasil Logout')
     window.location='../index.php'</script>";
?>