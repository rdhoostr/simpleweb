          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pengaduan</h6>
            </div>
            <div class="card-body" style="font-size: 15px">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id Pengaduan</th>
                      <th>Tanggal Pengaduan</th>
                      <th>nik</th>
                      <th>Password</th>
                      <th>isi laporan</th>
                      <th>foto</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>

                  <?php
                      include '../koneksi.php';
                      $sql = mysqli_query($koneksi, "select * from pengaduan"); 
                      while ($data = mysqli_fetch_array($sql)) {
                  ?>

                  </tfoot>
                  <tbody>
                   
                    <tr>
                        <td><?php echo $data['id_pengaduan']; ?></td>
                        <td><?php echo $data['tgl_pengaduan']; ?></td>
                        <td><?php echo $data['nik']; ?></td>
                        <td><?php echo $data['isi_laporan']; ?></td>
                        <td><?php echo $data['foto']; ?></td>
                        <td><?php echo $data['status']; ?></td>
                      <td>
                        <!-- ini tombol --> 
                        <a href="delete_pengaduan.php?id=<?php echo $data['id_pengaduan']; ?>" class="btn btn-danger btn-circle" onclick="return confirm('Yakin ingin hapus data?')">
                            <i class="fa fa-trash"></i>
                        </a>              

                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

       