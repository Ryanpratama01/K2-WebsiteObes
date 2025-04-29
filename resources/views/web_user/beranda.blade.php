<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Beranda</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/web_user/images/LogoObes.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/web_user/css/custom.css') }}">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-teal">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/web_user/images/LogoObes.png') }}" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
            </a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" href="#">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Kalkulator</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Rekomendasi</a></li>
                <li class="nav-item"><a class="nav-link" href="#">History</a></li>
            </ul>
            <span class="navbar-text">User <i class="bi bi-person-circle"></i></span>
        </div>
    </nav>

    <div class="container mt-4">
        <!-- Input Berat -->
        <div class="card mb-3">
            <div class="card-body">
                <h6>Input Berat Badan Terbaru</h6>
                <label for="weight">Berat badan (kg):</label>
                <select id="weight" class="form-select mb-2">
                    @for ($i = 30; $i <= 150; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                <button class="btn btn-success">Simpan Berat Badan</button>
            </div>
        </div>

        <!-- Riwayat Berat Badan -->
        <div class="card mb-3">
            <div class="card-body">
                <h6>Riwayat Berat Badan</h6>
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr><th>Tanggal</th><th>Berat Badan (kg)</th></tr>
                    </thead>
                    <tbody>
                        <!-- Loop data -->
                    </tbody>
                </table>
                <button class="btn btn-success">Lihat Semua Data</button>
            </div>
        </div>

        <!-- Status BMI -->
        <div class="card mb-3">
            <div class="card-body">
                <h6>Status BMI terakhir</h6>
                <div class="d-flex flex-wrap gap-2">
                    <div class="badge bg-primary">BMI: 22.5 (Normal)</div>
                    <div class="badge bg-info">Berat Badan: 60 kg</div>
                    <div class="badge bg-info">Tanggal Input: 29 April 2025</div>
                    <div class="badge bg-info">Berat Badan Akhir: 61 kg</div>
                </div>
                <div class="alert alert-warning mt-2">
                    Anda juga dapat mengecek trend & status badan terakhir untuk melihat hasil perkembanganmu!
                </div>
            </div>
        </div>

        <!-- Grafik -->
        <div class="card mb-3">
            <div class="card-body">
                <h6>Grafik Perkembangan Berat Badan</h6>
                <canvas id="weightChart" height="150"></canvas>
            </div>
        </div>
    </div>

    <footer class="text-center py-3 bg-dark text-white">
        © obecity_check 2025
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('assets/web_user/js/custom.js') }}"></script>
</body>
</html>
