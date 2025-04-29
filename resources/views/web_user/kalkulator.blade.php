<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator BMI</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/web_user/images/LogoObes.png') }}">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('assets/web_user/css/kalkulator_custom.css') }}" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-teal">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/web_user/images/LogoObes.png') }}" alt="Logo" class="logo-img">
        </a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
            <li class="nav-item"><a class="nav-link" href="/kalkulator">Kalkulator</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Rekomendasi</a></li>
            <li class="nav-item"><a class="nav-link" href="#">History</a></li>
        </ul>
        <span class="navbar-text">User <i class="bi bi-person-circle"></i></span>
    </div>
</nav>

<div class="container mt-5">
    <h3 class="text-center text-success mb-4">Masukan Data Anda</h3>

    <div class="mb-3 text-center">
        <div class="btn-group" role="group" aria-label="Gender">
            <input type="radio" class="btn-check" name="gender" id="male" value="male" autocomplete="off">
            <label class="btn btn-outline-info gender-toggle" for="male">
                <i class="bi bi-person"></i> Pria
            </label>
    
            <input type="radio" class="btn-check" name="gender" id="female" value="female" autocomplete="off">
            <label class="btn btn-outline-danger gender-toggle" for="female">
                <i class="bi bi-gender-female"></i> Wanita
            </label>
        </div>
    </div>
    

    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label>Age</label>
                <input type="text" class="form-control" placeholder="Contoh : 21">
            </div>
            <div class="mb-3">
                <label>Tinggi Badan (cm)</label>
                <input type="text" class="form-control" placeholder="Contoh : 155">
            </div>
            <div class="mb-3">
                <label>Berat Badan</label>
                <input type="text" class="form-control" placeholder="Contoh : 42.5">
            </div>
            <div class="mb-3">
                <label>Pola Makan Sehari-hari</label>
                <input type="text" class="form-control" placeholder="Contoh : 3 kali sehari">
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label>Apakah ada riwayat keluarga yang mengalami kelebihan berat badan?</label><br>
                <input type="radio" name="keluarga" value="Yes"> Yes
                <input type="radio" name="keluarga" value="No" class="ms-3"> No
            </div>
            <div class="mb-3">
                <label>Apakah sering mengkonsumsi makanan berkalori tinggi?</label><br>
                <input type="radio" name="kalori" value="Yes"> Yes
                <input type="radio" name="kalori" value="No" class="ms-3"> No
            </div>
            <div class="mb-3">
                <label>Apakah sering makan camilan di antara waktu makan?</label><br>
                <input type="radio" name="camilan" value="Tidak Pernah"> Tidak Pernah
                <input type="radio" name="camilan" value="Jarang" class="ms-3"> Jarang
                <input type="radio" name="camilan" value="Sering" class="ms-3"> Sering
                <input type="radio" name="camilan" value="Selalu" class="ms-3"> Selalu
            </div>
            <div class="mb-3">
                <label>Frekuensi Aktivitas Fisik</label><br>
                <input type="radio" name="aktivitas" value="Tidak Pernah"> Tidak Pernah
                <input type="radio" name="aktivitas" value="Jarang" class="ms-3"> Jarang
                <input type="radio" name="aktivitas" value="Sering" class="ms-3"> Sering
                <input type="radio" name="aktivitas" value="Selalu" class="ms-3"> Selalu
            </div>
        </div>
    </div>

    <div class="text-center mt-4">
        <button class="btn btn-bmi">Hitung BMI</button>
    </div>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JS -->
<script src="{{ asset('assets/web_user/js/kalkulator_custom.js') }}" ></script>
</body>
</html>
