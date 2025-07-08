          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Petugas</h6>
            </div>
            <div class="card-body" style="font-size: 15px">
            <a href="admin.php?url=tambah_petugas" class="btn btn-light btn-icon-split mb-3">
    <span class="icon text-gray-600">
        <i class="fas fa-plus"></i>
    </span>
    <span class="text">Tambah data</span>
</a>

<div class="table-responsive mt-3">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Id Petugas</th>
                <th>Nama Petugas</th>
                <th>Username</th>
                <th>Password</th>
                <th>Telp</th>
                <th>Level</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tfoot>


                  <?php
                      include '../koneksi.php';
                      $sql = mysqli_query($koneksi, "select * from petugas"); 
                      $no = 1;
                      while ($data = mysqli_fetch_array($sql)) {
                  ?>

                  </tfoot>
                  <tbody>
                   
                    <tr>
                        <td><?php echo $data['id_petugas']; ?></td>
                        <td><?php echo $data['nama_petugas']; ?></td>
                        <td><?php echo $data['username']; ?></td>
                        <td><?php echo $data['password']; ?></td>
                        <td><?php echo $data['telp']; ?></td>
                        <td><?php echo $data['level']; ?></td>
                      <td>
                        <!-- ini tombol -->
                        <a href="admin.php?url=edit_petugas&id=<?php echo $data['id_petugas']; ?>" class="btn btn-primary btn-circle">
                            <i class="fa fa-edit"></i>
                        </a>   
                        <a href="delete_petugas.php?id=<?php echo $data['id_petugas']; ?>" class="btn btn-danger btn-circle" onclick="return confirm('Yakin ingin hapus data?')">
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

       