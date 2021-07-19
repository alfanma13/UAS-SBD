<?php
include 'koneksi.php';
$idk = $_GET['id_karyawan'];

$result = mysqli_query($koneksi, "DELETE FROM karyawan WHERE id_karyawan = '{$idk}'");

header('location: index.php');
