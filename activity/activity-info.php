<?php
require_once("db_connect.php");
require_once '../app/controllers/isLoadingFromViewsOthers.php';
$username = $_SESSION['username'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>活動管理</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../node_modules/admin-lte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../node_modules/admin-lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../node_modules/admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../node_modules/admin-lte/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../node_modules/admin-lte/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../node_modules/admin-lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../node_modules/admin-lte/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../node_modules/admin-lte/plugins/summernote/summernote-bs4.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <style>
    /* body {
      color: #c2c7d0;
    } */

    .content-wrapper {
      background: #58626d;
    }

    .content {
      background: #58626d;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="../node_modules/admin-lte/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>
    <!-- Navbar  -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="../index-page.php" class="nav-link">首頁</a>
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
                <img src="../image/user.png" alt="User Avatar" class="img-size-50 mr-3 img-circle">
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
                <img src="../image/user.png" alt="User Avatar" class="img-size-50 img-circle mr-3">
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
                <img src="../image/user.png" alt="User Avatar" class="img-size-50 img-circle mr-3">
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
      <a href="../node_modules/admin-lte/index3.html" class="brand-link">
        <img src="../node_modules/admin-lte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">logo</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../image/user.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">歡迎, <?= $username ?></a>
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
              <a href="../index-page.php" class="nav-link">
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
                  <a href="../app/views/admin/admin-info.php" class="nav-link">
                    <i class="fas fa-user-tie"></i>
                    <p>管理員資訊</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../app/views/admin/admin-add.php" class="nav-link">
                    <i class="fas fa-user-cog"></i>
                    <p>新增管理員</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="../orderList/orderUserList.php" class="nav-link">
                <i class="nav-icon fas fa-file-alt"></i>
                <p>
                  訂單明細
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../product/product.php" class="nav-link">
                <i class="nav-icon fas fa-store"></i>
                <p>
                  商品管理
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../board/boardUserList.php" class="nav-link">
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
                  <a href="../app/views/admin/admin-info.php" class="nav-link">
                    <i class="far fa-user"></i>
                    <p>會員基本資料</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../app/views/admin/admin-add.php" class="nav-link">
                    <i class="fas fa-user-plus"></i>
                    <p>新增會員</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-pencil-alt"></i>
                    <p>會員撰寫遊記紀錄</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-fish"></i>
                    <p>會員參加活動紀錄</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-heart"></i>
                    <p>會員蒐藏統計</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
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
              <a href="activity-info.php" class="nav-link active">
                <i class="nav-icon fas fa-info"></i>
                <p>
                  活動資訊管理
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="activity-apply.php" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                  活動報名
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../travel-notes/travel-notes-list.php" class="nav-link">
                <i class="nav-icon fas fa-bug"></i>
                <p>
                  旅遊札記
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../return_order/template.php" class="nav-link">
                <i class="nav-icon far fa-envelope"></i>
                <p>
                  客訴管理中心
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../app/views/admin/admin-status.php" class="nav-link">
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
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2 justify-content-end">
            <div class="col-sm-6">
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <!-- /.card -->
              <div class="card">
                <div class="card-header row">
                  <h2>活動資訊管理</h2>
                  <h2 class="card-title text-right col">今日日期：<?php $today = date('Y/m/d');
                                                              echo $today; ?></h2>
                </div>
                <div class="dropdown row justify-content-end mr-4 mt-2">
                <a href="activity-info-addpage.php" class="btn btn-warning mr-3">新增活動</a>
                  <button class="btn btn-secondary dropdown-toggle config_btn" type="button" data-toggle="dropdown" id="btn_baud">
                    <span class="caret">是否過期</span></button>
                  <u1 class="dropdown-menu" id="baudrate">
                    <li><a class="dropdown-item" data-value="1">未過期</a></li>
                    <li><a class="dropdown-item " data-value="2">已過期</a></li>
                  </u1>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <!-- 活動商品詳情開始-->
                  <table class="table table-bordered table-hover">
                    <thead class="table-info">
                      <tr>
                        <th>活動編號</th>
                        <th>活動名稱</th>
                        <th>活動地點</th>
                        <th>活動開始</th>
                        <th>活動截止</th>
                        <th>報名倒數</th>
                        <th>操作</th>
                      </tr>
                    </thead>
                    <tbody id="target">
                      <div class="modal" tabindex="-1" role="dialog" id="show-detail">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title detail-title"></h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body detail-content">
                              <p></p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button>
                              <button type="submit" class="btn btn-info" id="saveNew">
                                儲存更新</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </tbody>
                  </table>
                  <!-- 活動商品詳情結束-->
                  <!-- 活動商品上架開始-->
                  <!-- <form class="addForm mt-3 row" id="ac-info-add">
                    <div class="form-group col">
                      <label for="full_name" class="col-form-label text-md-right mr-2">活動名稱</label>
                      <div class="">
                        <input type="text" id="full_name" class="form-control" name="full_name" placeholder="請輸入活動名稱" required>
                      </div>
                    </div>
                    <div class="form-group col-3">
                      <label for="start" class=" col-form-label text-md-right mr-2">開始日期</label>
                      <div class="">
                        <input class="form-control" type="date" value="2021-05-01" id="start" name="activity_date" required>
                      </div>
                    </div>
                    <div class="form-group col-2">
                      <label for="limit" class="col-form-label text-md-right mr-2">活動上限</label>
                      <div class="">
                        <input type="text" id="limit" class="form-control" placeholder="請輸入上限人數" required>
                      </div>
                    </div>
                    <div class="form-group col-2">
                      <label for="location" class="col-form-label text-md-right mr-2">活動地點</label>
                      <div class="">
                        <input type="text" class="form-control" id="location" name="phone_number" placeholder="請輸入地點" required>
                      </div>
                    </div>
                    <div class="form-group col-2">
                      <label for="cost" class="col-form-label text-md-right mr-2">活動售價</label>
                      <div class="">
                        <input type="text" id="cost" class="form-control" placeholder="請輸入活動售價" required>
                      </div>
                    </div>
                    <div class="form-group col-3">
                      <label for="schedule" class="col-form-label text-md-right mr-2">活動描述</label>
                      <div class="">
                        <textarea id="schedule" name="schedule" rows="5" cols="30" placeholder="請輸入描述"></textarea>
                        </div>
                    </div>
                    <div class="form-group col-3 align-self-end">
                    <button type="submit"  class="m-1 btn btn-primary submit">新增</button>
                    </div>
                  </form> -->
                  <!-- 活動商品上架結束-->
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  </div>
  </div>
  <!-- jQuery -->
  <script src="../node_modules/admin-lte/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="../node_modules/admin-lte/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="../node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="../node_modules/admin-lte/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="../node_modules/admin-lte/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="../node_modules/admin-lte/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="../node_modules/admin-lte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="../node_modules/admin-lte/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="../node_modules/admin-lte/plugins/moment/moment.min.js"></script>
  <script src="../node_modules/admin-lte/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="../node_modules/admin-lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="../node_modules/admin-lte/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="../node_modules/admin-lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../node_modules/admin-lte/dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../node_modules/admin-lte/dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="../node_modules/admin-lte/dist/js/pages/dashboard.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script>
    //檢視目前有的活動商品
    $(function() {
      $(".dropdown-menu a").click(function() {
        let filterNum = $(this).data('value');
        $.ajax({
            method: "GET",
            url: "activity-info-view.php",
            dataType: "json"
          }) //ajax結尾
          .done(function(data) {
            $("#target").empty();
            let content = "";
            data.forEach((activity) => {
              let value = (filterNum == 1) ? (activity.count > 0) : (activity.count < 0);
              if (value) {
                content += `
            <tr id="item${activity.id}">
            <td>${activity.id}</td>
            <td>${activity.name}</td>
            <td>${activity.location}</td>
            <td>${activity.start}</td>
            <td>${activity.end}</td>
            <td>${activity.count}天</td>
            <td><a data-id="${activity.id}" class="btn btn-app bg-info view-btn" data-toggle="modal" data-target="#show-detail"><i class="fas fa-edit"></i>檢視</a>
            <a data-id="${activity.id}" class="btn btn-app bg-danger delete-btn"><i class="fas fa-trash-alt"></i>刪除</a>
            </td>
        </tr>
        `
              } //判斷倒數是否為負數的結尾
            }) //foreach結尾
            $("#target").append(content);
          }) //done的結尾
          .fail(function(error) {
            console.log(error)
          })
          .always(function() {
            console.log('成功篩選');
          }).fail(function(error) {
            console.log(error);
          });
      }) //click事件的結尾
    }) //function的結尾

    //ajax開始
    $.ajax({
        method: "GET",
        url: "activity-info-view.php",
        dataType: "json"
      })
      .done(function(data) {
        let content = "";
        data.forEach((activity) => {
          content += `
          <tr id="item${activity.id}">
          <td>${activity.id}</td>
          <td>${activity.name}</td>
          <td>${activity.location}</td>
          <td>${activity.start}</td>
          <td>${activity.end}</td>
          <td>${activity.count}天</td>
          <td><a data-id="${activity.id}" class="btn btn-app bg-info view-btn" data-toggle="modal" data-target="#show-detail"><i class="fas fa-edit"></i>檢視</a>
          <a data-id="${activity.id}" class="btn btn-app bg-danger delete-btn"><i class="fas fa-trash-alt"></i>刪除</a>
          </td>
      </tr>
      `
        });
        $("#target").append(content);
      }).fail(function(error) {
        console.log(error)
      })
      .always(function() {
        console.log('成功');
      }).fail(function(error) {
        console.log(error);
      });
    //ajax結束

    //檢視結束
    //新增活動商品
    // $('.addForm').on('click', '.submit', function() {
    //   let acname = $('#full_name').val();
    //   let schedule = $('#schedule').val();
    //   let location = $('#location').val();
    //   let start = $('#start').val();
    //   let lim = $('#limit').val();
    //   let cost = $('#cost').val();
    //   $.ajax({
    //       type: 'POST',
    //       url: "activity-info-add.php",
    //       data: {
    //         acname: acname,
    //         limit: lim,
    //         schedule: schedule,
    //         location: location,
    //         start: start,
    //         cost: cost
    //       },
    //       dataType: "json"
    //     })
    //     .done(function() {}).fail(function(error) {
    //       console.log(error)
    //     });
    // });
    //新增結束
    //檢視行程
    $('#target').on('click', '.view-btn', function() {
      $('.detail-title').empty()
      $('.detail-content').empty()
      let targetId = $(this).data("id");
      $.ajax({
        method: 'POST',
        url: 'activity-info-load.php',
        data: {
          id: targetId
        },
        dataType: 'json'
      }).done(function(data) {
        let acInfo = `    
        <ul style="list-style:none" class="mr-5">
       <li>名稱:<input type="text" class="form-control" value="${data[0]["name"]}" id='detail_name'"></li>
       <li>開始:<input type="date" class="form-control" value="${data[0]["date"]}" id='detail_start'"></li>
       <li>結束:<input type="date" class="form-control" value="${data[0]["deadline"]}" id='detail_end'"></li>
       <li>地點:<input type="text" class="form-control" value="${data[0]["location"]}" id='detail_location'"></li>
       <li>上限:<input type="text" class="form-control" value="${data[0]["limit"]}" id='detail_limit'"></li>
       <li>價格:<input type="text" class="form-control" value="${data[0]["cost"]}" id='detail_cost'"></li>
       <li>行程:<textarea class="form-control" placeholder="${data[0]["schedule"]}" id='detail_schedule'" required></textarea></li>
       </ul>                        `
        $('.detail-title').append(`<h2 id="detail_id" data-id="${data[0]["id"]}">活動編號${data[0]["id"]}</h2>`)
        $('.detail-content').append(acInfo);
      }).fail(function(error) {
        console.log(error);
      });
    })
    //檢視結束 
    //刪除活動
    $("#target").on("click", ".delete-btn", function() {
      let targetId = $(this).data("id");
      Swal.fire({
        icon: 'warning',
        text: '確定要刪除這筆資料？',
        showCloseButton: true,
        confirmButtonColor: '#dc3545',
        showCancelButton: true,
        confirmButtonText: 'Yes',
        cancelButtonText: 'Cancel'
      }).then((result) => {
        if (result.isConfirmed) {
          // console.log(targetId);
          $.ajax({
              method: "POST",
              url: "activity-info-del.php",
              data: {
                id: targetId
              },
              dataType: "json"
            })
            .done(function(data) {
              location.reload()
            }).fail(function(error) {
              console.log(error)
            })
        }
      })
    })
    //刪除結束
    //編輯bootstrap檢視
    $('#saveNew').on('click', function() {
      let id = $('#detail_id').data('id');
      let name = $('#detail_name').val();
      let start = $('#detail_start').val();
      let end = $('#detail_end').val();
      let location = $('#detail_location').val();
      let limit = $('#detail_limit').val();
      let cost = $('#detail_cost').val();
      let schedule = $('#detail_schedule').val();
      //console.log(id);
      $.ajax({
        method: 'POST',
        data: {
          id: id,
          name: name,
          start: start,
          end: end,
          location: location,
          limit: limit,
          schedule: schedule,
          cost: cost
        },
        url: 'activity-info-edit.php',
        dataType: 'json'
      }).done(function(data) {
        Swal.fire(
          '已修改',
          '您已經成功修改'
        ).then(function() {
          window.location = "activity-info.php"
        })
      }).fail(function(error) {
        console.log(error);
      });
    })
    //編輯結束

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
          if (res.isConfirmed) {
            location.href = '../app/controllers/logout.php';
          } else {
            return false;
          }
        })
      })
    })
  </script>
</body>

</html>