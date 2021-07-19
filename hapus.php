<?php
include 'koneksi.php';
$id = $_GET['id_supplier'];

$result = mysqli_query($koneksi, "DELETE FROM supplier WHERE id_supplier = '{$id}'");

header('location: index.php');
