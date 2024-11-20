<?php
$conn= mysqli_connect('localhost','root','','ba231');
if ($conn) {
    echo "koneksi suksess";
} else {
    echo "Error.. gagal konek " . mysqli_connect_error();
}