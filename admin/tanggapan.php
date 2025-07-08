<?php
$id = $_GET['id'] ?? '';

if (empty($id)) {
    header("Location: masyarakat.php");
    exit;
}

include '../koneksi.php';
$stmt = $koneksi->prepare("SELECT * FROM pengaduan WHERE id_pengaduan = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();

if (!$data) {
    header("Location: masyarakat.php");
    exit;
}
?>

<div class="card shadow">
    <div class="card-header">Tanggapan</div>
</div>

<div class="card shadow">
    <div class="card-header">
        <a href="?url=verifikasi-pengaduan" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fa fa-arrow-left"></i>
            </span>
            <span class="text">Kembali</span>
        </a>
    </div>

    <div class="card-body">
        <form method="post" action="simpan-tanggapan.php" enctype="multipart/form-data">
            <div class="form-group">
                <label style="font-size: 14px">ID Pengaduan</label>
                <input 
                    type="text" 
                    name="id_pengaduan" 
                    class="form-control" 
                    readonly 
                    value="<?php echo htmlspecialchars($_GET['id']); ?>"
                >
            </div>

            <div class="form-group">
                <label style="font-size: 14px">Tanggal Tanggapan</label>
                <input 
                    type="text" 
                    name="tgl_tanggapan" 
                    class="form-control" 
                    readonly 
                    value="<?php echo date('Y-m-d'); ?>"
                >
            </div>

            <div class="form-group">
                <label style="font-size: 14px">Tulis Tanggapan</label>
                <textarea 
                    rows="7"
                    name="tanggapan" 
                    class="form-control"
                    required></textarea>
            </div>

            <div class="form-group">
                <label style="font-size: 14px">ID Petugas</label>
                <input 
                    type="text" 
                    name="id_petugas" 
                    class="form-control" 
                    value="<?php echo htmlspecialchars($_SESSION['id_petugas'] ?? ''); ?>" 
                    readonly>
            </div>

            <input type="submit" class="btn btn-success btn-user" value="Tanggapi">
        </form>
    </div>
</div>
