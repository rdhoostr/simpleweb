<div class="card shadow">
<div class="card-header">
<a href="admin.php?url=lihat_petugas" class="btn btn-primary btn-icon-split">
        <span class="icon text-white-5">
        <i class="fa fa-arrow-left"></i>
    </span>
    <span class="text"> Kembali </span>
    </a>
    Tambah Petugas
</div>

<div class="card-body">

<form method="post" action="simpan_petugas.php" enctype="multipart/form-data">

    <div class="form-group">
        <label style="font-size: 15px">Nama Petugas</label>
        <input type="text" name="nama_petugas" class="form-control" value="" >
    </div>

    <div class="form-group">
        <label style="font-size: 15px">Username</label>
        <input type="text" name="username" class="form-control" value="" >
    </div>

    <div class="form-group">
        <label style="font-size: 15px">Password</label>
        <input type="text" name="password" class="form-control" value="" >
    </div>

    <div class="form-group">
        <label style="font-size: 15px">Telp</label>
        <input type="text" name="telp" class="form-control" value="" >
    </div>

    <div class="form-group">
        <label style="font-size: 15px">Level</label>
        <select class="from-control" name="level">
            <option>Klik disini untuk pilih</option>
            <option value="admin">Admin</option>
            <option value="petugas">Petugas</option>
        </select>
    </div>

    </div>

    <div class="form-group">
    <input type="submit" value="Simpan" class="btn btn-primary"> 
    </div>

</form>

</div>
</div>