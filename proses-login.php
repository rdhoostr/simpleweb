<?php

$nik         = $_POST['nik'];
$password    = $_POST['password'];

include 'koneksi.php';
$sql = "SELECT*FROM masyarakat WHERE nik='$nik' AND password='$password'";
$query = mysqli_query($koneksi, $sql);

var_dump($query);

if (mysqli_num_rows($query) > 0) {
    session_start();
    $_SESSION['nik'] = $nik;
    $data = mysqli_fetch_array($query);
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['username'] = $data['username'];

    header("Location:masyarakat.php");
}else{
    echo"<script>alert('Maaf anda gagal login'); window.location.assign('index.php'); </script>";
}