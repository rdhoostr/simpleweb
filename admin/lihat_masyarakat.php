          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Masyarakat</h6>
            </div>
            <div class="card-body" style="font-size: 15px">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>NIK</th>
                      <th>Nama</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Telp</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>

                  <?php
                      include '../koneksi.php';
                      $sql = mysqli_query($koneksi, "select * from masyarakat"); 
                      while ($data = mysqli_fetch_array($sql)) {
                  ?>

                  </tfoot>
                  <tbody>
                   
                    <tr>
                        <td><?php echo $data['nik']; ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['username']; ?></td>
                        <td><?php echo $data['password']; ?></td>
                        <td><?php echo $data['telp']; ?></td>
                      <td>
                        <!-- ini tombol -->  
                        <a href="delete_masyarakat.php?nik=<?php echo $data['nik']; ?>" class="btn btn-danger btn-circle" onclick="return confirm('Yakin ingin hapus data?')">
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

       