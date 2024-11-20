
<?php


$nim = $_GET['nim'];

include "koneksi.php";
$qry = "DELETE FROM mahasiswa WHERE nim = '$nim'";
$exec = mysqli_query($conn, $qry);

if($exec){
    echo "<script>alert('Data berhasil dihapus'); window.location = 'mahasiswa.php'</script>";
}else{
    echo "Data gagal dihapus";
}
