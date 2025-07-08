<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pengaduan</h6>
    </div>
    <div class="card-body" style="font-size: 14px">
        <div class="table-responsive overflow-x-auto">
            <table class="table table-bordered text-nowrap" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tgl Pengaduan</th>
                        <th>Isi Laporan</th>
                        <th>Foto</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../koneksi.php';

                    if (!$koneksi) {
                        die("Koneksi database gagal: " . mysqli_connect_error());
                    }

                    $sql = "SELECT * FROM pengaduan WHERE status='proses'";
                    $query = mysqli_query($koneksi, $sql);
                    $no = 1;

                    while ($data = mysqli_fetch_assoc($query)) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= htmlspecialchars($data['tgl_pengaduan']); ?></td>
                            <td><?= htmlspecialchars($data['isi_laporan']); ?></td>
                            <td><?= htmlspecialchars($data['foto']); ?></td> 
                            <td><?= htmlspecialchars($data['status']); ?></td>
                            <td>
                                <a href="?url=detail-pengaduan&id=<?= $data['id_pengaduan']; ?>" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-info"></i>
                                    </span>
                                    <span class="text">Detail</span>
                                </a>

                                <a href="?url=tanggapan&id=<?= $data['id_pengaduan']; ?>" class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-exclamation-circle"></i>
                                    </span>
                                    <span class="text">Tanggapi</span>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
