<?php
include('../config/koneksi.php');
$query="DELETE from member where idmember='".$_GET['id']."'";
mysqli_query($konek_db, $query);
header("location:datauser.php");
?>