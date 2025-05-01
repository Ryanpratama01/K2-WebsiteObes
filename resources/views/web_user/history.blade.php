@extends('layouts.main')

@push('styles')
    <!-- Bootstrap CSS & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('assets/web_user/css/history.css') }}" rel="stylesheet">
@endpush

@section('content')

<!-- Konten -->
<div class="container mt-4">
    <h5 class="text-primary fw-bold">Ringkasan Berat Badan</h5>
    <ul>
        <li><strong>Berat badan Awal:</strong> 70 kg</li>
        <li><strong>Berat badan Terkini:</strong> 68 kg</li>
        <li><strong>Perubahan Total:</strong> -2 kg</li>
        <li><strong>Rata-rata Perubahan:</strong> -0.5 kg/minggu</li>
    </ul>

    <div class="card mt-4 shadow-sm">
        <div class="card-header bg-light fw-bold text-info text-center">
            Time line riwayat badan
        </div>
        <div class="card-body p-0">
            <table class="table table-bordered mb-0">
                <thead class="table-success text-center">
                    <tr>
                        <th>Tanggal</th>
                        <th>Berat Badan (kg)</th>
                        <th>Status BMI</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td>1 Apr 2025</td>
                        <td>70</td>
                        <td class="text-danger">Overweight</td>
                    </tr>
                    <tr>
                        <td>4 Apr 2025</td>
                        <td>69</td>
                        <td class="text-warning">Slightly Over</td>
                    </tr>
                    <tr>
                        <td>7 Apr 2025</td>
                        <td>68.5</td>
                        <td class="text-warning">Slightly Over</td>
                    </tr>
                    <tr>
                        <td>10 Apr 2025</td>
                        <td>68</td>
                        <td class="text-success">Normal</td>
                    </tr>
                    <tr>
                        <td>13 Apr 2025</td>
                        <td>68</td>
                        <td class="text-success">Normal</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
