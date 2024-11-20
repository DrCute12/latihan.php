<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mahasiswa</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
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

    <!-- Konten Utama -->
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h3 class="card-title text-center">Data Mahasiswa</h3>
                <hr>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Kode Jurusan</th>
                                <th>Gender</th>
                                <th>Alamat</th>
                                <th>No HP</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                include "koneksi.php";
                                $qry = "SELECT * FROM mahasiswa";
                                $exec = mysqli_query($conn, $qry);

                                while($data = mysqli_fetch_assoc($exec)){
                            ?>
                            <tr>
                                <td><?= $data['nim'] ?></td>
                                <td><?= $data['nama_mhs'] ?></td>
                                <td><?= $data['kode_jurusan'] ?></td>
                                <td><?= $data['gender'] == 1 ? "Laki-Laki" : "Perempuan" ?></td>
                                <td><?= $data['alamat'] ?></td>
                                <td><?= $data['no_hp'] ?></td>
                                <td><?= $data['email'] ?></td>
                                <td>
                                    <a href="edit.php?nim=<?= $data['nim'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="delete.php?nim=<?= $data['nim'] ?>" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>