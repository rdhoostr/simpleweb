<div class="card shadow">
    <div class="card-header">
        <a href="masyarakat.php" class="btn btn-primary btn-icon-split">
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
                    class="form-control" readonly value="<?php echo date('Y-m-d'); ?>"
                >
            </div>

            <div class="form-group">
                <label style="font-size: 14px">Isi Laporan</label>
                <textarea 
                    name="isi_laporan" 
                    class="form-control" 
                    required
                ></textarea>
            </div>

            <div class="form-group">
            <label style="font-size: 14px">Foto</label>
                <input 
                    type="file" 
                    name="foto" 
                    class="form-control" 
                    accept="image/*" 
                    required
                >
            </div>

            <button type="submit" class="btn btn-success">SIMPAN</button>
        </form>
    </div>
</div>
