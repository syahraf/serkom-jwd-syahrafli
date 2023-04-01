<?php
include "cek_koneksi.php";
session_start();

// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['level'] == "") {
    header("location:../login.php?pesan=gagal");
}

/* memanggil isi tabel pemesanan dari kolom id */
$ambil = mysqli_query($conn, "SELECT * FROM daftar ORDER BY id ASC");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERKOM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Raleway:wght@400;600;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="admin/dashboard.php">Scholarship.idn</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar-right" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="daftar.php">Daftar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="hasil.php">Hasil</a>
                    </li>
                </ul>
                <div class="coba">
                <a class="nav-link" aria-current="page" href="admin/logout.php">Logout</a>
            </div>
        </div>
        </div>
    </nav>
    

    <section id="hasil">
    <div class="container mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="py-4 d-flex justify-content-end align-items-center">
                        <h2 class="mr-auto">Hasil Beasiswa</h2>
                    </div>
                   
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Mahasiswa</th>
                                <th>Email</th>
                                <th>Nomor Hp</th>
                                <th>Prodi</th>
                                <th>Semester</th>
                                <th>IPK Terakhir</th>
                                <th>Jenis Beasiswa</th>
                                <th>Berkas</th>
                                <th>Status Ajuan</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php $i=1; ?>
                                <?php foreach ($ambil as $row) : ?>
                                <tr>
                                    <th><?= $i; ?></th>
                                    <td><?= $row["nama"]; ?><a href="#"></a></td>
                                    <td><?= $row["email"]; ?></td>
                                    <td><?= $row["nomor_hp"]; ?></td>
                                    <td><?= $row["prodi"]; ?></td>
                                    <td><?= $row["semester"]; ?></td>
                                    <td><?= $row["ipk"]; ?></td>
                                    <td><?= $row["jenis_beasiswa"]; ?></td>
                                    <td class="text-center"><?php echo "<img src='file/$row[berkas]' width='100' height='100' />"; ?></td>
                                    <td class="text-center"><?php echo $row['status']; ?></td>
                                    <td class="text-center">
                                        <form action="verifikasi.php?id=<?php echo $row['id']; ?>" method="POST">
                                            <div class="form-group">
                                                <select class="form-control" id="status" name="status" placeholder="Pilih Proses" aria-describedby="addon-wrapping" autocomplete="off">
                                                    <option selected>Proses</option>
                                                    <option value="Diterima">Diterima</option>
                                                    <option value="Ditolak">Ditolak</option>
                                                </select>
                                            </div>
                                            <button class="btn btn-primary m-1" style="background-color:red;color:#fff;" type="submit">Submit</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                                <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
    <p>All Right Reserved&#174;  2023 - Scholarship.idn</p>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
</body>

</html>