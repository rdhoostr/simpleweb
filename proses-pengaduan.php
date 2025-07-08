<?php
session_start();
$tgl_pengaduan = $_POST['tgl_pengaduan'];
$nik           = $_SESSION['nik'];
$isi_laporan   = $_POST['isi_laporan'];
$nama_foto     = $_FILES['foto']['name'];
$lokasi_foto   = $_FILES['foto']['tmp_name'];
$status = '0';

if (move_uploaded_file($lokasi_foto, "foto/" . $nama_foto)) {
    $sql = "INSERT INTO pengaduan (tgl_pengaduan, nik, isi_laporan, foto, status)
            VALUES ('$tgl_pengaduan', '$nik', '$isi_laporan', '$nama_foto', '$status')";

    include 'koneksi.php';

    if (mysqli_query($koneksi, $sql)) {
        echo "<script>alert('Pengaduan Sudah Tersimpan');</script>";
        echo "<script>window.location.assign('masyarakat.php?url=tulis-pengaduan');</script>";
    } else {
        echo "<script>alert('Pengaduan Gagal Tersimpan');</script>";
        echo "<script>window.location.assign('masyarakat.php?url=tulis-pengaduan');</script>";
    }
} else {
    echo "<script>alert('Pengaduan Gagal Tersimpan');</script>";
    echo "<script>window.location.assign('masyarakat.php?url=tulis-pengaduan');</script>";
}
?>
