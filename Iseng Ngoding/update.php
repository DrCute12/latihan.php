<?php

$nim = $_POST['nim'];
$nama_mhs = $_POST['nama'];
$jurusan = $_POST['kode_jurusan'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];

include "koneksi.php";

$qry = "UPDATE mahasiswa SET 
        nama_mhs = '$nama_mhs',
        kode_jurusan = '$jurusan',
        gender = '$gender',
        alamat = '$alamat',
        no_hp = '$no_hp',
        email = '$email'
        WHERE nim = '$nim'
        ";

$exec = mysqli_query($conn, $qry);

if($exec){
    echo "<script>alert('Data berhasil di update'); window.location = 'mahasiswa.php';</script>";
}else{
    echo "Data gagal di simpan";
}