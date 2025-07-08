<div class="card shadow">
<div class="card-header">
<a href="admin.php?url=lihat_petugas" class="btn btn-primary btn-icon-split">
        <span class="icon text-white-5">
        <i class="fa fa-arrow-left"></i>
    </span>
    <span class="text"> Kembali </span>
    </a>
    Edit Data Petugas
</div>

<div class="card-body">
    <?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    require '../koneksi.php'; // Perbaikan: Tambahkan titik koma

    $sql = mysqli_query($koneksi, "SELECT * FROM petugas WHERE id_petugas='{$_GET['id']}'"); // Perbaikan: Perbaiki sintaks $_GET
    if ($data = mysqli_fetch_array($sql)) {
    ?>

<form method="post" action="update_petugas.php" enctype="multipart/form-data">
    <div class="form-group">
        <label style="font-size: 15px">ID Petugas</label>
        <input type="text" name="id_petugas" class="form-control" value="<?php echo $data['id_petugas']; ?>" readonly>
    </div>

    <div class="form-group">
        <label style="font-size: 15px">Nama Petugas</label>
        <input type="text" name="nama_petugas" class="form-control" value="<?php echo $data['nama_petugas']; ?>">
    </div>

    <div class="form-group">
        <label style="font-size: 15px">Username</label>
        <input type="text" name="username" class="form-control" value="<?php echo $data['username']; ?>">
    </div>

    <div class="form-group">
        <label style="font-size: 15px">Password</label>
        <input type="text" name="password" class="form-control" value="<?php echo $data['password']; ?>">
    </div>

    <div class="form-group">
        <label style="font-size: 15px">Telp</label>
        <input type="text" name="telp" class="form-control" value="<?php echo $data['telp']; ?>">
    </div>

    <div class="form-group">
        <label style="font-size: 15px">Level</label>
        <select class="form-control" name="level">
            <option value="<?php echo $data['level']; ?>"><?php echo $data['level']; ?></option>
            <option value="admin">Admin</option>
            <option value="petugas">Petugas</option>
        </select>
    </div>

    <div class="form-group">
        <input type="submit" value="Edit Data" class="btn btn-primary"> 
        <input type="reset" value="Kosongkan" class="btn btn-warning">
    </div>

</form>
    <?php } ?>

</div>
</div>
