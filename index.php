<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pengaduan Masyarakat</title>
  <link rel="icon" type="image/jpeg" href="img/gigi.jpg">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(to right, #4e73df, #224abe);
    }
    
    .card {
      border-radius: 15px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    }

    .form-control {
      border-radius: 10px;
      padding: 12px;
    }

    .btn-user {
      border-radius: 10px;
    }

    .text-center h1 {
      font-weight: 700;
    }

    .container {
      margin-top: 50px;
    }
  </style>

</head>

<body>

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-6 col-md-8">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-4">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-3">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang di Aplikasi Pengaduan!</h1>
                  </div>
                  <form class="user" method="post" action="proses-login.php">
                    <div class="form-group">
                      <input name="nik" type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan NIK Anda..." required>
                    </div>
                    <div class="form-group">
                      <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukkan Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                    <hr>
                    <a href="register.php" class="btn btn-success btn-user btn-block">
                      <i class="fa fa-user-plus fa-fw"></i> Belum Punya Akun? Daftar
                    </a>
                    <a href="index2.php" class="btn btn-secondary btn-user btn-block">
                      <i class="fa fa-user-shield fa-fw"></i> Login Sebagai Admin / Petugas
                    </a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
