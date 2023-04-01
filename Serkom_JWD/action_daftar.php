<?php
include 'cek_koneksi.php';

$nama = $_POST["nama"];
$email = $_POST["email"];
$nomor_hp = $_POST["nomor_hp"];
$prodi = $_POST["prodi"];
$semester = $_POST["semester"];
$ipk = $_POST["ipk"];
$jenis_beasiswa = $_POST["jenis_beasiswa"];
$ekstensi_diperbolehkan = array("png", "jpg");
$berkas = $_FILES['berkas']['name'];
$x = explode('.', $berkas);
$ekstensi = strtolower(end($x));
$file_tmp = $_FILES['berkas']['tmp_name'];
move_uploaded_file($file_tmp, 'file/' . $berkas);

$query_sql = "INSERT INTO daftar (nama, email, nomor_hp, prodi, semester, ipk, jenis_beasiswa, berkas, status) VALUES ('$nama', '$email', '$nomor_hp', '$prodi','$semester', '$ipk', '$jenis_beasiswa', '$berkas','Belum Diverifikasi')";

if (mysqli_query($conn, $query_sql)) {
    echo '<script language="javascript">
              alert ("Pendaftaran Berhasil !");
              window.location="hasil.php";
              </script>';
    exit();
}

?>
