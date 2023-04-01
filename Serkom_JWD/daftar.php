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
   <section>
    <div class="py-3 gy-3 container">
        <div class="card">
            <div class="card-header" style="background-color:red;color:#fff;">
                Registrasi Beasiswa
            </div>
            <div class="py-3 container">
                <form action="action_daftar.php" id="formDaftar" method="POST" enctype="multipart/form-data" novalidate>
                    <div class="py-3 form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" id="nama" name="nama" required> <!-- Diwajibkan untuk input data  nama lengkap -->
                    </div>
                    <div class="py-3 form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" placeholder="Masukkan Email " id="email" name="email" required> <!-- Diwajibkan untuk input data email -->
                    </div>
                    <div class="py-3 form-group">
                        <label for="nomor_hp">Nomor HP</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nomor HP" id="nomor_hp" name="nomor_hp" required> <!-- Diwajibkan untuk input data  no hp -->
                    </div>
                    <div class="py-3 form-group">
                        <label for="prodi">Prodi</label>
                        <select class="form-control" name="prodi" id="prodi"
                             required>
                            <option hidden>Pilih Prodi</option>
                            <option value="S1 Teknik Informatika">
                                    S1 Teknik Informatika
                            </option>
                            <option value="S1 Sistem Informasi">
                                    S1 Sistem Informasi
                            </option>
                            <option value="S1 RPL">
                                    S1 RPL
                            </option>
                        </select>
                    </div>
                                            
                    <div class="py-3 form-group">
                        <label for="semester">Semester</label>
                        <select class="form-control" name="semester" id="semester"
                        onchange="ipkTerakhir()" required>
                            <option hidden>Pilih Semester</option>
                            <option value="1">
                                    1
                            </option>
                            <option value="2">
                                    2
                            </option>
                            <option value="3">
                                    3
                            </option>
                            <option value="4">
                                    4
                            </option>
                            <option value="5">
                                    5
                            </option>
                            <option value="6">
                                    6
                            </option>
                            <option value="7">
                                    7
                            </option>
                            <option value="8">
                                    8
                            </option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="ipk">IPK Terakhir</label>
                            <p class="mt-1" style="display: flex;">
                                <input type="number" name="ipk" id="ipk"
                                    class="form-control" readonly required
                                    style="border: none; margin-top: -5px;">
                            </p>
                    </div>

                    <div class="py-3 form-group">
                        <label for="jenis_beasiswa">Pilihan Beasiswa</label>
                        <select class="form-control" name="jenis_beasiswa" id="jenis_beasiswa"
                           required>
                            <option hidden>Pilih Jenis Beasiswa</option>
                            <option value="akademik">
                                    Akademik
                            </option>
                            <option value="non-akademik">
                                    Non-Akademik
                            </option>
                        </select>
                    </div>

                    <label for="berkas" class="form-label">Upload Berkas Syarat ( *JPG/PNG )</label>
                    <div class="input-group flex-nowrap">
                        <input type= "file" name="berkas" class="form-control" id="berkas" name="berkas" placeholder="Upload Berkas" aria-describedby="addon-wrapping" autocomplete="off">
                    </div>

                    <div class="row py-3">
                        <div class="d-grid gap-2 col-4 mx-auto">
                            <button type="submit" id="daftar" class="btn btn-primary"style="background-color:red; color:#fff;">Daftar</button> <!-- Mendaftarkan data yang telah isi-->
                        </div>
                        <div class="d-grid gap-2 col-4 mx-auto">
                            <button type="reset" class="btn btn-secondary"style="background-color:white;color:#ff0404;">Cancel</button> <!--Menunda/ tidak jadi untuk mengisi form-->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
   </section>
<section id="footer">
    <p>All Right Reserved&#174;  2023 - Scholarship.idn</p>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>
