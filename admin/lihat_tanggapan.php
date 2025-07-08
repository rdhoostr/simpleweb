          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Tanggapan</h6>
            </div>
            <div class="card-body" style="font-size: 15px">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID Tanggapan</th>
                      <th>Tanggal Tanggapan</th>
                      <th>Tanggapan</th>
                      <th>ID Pengaduan</th>
                      <th>ID Petugas</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>

                  <?php
                      include '../koneksi.php';
                      $sql = mysqli_query($koneksi, "select * from tanggapan"); 
                      while ($data = mysqli_fetch_array($sql)) {
                  ?>

                  </tfoot>
                  <tbody>
                   
                    <tr>
                        <td><?php echo $data['id_tanggapan']; ?></td>
                        <td><?php echo $data['tgl_tanggapan']; ?></td>
                        <td><?php echo $data['tanggapan']; ?></td>
                        <td><?php echo $data['id_pengaduan']; ?></td>
                        <td><?php echo $data['id_petugas']; ?></td>
                      <td>
                        <!-- ini tombol -->  
                        <a href="delete_tanggapan.php?id=<?php echo $data['id_tanggapan']; ?>" class="btn btn-danger btn-circle" onclick="return confirm('Yakin ingin hapus data?')">
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

       