<?php
$id = $_GET['id'];
if (empty($id)) {
    header("Location: masyarakat.php");
    exit; 
}

include 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE id_pengaduan='$id'");
$data = mysqli_fetch_array($query);
?>

<div class="card shadow">
    <div class="card-header">
        <a href="?url=lihat-pengaduan" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fa fa-arrow-left"></i>
            </span>
            <span class="text">Kembali</span>
        </a>
    </div>
    
    <div class="card-body">
        <form method="post" action="proses-pengaduan.php" enctype="multipart/form-data">
            <div class="form-group">
                <label style="font-size: 14px">Tanggal Pengaduan</label>
                <input 
                    type="text" 
                    name="tgl_pengaduan" 
                    class="form-control" 
                    readonly 
                    value="<?= htmlspecialchars($data['tgl_pengaduan']); ?>"
                >
            </div>

            <div class="form-group">
                <label style="font-size: 14px">Isi Laporan</label>
                <textarea 
                    name="isi_laporan" 
                    class="form-control" 
                    required><?= htmlspecialchars($data['isi_laporan']); ?></textarea>
            </div>

            <div class="form-group">
                <label style="font-size: 14px">Foto</label>
                <br>
                <img class="img-thumbnail" src="foto/<?= htmlspecialchars($data['foto']); ?>" width="300">
            </div>
        </form>
    </div>
</div>
