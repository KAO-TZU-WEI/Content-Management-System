<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>管理員登入</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../node_modules/admin-lte/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../../node_modules/admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../node_modules/admin-lte/dist/css/adminlte.min.css">


  <style>
       .login-page{
        background: #58626d;
    }
  </style>
</head>


<body class="hold-transition login-page">

<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center pt-5 pb-5">
      <a href="#" class="h1"><b>跳躍吧<i class="fas fa-fish"></i>漁會</b></a>
    </div>
    <div class="card-body">
      

        <form action="../../controllers/admin-loginSave.php" method="post">
            <div class="input-group mb-3">
            <input type="account" class="form-control" name="account" placeholder="帳號">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-user-tie"></span>
                </div>
            </div>
            </div>
            <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="密碼">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-lock"></span>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-12">
                <div class="icheck-primary text-right">
                <input type="checkbox" id="remember">
                <label for="remember">
                    記住我
                </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="social-auth-links text-center mt-2 mb-3 col-12">
              <button type="submit" class="btn btn-block btn-primary">
                <i class="fas fa-sign-in-alt"></i> 登入
              </abutton>
              <button class="btn btn-block btn-danger col-12">
                <i class="fas fa-user-times mr-2"></i> 忘記密碼
              </button>
            </div>
            
            </div>
        </form>

     

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../../node_modules/admin-lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../../node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../node_modules/admin-lte/dist/js/adminlte.min.js"></script>
</body>
</html>