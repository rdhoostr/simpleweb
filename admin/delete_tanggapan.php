<?php
require '../koneksi.php';
$id=$_GET['id'];

$sql=mysqli_query($koneksi, "delete from tanggapan where id_tanggapan='$id' ");

if ($sql)
{
    ?>
    <script type="text/javascript">
        alert ('Data berhasil dihapus');
        window.location='admin.php?url=lihat_tanggapan';
    </script>
    <?php
}
?>