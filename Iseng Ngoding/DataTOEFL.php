
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data TOEFL</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .judul {
            margin: auto;
            width: 87%;
        }
    </style>
</head>

<body>
    <!-- Navigasi -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="form.php">BA231</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="mahasiswa.php">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="DataTOEFL.php">Data TOEFL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="transkrip.php">Transkrip Nilai</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-5 pt-4">
        <h1>Data TOEFL dan Sertifikasi</h1>

        <!-- Tabel TOEFL -->
        <h2>TOEFL</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Tanggal Valid</th>
                        <th>Nilai TOEFL</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2026-02-20</td>
                        <td>300</td>
                        <td>Terpenuhi</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p><i>*Syarat TOEFL berlaku untuk perwalian semester ganjil sesuai dengan semester mahasiswa.</i></p>
        <ul>
            <li>Program Sarjana S1: 300 untuk semester III, 350 untuk semester V, 400 untuk semester VII, dan 450 untuk semester VIII atau sebelum ujian skripsi.</li>
            <li>Program Diploma D3: 300 untuk semester III, 350 untuk semester V, 400 untuk semester VI atau sebelum ujian tugas akhir.</li>
        </ul>

        <!-- Tabel Sertifikasi -->
        <h2>Sertifikasi</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Sertifikasi</th>
                        <th>Konsentrasi</th>
                        <th>Semester</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>DOT Exam Only</td>
                        <td>Semua</td>
                        <td>II</td>
                        <td>Terpenuhi</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>LSP Informatika Skema Networking</td>
                        <td>Semua</td>
                        <td>V</td>
                        <td>Belum Terpenuhi</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Microcontroller Programming using Arduino</td>
                        <td>Semua</td>
                        <td>VI</td>
                        <td>Belum Terpenuhi</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Phyton Programming</td>
                        <td>Semua</td>
                        <td>VII</td>
                        <td>Belum Terpenuhi</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="info">
            <p>*DOT wajib bagi mahasiswa semester II.</p>
            <p>*Syarat polling berlaku hanya untuk angkatan 2019 ke atas.</p>
            <p>*Sertifikasi di atas adalah sertifikasi yang diperlukan pada perwalian semester. Silahkan lengkapi sertifikasi lain yang sebelumnya belum terpenuhi apabila tersedia.</p>
        </div>

        <h3>Kontak Informasi</h3>
        <ul>
            <li>LPBA: 0819-9977-0079</li>
            <li>Bisma Informatika: 0878-1780-0900</li>
        </ul>
    </div>
</body>
</html>
