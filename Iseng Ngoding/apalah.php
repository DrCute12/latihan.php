<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Biodata</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">BA231</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Jurusan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kelas</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<form action="proses.php" method="POST">
    <div class="container-fluid">
        <div class="container p-5 my-5 bg-dark text-white">
            <h2>Selamat datang</h2>
        </div>
        <div class="container p-5 my-5 border border-dark">
            <h2>Input Mahasiswa</h2>
            <form action="proses.php" method="POST">
                <div class="mb-3 mt-3">
                    <label for="nim">Nim :</label>
                    <input type="text" class="form-control" placeholder="Input nim" name="nim" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="nama">Nama :</label>
                    <input type="text" class="form-control" placeholder="Input Nama" name="nama" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="nama">Jurusan :</label>
                    <select name="kode_jurusan" class="form-select">
                        <option value="J01">Sistem Komputer</option>
                        <option value="J02">Sistem Informasi</option>
                        <option value="J03">Teknologi Informasi</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="gender">Gender :</label><br>
                    <input class="form-check-input" type="radio" name="gender" value="1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Laki - Laki
                    </label>
                    <input class="form-check-input" type="radio" name="gender" value="0">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Perempuan
                    </label>
                </div>
                <div class="mb-3">
                    <label for="alamat">Alamat :</label>
                    <input type="text" class="form-control" placeholder="Input Alamat" name="alamat" required>
                </div>
                <div class="mb-3">
                    <label for="no_hp">No HP :</label>
                    <input type="text" class="form-control" placeholder="Input No HP" name="no_hp" required>
                </div>
                <div class="mb-3">
                    <label for="Alamat">Email :</label>
                    <input type="email" class="form-control" placeholder="Input Email" name="email" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            <h2>Data Mahasiswa</h2>
    <table class="tabel">
        <tr>
            <th>NIM</th>
            <th>Nama Mhs</th>
            <th>Jurusan</th>
            <th>Gender</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Email</th>
            <th>Act</th>
        </tr>
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
               <a href="edit.php?nim=<?= $data['nim'] ?>"><button>Edit</button></a>
               <a href="delete.php?nim=<?= $data['nim'] ?>"><button>Delete</button></a>
            </td>
        </tr>
        <?php } ?>
        </div>
    </div>
</body>

</html>