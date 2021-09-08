<?php
  require_once '../../../class/db-class.php';
  require_once '../../controllers/isLoadingFromViews.php';
  $username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>後臺登入狀況</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../node_modules/admin-lte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../../node_modules/admin-lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../../node_modules/admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../../node_modules/admin-lte/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../node_modules/admin-lte/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../../node_modules/admin-lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../../node_modules/admin-lte/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../../node_modules/admin-lte/plugins/summernote/summernote-bs4.min.css">
<style>
    body {
       
    }
    .content-wrapper {
        background: #58626d;
    }
    .content {
        background: #58626d;
    }
    .page-item.active .page-link {
      color: white;
      background-color: #86cfda;
      border-color: white;
    }
    
   
</style>


</head>



<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
           <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../../../node_modules/admin-lte/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar  -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../../index-page.php" class="nav-link">首頁</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">公司員工聯絡</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../../image/user.png" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                    某某某
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">某某某私訊</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 小時之前</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../../image/user.png" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  某某某
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">誰誰誰通知你</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 小時之前</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../../image/user.png" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                    某某某
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">誰誰誰通知你</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 小時之前</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">查看更多訊息</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 條新通知</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 新訊息
            <span class="float-right text-muted text-sm">3 分鐘前</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 加入會員
            <span class="float-right text-muted text-sm">12 小時前</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 新報導
            <span class="float-right text-muted text-sm">2 天前</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">查看更多訊息</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link logout" role="button">
          <i class="fas fa-sign-out-alt "></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->
    <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../../node_modules/admin-lte/index3.html" class="brand-link">
      <img src="../../../node_modules/admin-lte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">logo</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../../image/user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">歡迎, <?php echo $username?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">一級管理員</li>
          <li class="nav-item">
            <a href="../../../index-page.php" class="nav-link">
                <i class="nav-icon fas fa-chart-bar"></i>
              <p>
                網頁分析
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
               <i class="nav-icon fas fa-user-shield"></i>
              <p>
                管理員管理
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="./admin-info.php" class="nav-link">
                  <i class="fas fa-user-tie"></i>
                    <p>管理員資訊</p>
                  </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="./admin-add.php" class="nav-link">
                  <i class="fas fa-user-cog"></i>
                    <p>新增管理員</p>
                  </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="../../../orderList/orderUserList.php" class="nav-link">
                <i class="nav-icon fas fa-file-alt"></i>
              <p>
                訂單明細
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../../product/product.php" class="nav-link">
                <i class="nav-icon fas fa-store"></i>
              <p>
                商品管理
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../../board/boardUserList.php" class="nav-link">
                <i class="nav-icon far fa-comment-alt"></i>
              <p>
                留言板管理
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user-friends"></i>
              <p>
                會員管理
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../member.php" class="nav-link">
                <i class="far fa-user"></i>
                  <p>會員基本資料</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../member-add.php" class="nav-link">
                  <i class="fas fa-user-plus"></i>
                  <p>新增會員</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../member-write-record.php" class="nav-link">
                <i class="fas fa-pencil-alt"></i>
                  <p>會員撰寫遊記紀錄</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../member-activity.php" class="nav-link">
                <i class="fas fa-fish"></i>
                  <p>會員參加活動紀錄</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../member-love.php" class="nav-link">
                <i class="far fa-heart"></i>
                  <p>會員蒐藏統計</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../member-ask.php" class="nav-link active">
                <i class="fas fa-question"></i>
                  <p>會員諮詢紀錄</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tags"></i>
              <p>
                折價券
              </p>
            </a>
          </li>
          <li class="nav-header">一級管理員&次級管理員</li>
          <li class="nav-item">
            <a href="../../../activity/activity-info.php" class="nav-link">
                <i class="nav-icon fas fa-info"></i>
              <p>
                活動資訊管理
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../../activity/activity-apply.php" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                活動報名
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../../travel-notes/travel-notes-list.php" class="nav-link">
                <i class="nav-icon fas fa-bug"></i>
              <p>
                旅遊札記
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../../return_order/template.php" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                客訴管理中心
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./admin-status.php" class="nav-link active">
                <i class="nav-icon fas fa-exclamation-triangle"></i>
              <p>
                後臺登入狀況
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                其他
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-search"></i>
              <p>
                搜尋
              </p>
            </a>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
            <!-- Main content -->
      <section class="content pt-3">

        <div class="container-fluid">

           <div class="row">
                <div class="col-12">

                    <div class="card p-2">
                    
                        <div class="card-header mb-2">
                            <div class="row">
                                <h2 class="col-md-10">後台登入狀況</h2>
                                <div class="form-group col-md-2">
                                    <div class="input-group input-group-md">
                                        <input type="search" class="form-control form-control-md" placeholder="關鍵字搜尋" value="">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-md btn-default">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                            
                                </div>
                            </div>

                        </div>
                
                
                
                        <div class="card-body p-2 table-responsive admin-wrapper">
                            <table id="admin" class="table table-bordered table-hover mt-2">
                                <thead class="table-info">
                                    <tr>
                                        <th><input type="checkbox" /></th>
                                        <th>帳號</th>
                                        <th>密碼</th>
                                        <th>登入時間</th>
                                        <th>IP</th>
                                        <th>登入情況</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                   $state = new Mydb();
                                   $res = $state->select("SELECT * FROM adminlog ORDER BY id desc");
                                   foreach($res as $row) {
                                  ?>
                                    <tr>
                                        <td><input type="checkbox" /></td>
                                        <td><?php echo $row['account'];?></td>
                                        <td><?php echo $row['password'];?></td>
                                        <td><?php echo date("Y-m-d h:i:s", $row['logintime']);?></td>
                                        <td><?php echo $row['ip'];?></td>
                                        <td>
                                        <?php
                                          if($row['state'] == 1) {
                                              echo '登入成功';
                                          } elseif($row['state'] == -2) {
                                            echo '帳號錯誤';
                                          } else {
                                            echo '密碼錯誤';
                                          }
                                        ?>
                                        </td>
                                        <td>
                                           <a class="btn btn-app bg-light"><i class="fas fa-ban"></i>封鎖IP</a>
                                           <a href="../../models/admin-status-delete.php?id=<?php echo $row['id']?>" class="btn btn-app remove" style="background-color: #f94144;color: white;"><i class="fas fa-trash-alt"></i>刪除</a>
                                        </td>
                                    </tr>
                                    <?php }?>
                                
                                </tbody>
                            </table>
                        </div>



                         
                    </div>

             
              </div>
           
           </div>
            
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>

    </div>
</div>




<!-- jQuery -->
<script src="../../../node_modules/admin-lte/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../../node_modules/admin-lte/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../../node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../../node_modules/admin-lte/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../../node_modules/admin-lte/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../../node_modules/admin-lte/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../../node_modules/admin-lte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../../node_modules/admin-lte/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../../node_modules/admin-lte/plugins/moment/moment.min.js"></script>
<script src="../../../node_modules/admin-lte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../../node_modules/admin-lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../node_modules/admin-lte/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../../node_modules/admin-lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../node_modules/admin-lte/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../node_modules/admin-lte/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../../node_modules/admin-lte/dist/js/pages/dashboard.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../../node_modules/admin-lte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../../node_modules/admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../../node_modules/admin-lte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../../node_modules/admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../../node_modules/admin-lte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../../node_modules/admin-lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../../node_modules/admin-lte/plugins/jszip/jszip.min.js"></script>
<script src="../../../node_modules/admin-lte/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../../node_modules/admin-lte/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../../node_modules/admin-lte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../../node_modules/admin-lte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../../node_modules/admin-lte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
   $(function () {
    $("#admin").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,"searching": false,"info":false,"ordering": false,
      "buttons": ["copy", "excel", "pdf", "print"],
      "lengthMenu": [ [6, 12, 18, -1], [6, 12, 18, "All"] ],
      "pagingType": "numbers"
    }).buttons().container().appendTo('.admin-wrapper .col-md-6:eq(0)');
    
  });
 
//logout
   $(function() {
    $(".logout").click(function() {
      Swal.fire({
            icon: 'warning',
            text: '確認登出?',
            showCloseButton: true,
            confirmButtonColor: '#DD6B55',
            showCancelButton: true,
            confirmButtonText: '登出',
            cancelButtonText: '取消'
        }).then((res) => {
          if(res.isConfirmed) {
            location.href = '../../controllers/logout.php';
          } else {
            return false;
          }
        })
    })
  })

  



  

</script>

</body>
</html>