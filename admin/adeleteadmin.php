<?php
include('../config/koneksi.php');
$query = "DELETE from user where iduser='" . $_GET['id'] . "'";
mysqli_query($konek_db, $query);
header("location:kelolaadmin.php");
?>