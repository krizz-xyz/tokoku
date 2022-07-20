<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('css/sb-admin.css') ?>" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">
        <center><h2>Login Admin</h2>
        <h8>Silahkan masuk ke Panel Admin</h8></center>
      </div>

  
      <div class="card-body">
        <form action="<?php echo site_url('admin/login') ?>" method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" name="email" type="text" aria-describedby="emailHelp" placeholder="Pakai username juga bisa...">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" name="password" type="password" placeholder="Password...">
          </div>
          <div class="form-group">
             <div class="d-flex justify-content-between">
                <div class="custom-control custom-checkbox">
                  <input class="form-check-input" type="checkbox"  name="rememberme" id="rememberme" />
                  <label class="custom-control-label" for="rememberme">Ingat Saya</label>
                </div>
                <a class="d-block small" href="<?php echo site_url('reset_password') ?>">Lupa Password?</a>
             </div>
          </div>
          <div class="form-group">
                <input type="submit" class="btn btn-success w-100" value="Login" />
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js') ?>"></script>
</body>

</html>
