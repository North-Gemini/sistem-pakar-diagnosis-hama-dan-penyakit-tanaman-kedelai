<?php
include('../config/koneksi.php');
$query="DELETE from kontak where idkontak='".$_GET['id']."'";
mysqli_query($konek_db, $query);
header("location:pesan.php");
?>