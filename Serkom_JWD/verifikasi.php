<?php

include "cek_koneksi.php";
$id = $_GET['id'];
$status = $_POST['status'];

$query_sql = "UPDATE daftar SET status='$status' where id='$id' ";

if (mysqli_query($conn, $query_sql)) {
    echo '<script language="javascript">
              alert ("Update Berhasil !");
              window.location="hasil.php";
              </script>';
    exit();
}