<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
       .tabel {
            width: 100%;
            border: 1px solid black;
       }

       .tabel td, th {
        border: 1px solid black;
       }

       .tabel tr {
        border: 1px solid black;
       }
    </style>
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
        <fieldset>
            <legend>Form input data mahasiswa</legend>
            <h3>Lengkapi biodata dengan benar</h3>
            <table>
                <tr>
                    <td>NIM (Nomor induk mahasiswa)</td>
                    <td>:</td>
                    <td><input type="number" name="nim"></td>
                </tr>
                <tr>
                    <td>Nama mahasiswa</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><select name="jurusan">
                            <option value="001">Sistem Komputer</option>
                            <option value="002">Sistem Informasi</option>
                            <option value="003">Teknologi Informasi</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="gender" value="1"> laki-laki
                        <input type="radio" name="gender" value="2"> Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td>No. HP</td>
                    <td>:</td>
                    <td><input type="text" name="nohp"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="simpan"></td>
                </tr>
            </table>
        </fieldset>
    </form>
    <br>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </table>
</body>

</html>