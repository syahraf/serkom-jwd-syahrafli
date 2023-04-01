<?php 
include ('../cek_koneksi.php');

session_start();

// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['level'] == "") {
    header("location:../login.php?pesan=gagal");
}

$beasiswa = mysqli_query($conn, "select * from daftar");
while($row = mysqli_fetch_array($beasiswa)) {
    $nama_beasiswa[] = $row['jenis_beasiswa'];

    $query = mysqli_query($conn, "select count(*) as 'total' from daftar where jenis_beasiswa='".$row['jenis_beasiswa']."'");
    $row = $query->fetch_array();
    $jns_beasiswa[] = $row['total'];
}

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
    <link rel="stylesheet" href="admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Raleway:wght@400;600;700&display=swap"
        rel="stylesheet">
</head>

<body>
   <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Scholarship.idn</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar-right" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../daftar.php">Daftar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="../hasil.php">Hasil</a>
                    </li>
                </ul>
                <div class="coba">
                <a class="nav-link" aria-current="page" href="../admin/logout.php">Logout</a>
            </div>
        </div>
        </div>
    </nav>

    <div class="gy-3 py-3">
        <div class="gy-3 py-3">
        </div>
    </div>

    <section>
        <div class="container" style="width: 800px;height: 800px">
            <canvas id="myChart"></canvas>
        </div>
    </section>
    

    <footer id="footer">
         <p>All Right Reserved&#174;  2023 - Scholarship.idn</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <script>
		const ctx = document.getElementById("myChart").getContext('2d');
		const myChart = new Chart(ctx, {
			type: 'bar',
			data: {
            labels: ["Beasiswa Akademik", "Beasiswa Non Akademik"],
            datasets: [{
                label: '',
                data: [
                <?php
                $jumlah_beasiswa_akademik = mysqli_query($conn, "SELECT * from daftar where jenis_beasiswa='Akademik'");
                echo mysqli_num_rows($jumlah_beasiswa_akademik);
                ?>,
                <?php
                $jumlah_beasiswa_nonakademik = mysqli_query($conn, "SELECT * from daftar where jenis_beasiswa='Non-Akademik'");
                echo mysqli_num_rows($jumlah_beasiswa_nonakademik);
                ?>,
                ],
                backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 162, 235, 0.2)',
                'rgba(255, 54, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)'
                ],
                borderColor: [
                'rgba(255,99,132,1)',
                'rgba(255, 162, 235, 1)',
                'rgba(255, 54, 86, 1)',
                'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }]
            },
            options: {
            scales: {
                yAxes: [{
                ticks: {
                    beginAtZero: true
                }
                }]
            }
            }
		});
	</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    

</body>
</html>

