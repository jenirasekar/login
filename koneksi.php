<?php 
$conn = mysqli_connect("localhost", "root", "", "logindb");
if (mysqli_connect_error()) {
    echo "Koneksi database gagal:", mysqli_connect_error();
} else {
    echo "Berhasil";
}
?>