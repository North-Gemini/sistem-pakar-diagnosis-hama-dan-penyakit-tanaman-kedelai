<?php
include('../config/koneksi.php');
$query = "DELETE from insektisida where idinsektisida='" . $_GET['id'] . "'";
mysqli_query($konek_db, $query);
header("location:datainsektisida.php");
?>