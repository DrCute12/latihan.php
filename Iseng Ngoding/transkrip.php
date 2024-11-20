<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transkrip Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- Navigasi -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                        <a class="nav-link" href="DataTOEFL.php">Data TOEFL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="transkrip.php">Transkrip Nilai</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Konten -->
    <div class="container mt-5">
        <h1 class="text-center">Daftar Nilai</h1>
        <div class="table-responsive mt-4">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Kode Matakuliah</th>
                        <th>Nama Matakuliah</th>
                        <th>Semester</th>
                        <th>SKS</th>
                        <th>Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Data untuk tabel
                    $data = [
                        ['kode' => 'SK213501', 'matakuliah' => 'Algoritma dan Struktur Data', 'semester' => 1, 'sks' => 4, 'nilai' => 'A'],
                        ['kode' => 'SK213108', 'matakuliah' => 'Dasar Infrastruktur Teknologi', 'semester' => 1, 'sks' => 2, 'nilai' => 'AB'],
                        ['kode' => 'SK213110', 'matakuliah' => 'Fisika Dasar', 'semester' => 1, 'sks' => 2, 'nilai' => 'C'],
                        ['kode' => 'SK213119', 'matakuliah' => 'Matematika Diskrit', 'semester' => 1, 'sks' => 4, 'nilai' => 'BC'],
                        ['kode' => 'SK211101', 'matakuliah' => 'Pendidikan Agama', 'semester' => 1, 'sks' => 2, 'nilai' => 'B'],
                        ['kode' => 'SK212503', 'matakuliah' => 'Pendidikan Bahasa Asing I', 'semester' => 1, 'sks' => 4, 'nilai' => 'A']
                    ];

                    foreach ($data as $item): ?>
                        <tr>
                            <td><?= $item['kode'] ?></td>
                            <td><?= $item['matakuliah'] ?></td>
                            <td><?= $item['semester'] ?></td>
                            <td><?= $item['sks'] ?></td>
                            <td><?= $item['nilai'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>