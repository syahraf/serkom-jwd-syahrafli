<?php
/* logika jika login gagal */
if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "gagal") {
        echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
    }
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
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Raleway:wght@400;600;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php">Scholarship.idn</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar-right" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="pilihan_beasiswa.php">Pilihan Beasiswa</a>
                    </li>
                </ul>
                <div class="coba">
                <a class="nav-link" aria-current="page" href="login.php">LOGIN</a>
            </div>
        </div>
        </div>
    </nav>
    <section id="cobaa">
        <div class="py-5 gy-3 container">
            <div class="card">
                <div class="card-header"style="background-color:red; color:#fff;">
                    Login
                </div>
                <div class="py-3 container">
                    <form action="admin/cek_login.php" method="post" > <!-- form login yang terkoneksi dengan cek_login.php -->
                        <div class="mb-3">
                            <label for="text" class="form-label">Username</label>
                            <input class="form-control" type="username" class="form-control" id="username" name="username" placeholder="Masukkan Username">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input class="form-control" type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
                        </div>
                        <button type="login" class="btn" name="login" style="background-color:red;color:#fff;">Login</button>
                    </form>

                </div>
            </div>
        </div>
    </section><!-- End form Section -->

<footer id="footer">
    <p>All Right Reserved&#174;  2023 - Scholarship.idn</p>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
</body>

</html>