
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../node_modules/admin-lte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../node_modules/admin-lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../node_modules/admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../node_modules/admin-lte/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../node_modules/admin-lte/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../node_modules/admin-lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../node_modules/admin-lte/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../node_modules/admin-lte/plugins/summernote/summernote-bs4.min.css">
   <!-- DataTables -->
   <link rel="stylesheet" href="../../node_modules/admin-lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
   <link rel="stylesheet" href="../../node_modules/admin-lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
   <link rel="stylesheet" href="../../node_modules/admin-lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

  <style>
      body{
        background: #58626d;
    }
  </style>
<body>
    <div class="container">
        <!--form-->
        <div class="form-wrapper">
              <div id="personal-form" class="row">
                  <div class="col-md-6 mx-auto">
                <!-- general form elements -->
                  <div class="card card-primary">
                      <div class="card-header">
                          <div class="row">
                            <div class="col-11">
                                <h3 class="card-title">個人詳情</h3>
                            </div>
                            <div id="close" class="col-1 p-0 text-right">
                                <span id="close-pointer" class="d-inline-block"><i class="fas fa-times"></i></span>
                            </div>
                          </div>
                        
                        
                      </div>
                      <!-- /.card-header -->

                      <!-- form start -->
                      <form action="../models/addhandler-member.php" method="post">
                          <div class="card-body">
                            <div class="form-group">
                              <label for="name">姓名 :</label>
                              <input type="text" class="form-control" name="username" id="name" required/>
                            </div>
                            <div class="form-group">
                            <label for="" class="d-block">性別 :</label>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sex" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">男</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sex" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">女</label>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="birth">會員生日 :</label>
                              <input type="date" class="form-control" name="birth" id="birth" required/>
                            </div>

                            <div class="form-group">
                              <label for="account">會員帳號 :</label>
                              <input type="text" class="form-control" name="account" id="account" required/>
                            </div>
                            <div class="form-group">
                              <label for="password">會員密碼 :</label>
                              <input type="password" class="form-control" name="password" id="password" required/>
                            </div>
                            <div class="form-group">
                              <label for="repassword">再輸入一次密碼 :</label>
                              <input type="repassword" class="form-control" name="repassword" id="repassword" required/>
                            </div>
                            <div class="form-group">

                            <div class="form-group">
                              <label for="email">E-mail :</label>
                              <input type="email" class="form-control" name="email" id="email" required/>
                            </div>
  
                            <div class="form-group">
                              <label for="address">地址 :</label>
                              <input type="text" class="form-control" name="address" id="address" required/>
                            </div>
                            
                            <!-- phone mask -->
                      <div class="form-group">
                        <label>電話 :</label>

                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                          </div>
                          <input type="text" name="phone" class="form-control" data-inputmask='"mask": "(999) 999-9999"' required data-mask/>
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->

                      <!-- phone mask -->
                      <div class="form-group">
                        <label>市話 :</label>

                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                          </div>
                          <input type="text" class="form-control" name="tel"
                                data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" required data-mask>
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->

                      
                            
                          <!-- /.card-body -->

                          
                            <div class="row">
                              <div class="col-10 mt-2">
                              <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                  <label class="form-check-label" for="flexCheckIndeterminate">
                                    我已同意使用條款
                                  </label>
                                </div>
                              </div>
                              <div class="col-2">
                                <div>
                                  <button type="submit" class="btn btn-warning">送出</button>
                                  </div>
                              </div>
                            
                            
                            
                          </div>
                      </form>
                        </div>
                  </div>

                  
                
              </div>
             </div>
             </div>
             <!--form-wrapper-->
    </div>


    <script src="../../node_modules/admin-lte/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../node_modules/admin-lte/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../node_modules/admin-lte/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../node_modules/admin-lte/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../node_modules/admin-lte/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../node_modules/admin-lte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../node_modules/admin-lte/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../node_modules/admin-lte/plugins/moment/moment.min.js"></script>
<script src="../../node_modules/admin-lte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../node_modules/admin-lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../node_modules/admin-lte/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../node_modules/admin-lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../node_modules/admin-lte/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../node_modules/admin-lte/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../node_modules/admin-lte/dist/js/pages/dashboard.js"></script>


<script>
   //$('#flexCheckIndeterminate').prop('checked', true);
</script>



</body>
</html>