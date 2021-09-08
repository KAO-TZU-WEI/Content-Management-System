<?php

require_once '../controllers/isLoadingFromViews-01.php';
require_once '../../class/db-class.php';
$username = $_SESSION['username'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>會員基本資料</title>

  <!-- Google Font: Source Sans Pro -->
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
<style>
    body {
        
    }
    .content-wrapper {
        background: #58626d;
    }
    .content {
        background: #58626d;
    }
    
    .table-head th {
      color: white;
    }
    .form-wrapper {
      position: absolute;
      top: 0;
      width: 100%;
      background: rgba(0,0,0,0.5);
      index: 5;
      display: none;
      
    }
    .detail-wrapper {
      position: absolute;
      top: 0;
      width: 100%;
      height: 92.6vh;
      background: rgba(0,0,0,0.5);
      index: 5;
      display: none;
      
    }
    .detail-wrapper.appear {
      display: block;
      height: 100%;
    z-index: 10;
    }
    .detail {
      cursor: pointer;
    }
    .form-wrapper.appear {
      display: block;
    }
    #close-pointer {
      cursor: pointer;
    }
    #member th {
      text-align: center;
      
    }
    .pagination {
      justify-content: start !important;
    }
    .page-item.active .page-link {
      color: white;
      background-color: #86cfda;
      border-color: white;
    }
    /*
    #member th:nth-child(1),#member td:nth-child(1) {
      flex: 0.1;
    }
    #member th:nth-child(2),#member td:nth-child(2) {
      flex: 0.5;
    }
    #member th:nth-child(3),#member td:nth-child(3) {
      flex: 0.5;
    }
    #member th:nth-child(4),#member td:nth-child(4) {
      flex: 0.5;
    }
    #member th:nth-child(5),#member td:nth-child(5) {
      flex: 0.5;
    }
    .col-sm-12 col-md-5
    #member th:nth-child(6),#member td:nth-child(6) {
      flex: 0.5;
    }
    #member th:nth-child(7),#member td:nth-child(7) {
      flex:2;
    }
    #member tr {
      display: flex;
    }*/
    #member td {
      text-align: center;
      line-height: 78px;
    }
    
    
 
</style>


</head>



<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
           <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../../node_modules/admin-lte/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar  -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index-page.php" class="nav-link">首頁</a>
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
              <img src="../../image/user.png" alt="User Avatar" class="img-size-50 mr-3 img-circle">
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
              <img src="../../image/user.png" alt="User Avatar" class="img-size-50 img-circle mr-3">
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
              <img src="../../image/user.png" alt="User Avatar" class="img-size-50 img-circle mr-3">
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
    <a href="#" class="brand-link">
      <img src="../../node_modules/admin-lte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">logo</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../image/user.png" class="img-circle elevation-2" alt="User Image">
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
            <a href="../../index-page.php" class="nav-link">
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
                  <a href="./admin/admin-info.php" class="nav-link">
                  <i class="fas fa-user-tie"></i>
                    <p>管理員資訊</p>
                  </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="./admin/admin-add.php" class="nav-link">
                  <i class="fas fa-user-cog"></i>
                    <p>新增管理員</p>
                  </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="../../orderList/orderUserList.php" class="nav-link">
                <i class="nav-icon fas fa-file-alt"></i>
              <p>
                訂單明細
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../product/product.php" class="nav-link">
                <i class="nav-icon fas fa-store"></i>
              <p>
                商品管理
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../board/board.php" class="nav-link">
                <i class="nav-icon far fa-comment-alt"></i>
              <p>
                留言板管理
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-user-friends"></i>
              <p>
                會員管理
              </p>
            </a>
            <ul class="nav nav-treeview">
             <li class="nav-item">
                <a href="member.php" class="nav-link active">
                <i class="far fa-user"></i>
                  <p>會員基本資料</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="member-add.php" class="nav-link">
                <i class="fas fa-user-plus"></i>
                  <p>新增會員</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="member-write-record.php" class="nav-link">
                <i class="fas fa-pencil-alt"></i>
                  <p>會員撰寫遊記紀錄</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="member-activity.php" class="nav-link">
                <i class="fas fa-fish"></i>
                  <p>會員參加活動紀錄</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="member-love.php" class="nav-link">
                <i class="far fa-heart"></i>
                  <p>會員蒐藏統計</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="member-ask.php" class="nav-link">
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
            <a href="../../activity/activity-info.php" class="nav-link">
                <i class="nav-icon fas fa-info"></i>
              <p>
                活動資訊管理
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../activity/activity-apply.php" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                活動報名
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../travel-notes/travel-notes-list.php" class="nav-link">
                <i class="nav-icon fas fa-bug"></i>
              <p>
                旅遊札記
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../return_order/template.php" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                客訴管理中心
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./admin/admin-status.php" class="nav-link">
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
          <!--內容-->
           <div class="row">
             <div class="col-12">
               <!--自我挑戰-->
                 <div class="card p-2">
              
                  <div class="card-header mb-2">
                   <div class="row">
                     <h2 class="col-md-10">會員基本資料</h2>
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
                
                
                
                <div id="member-wrapper" class="card-body p-2 table-responsive">
                  <table id="member" class="table table-bordered table-hover">
                      <thead class="table-info">
                        <tr>
                          <th><input type="checkbox" /></th>
                          <th >姓名</th>
                          <th >性別</th>
                          <th >會員等級</th>
                          <th >加入時間</th>
                          <th >詳情</th>
                          <th></th>
                          
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                          //1:男 2:女
                          //1:一級 2:次級
                          $data = new Mydb();
                          $res = $data->select("SELECT member_id,member_name,member_gender,member_level,addtime FROM member WHERE valid<>0 ORDER BY member_id DESC");
                          foreach($res as $row) {
                          
                        ?>
                        <tr class="del-tr<?php echo $row['member_id'];?>">
                          <td><input type="checkbox" /></td>
                          <td><?php echo $row['member_name'];?></td>
                          <td>
                          <?php
                           if($row['member_gender'] == 1) {
                             echo '男';
                           } else {
                             echo '女';
                           }
                          
                          ?>
                          </td>
                          <td>
                          <?php 
                          if($row['member_level'] == 1) {
                            echo '付費會員';
                          } else {
                            echo '一般會員';
                          }
                          
                          ?>
                          </td>
                          <td><?php echo date("Y-m-d h:i:s", $row['addtime']);?></td>
                          <td><a class="detail" id="<?php echo $row['member_id'];?>">個人詳情</a></td>
                          <td class="text-center">

                          <a href="./member-editor-page.php?id=<?php echo $row['member_id'];?>" class="btn btn-app"><i class="fas fa-edit"></i>編輯</a>
                          <a class="btn btn-app"><span class="badge bg-info">3</span><i class="far fa-envelope"></i>發送E-mail</a>
                          <a class="btn btn-app"><span class="badge bg-teal">67</span><i class="fas fa-inbox"></i>訂單歷程</a>
                          <a class="btn btn-app"><span class="badge bg-danger">531</span><i class="fas fa-heart"></i>蒐藏查詢</a>
                          <a class="btn btn-app"><i class="fas fa-percent"></i>折價券蒐藏</a>
                          <a style="background-color: #f94144;color: white;" class="btn btn-app member-del" data-id="<?php echo $row['member_id'];?>"><i class="fas fa-trash-alt"></i>刪除</a>
                          
                          
                        </td>
                        </tr>
                        <?php }?>
                        
                        
                      </tbody>
                      
                  </table>
                 
                  
                </div>
                
               </div>


              

             <!--detail show-->
              <div class="detail-wrapper">
                 <div class="card col-md-7 mx-auto" style="margin: 100px;">
                      
                      <div class="card-body">
                      <table id="" class="table table-bordered bg-white">
                        <thead>
                          <tr>
                            <th><h5>個人詳細資料</h5></th><th><span id="close-pointer" class="d-inline-block float-right detail-btn"><i class="fas fa-times"></i></span></th>
                          <tr>

                        </thead>
                       
                        <tbody class="insert-tr">
                          
                           <tr><td>姓名</td><td class="member-name"></td></tr>
                            <tr><td>性別</td><td class="member-sex"></td></tr>
                            <tr><td>會員生日</td><td class="member-birth"></td></tr>
                            <tr><td>會員帳號</td><td class="member-account"></td></tr>
                            <tr><td>會員密碼</td><td class="member-pwd"></td></tr>
                            <tr><td>會員等級</td><td class="member-level"></td></tr>
                            <tr><td>E-mail</td><td class="member-email"></td></tr>
                            <tr><td>地址</td><td class="member-addr"></td></tr>
                            <tr><td>電話</td><td class="member-phone"></td></tr>
                            <tr><td>IP位置</td><td class="member-ip"></td></tr>

                            
                        </tbody>
                        <div class="btn-group me-2 mb-2" role="group" aria-label="Second group">
                                    <button type="button" class="btn btn-secondary">Copy</button>
                                    <button type="button" class="btn btn-secondary">PDF</button>
                                    <button type="button" class="btn btn-secondary">Print</button>
                                </div>
                  

                </table>
                      </div>
                  </div>
                
              </div>
            
             <!--/detail show-->
            
             <!--/自我挑戰-->
          
             <!-- /.col -->
           </div>
           <!-- /.row -->
         </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
     </div>

    </div>
</div>




<!-- jQuery -->
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
<!-- DataTables  & Plugins -->
<script src="../../node_modules/admin-lte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../node_modules/admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../node_modules/admin-lte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../node_modules/admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../node_modules/admin-lte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../node_modules/admin-lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../node_modules/admin-lte/plugins/jszip/jszip.min.js"></script>
<script src="../../node_modules/admin-lte/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../node_modules/admin-lte/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../node_modules/admin-lte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../node_modules/admin-lte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../node_modules/admin-lte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!--sweetalert-->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
  /*$(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });*/
  $(function () {
    $("#member").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,"searching": false,"info":false,"ordering": false,"paging": true,
      "buttons": ["copy", "excel", "pdf", "print"],
      "lengthMenu": [ [6, 12, 18, -1], [6, 12, 18, "All"] ],
      "pagingType": "numbers"
    }).buttons().container().appendTo('#member-wrapper .col-md-6:eq(0)');
    
  });

 //jump各人詳情
  $(function () {
    $('.detail').click(function() {
       let id = $(this).attr('id');
       let content = '';
       $.ajax({
        method: "GET",
        url: "../models/member-get-info.php",
        data: { id: id },
        dataType: "json"
       })
       .done((data) => {
          $('.member-name').text(data.name);
          data.sex == '1'? $('.member-sex').text('男'): $('.member-sex').text('女');
          $('.member-birth').text(data.birthday);
          $('.member-account').text(data.account);
          $('.member-pwd').text(data.password);
          data.level == '1'? $('.member-level').text('付費會員') : $('.member-level').text('一般會員');
          $('.member-email').text(data.email);
          $('.member-addr').text(data.address);
          $('.member-phone').text(data.phone);
          $('.member-ip').text(data.ip);

          
       })
       .fail((err) => {
         console.log(err);
       })
       
      $('.detail-wrapper').addClass('appear');
      
     
    })
  });
  $(function () {
    $('.detail-btn').click(function() {
      $('.detail-wrapper').removeClass('appear');
      
    })
  });
  /*$(function () {
    $('#editor').click(function() {
      $('.form-wrapper').addClass('appear');
    })
  });
  $(function() {
    $('#close').click(function() {
      $('.form-wrapper').removeClass('appear');
    })
  });*/


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
            location.href = '../controllers/logout.php';
          } else {
            return false;
          }
        })
    })
  })

  //del   href="../models/member-delHandler.php?id="
  $(function() {
    $('.member-del').click(function() {
         let id = $(this).data('id');
        console.log(id);
       
          Swal.fire({
                icon: 'warning',
                text: '確認刪除?',
                showCloseButton: true,
                confirmButtonColor: '#DD6B55',
                showCancelButton: true,
                confirmButtonText: '刪除',
                cancelButtonText: '取消'
            }).then((res) => {
              if(res.isConfirmed) {
                //location.href = '../models/member-delHandler.php?id='+id;
                $.ajax({
                   method: "GET",
                   url: "../models/member-delHandler.php",
                   data: { id: id },
                   dataType: "json"
                })
                .done(function(data) {
                   $(".del-tr"+id).remove()
                   Swal.fire(
                       'Deleted',
                       '會員已被刪除',
                       'success'
                    )
                })
                .fail(function(err) {
                    console.log(err)
                })
                
              } else {
                return false;
              }
            })
        
    })
  })
   //del
   
 
  
</script>

</body>

</html>