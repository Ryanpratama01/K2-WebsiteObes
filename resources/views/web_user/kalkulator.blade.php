<!DOCTYPE html>
<html lang="id">
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
            <li class="nav-item"><a class="nav-link" href="{{ url('/beranda') }}">Beranda</a></li>
            <li class="nav-item"><a class="nav-link" href="/kalkulator">Kalkulator</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Rekomendasi</a></li>
            <li class="nav-item"><a class="nav-link" href="#">History</a></li>
        </ul>
        <span class="navbar-text">User <i class="bi bi-person-circle"></i></span>
    </div>
</nav>

<div class="container mt-5">
    <h3 class="text-center text-success mb-4">Masukkan Data Anda</h3>

    <!-- Pilihan Jenis Kelamin -->
    <div class="mb-4 text-center">
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
                <label for="age" class="form-label">Usia</label>
                <input type="text" id="age" class="form-control" placeholder="Contoh : 21">
            </div>
            <div class="mb-3">
                <label for="height" class="form-label">Tinggi Badan (cm)</label>
                <input type="text" id="height" class="form-control" placeholder="Contoh : 155">
            </div>
            <div class="mb-3">
                <label for="weight" class="form-label">Berat Badan</label>
                <input type="text" id="weight" class="form-control" placeholder="Contoh : 42.5">
            </div>
            <div class="mb-3">
                <label for="meal-pattern" class="form-label">Pola Makan Sehari-hari</label>
                <input type="text" id="meal-pattern" class="form-control" placeholder="Contoh : 3 kali sehari">
            </div>
        </div>

        <div class="col-md-6">
            <!-- Riwayat Keluarga -->
            <div class="mb-3">
                <label class="form-label">Apakah ada riwayat keluarga yang mengalami kelebihan berat badan?</label>
                <div class="d-flex align-items-center">
                    <input type="radio" name="keluarga" value="Yes" class="form-check-input me-2">
                    <label class="form-check-label me-4">Yes</label>
                    <input type="radio" name="keluarga" value="No" class="form-check-input me-2">
                    <label class="form-check-label">No</label>
                </div>
            </div>

            <!-- Makanan Berkalori Tinggi -->
            <div class="mb-3">
                <label class="form-label">Apakah sering mengkonsumsi makanan berkalori tinggi?</label>
                <div class="d-flex align-items-center">
                    <input type="radio" name="kalori" value="Yes" class="form-check-input me-2">
                    <label class="form-check-label me-4">Yes</label>
                    <input type="radio" name="kalori" value="No" class="form-check-input me-2">
                    <label class="form-check-label">No</label>
                </div>
            </div>

            <!-- Camilan -->
            <div class="mb-3">
                <label class="form-label">Apakah sering makan camilan di antara waktu makan?</label>
                <div class="d-flex align-items-center">
                    <input type="radio" name="camilan" value="Tidak Pernah" class="form-check-input me-2">
                    <label class="form-check-label me-2">Tidak Pernah</label>
                    <input type="radio" name="camilan" value="Jarang" class="form-check-input me-2">
                    <label class="form-check-label me-2">Jarang</label>
                    <input type="radio" name="camilan" value="Sering" class="form-check-input me-2">
                    <label class="form-check-label me-2">Sering</label>
                    <input type="radio" name="camilan" value="Selalu" class="form-check-input me-2">
                    <label class="form-check-label">Selalu</label>
                </div>
            </div>

            <!-- Aktivitas Fisik -->
            <div class="mb-3">
                <label class="form-label">Frekuensi Aktivitas Fisik</label>
                <div class="d-flex align-items-center">
                    <input type="radio" name="aktivitas" value="Tidak Pernah" class="form-check-input me-2">
                    <label class="form-check-label me-2">Tidak Pernah</label>
                    <input type="radio" name="aktivitas" value="Jarang" class="form-check-input me-2">
                    <label class="form-check-label me-2">Jarang</label>
                    <input type="radio" name="aktivitas" value="Sering" class="form-check-input me-2">
                    <label class="form-check-label me-2">Sering</label>
                    <input type="radio" name="aktivitas" value="Selalu" class="form-check-input me-2">
                    <label class="form-check-label">Selalu</label>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-4">
        <button class="btn btn-success">Hitung BMI</button>
    </div>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JS -->
<script src="{{ asset('assets/web_user/js/kalkulator_custom.js') }}" ></script>
</body>
</html>
