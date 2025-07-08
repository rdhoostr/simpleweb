<?php
require '../koneksi.php';
$_nama=$_POST['nama_petugas'];
$_user=$_POST['username'];
$_pass=$_POST['password'];
$_telp=$_POST['telp'];
$_level=$_POST['level'];

$sql = mysqli_query($koneksi, "INSERT INTO petugas (nama_petugas, username, password, telp, level) 
VALUES ('$_nama', '$_user', '$_pass', '$_telp', '$_level')");

if ($sql)
{
    ?>
    <script type="text/javascript">
        alert ('Data berhasil disimpan');
        window.location='admin.php?url=lihat_petugas';
    </script>
<?php
}
?>