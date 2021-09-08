<?php
require_once "pdo-connect.php";
require_once '../app/controllers/isLoadingFromViewsOthers.php';
$username = $_SESSION['username'];
// $sql="SELECT * FROM order_list WHERE order_id='$order_id'";
// $result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>訂單管理</title>

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
  <style>
    body {
      color: #c2c7d0;
    }

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
              <a href="./orderUserList.php" class="nav-link active">
                <i class="nav-icon fas fa-file-alt"></i>
                <p>
                  訂單管理
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
                  <a href="../app/views/member.php" class="nav-link">
                    <i class="far fa-user"></i>
                    <p>會員基本資料</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../app/views/member-add.php" class="nav-link">
                    <i class="fas fa-user-plus"></i>
                    <p>新增會員</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../app/views/member-write-record.php" class="nav-link">
                    <i class="fas fa-pencil-alt"></i>
                    <p>會員撰寫遊記紀錄</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../app/views/member-activity.php" class="nav-link">
                    <i class="fas fa-fish"></i>
                    <p>會員參加活動紀錄</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../app/views/member-love.php" class="nav-link">
                    <i class="far fa-heart"></i>
                    <p>會員蒐藏統計</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../app/views/member-ask.php" class="nav-link">
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
              <a href="../activity/activity-info.php" class="nav-link">
                <i class="nav-icon fas fa-info"></i>
                <p>
                  活動資訊管理
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../activity/activity-apply.php" class="nav-link">
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
    <div class="content-wrapper bg-light">

      <!-- Main content -->
      <section class="content pt-3">
        <div class="container-fluid">
          <div class="row">
            <div class="col-8 mx-auto">

              <div class="card p-2 text-dark">

                <div class="card-header mb-2">

                  <div class="x_title ">
                    <h2>訂單管理</h2>
                    <!-- <h2><a href="user-list.php" action="">Home</a></h2> -->
                  </div>

                </div>

                <div class="x_content">

                  <?php
                  $id = $_GET['order_id'];
                  $sql = $db_host->prepare("SELECT * FROM order_list WHERE order_id='$id'");
                  try {
                    $array = array();
                    $sql->execute();
                    while ($row = $sql->fetch()) {
                      $array[] = $row;
                    };
                  } catch (PDOException $e) {
                    echo '資料庫excute失敗<br>';
                    echo "Error: " . $e->getMessage();
                    exit;
                  }

                  foreach ($array as $row) {
                  ?>

                    <form action="orderUserEdit.php" method="post">
                      <div div class="card">
                        <table class="table table-bordered">
                          <thead class="table-info">
                            <tr>
                              <th style="width: 10px"></th>
                              <th>項目</th>
                              <th>狀態</th>
                              <th>修改</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1.</td>
                              <td>訂購人</td>
                              <td><input type="member" class="form-control-plaintext" value="<?= $row["order_id"] ?> " name="order_id"></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td>2.</td>
                              <td>訂單編號</td>
                              <td>
                                <label style="font-weight: 500;"> <?= $row["order_id"] ?></label>
                              </td>
                              <td></td>
                            </tr>
                            <tr>
                              <td>3.</td>
                              <td>商品項目</td>
                              <td>
                                <label style="font-weight: 500;"> <?= $row["order_product_id"] ?></label>
                              </td>
                              <td> <a href="#"> 查看商品項目 </a></td>
                            </tr>
                            <tr>
                              <td>4.</td>
                              <td>訂單金額</td>
                              <td>
                                <label style="font-weight: 500;"> <?= $row["order_amount"] ?></label>
                              </td>
                              <td></td>
                            </tr>
                            <tr>
                              <td>5.</td>
                              <td>付款狀態</td>
                              <td>
                                <label>
                                  <?php if ($row["order_payment_status"] == 0) { ?>
                                    <span style="font-weight: 500;" class="text-red text-bold">未付款</span>
                                  <?php } else { ?>
                                    <span style="font-weight: 500;" class="text-bold">已付款</span>
                                  <?php } ?>
                                </label>
                              </td>
                              <td>
                                <div class="p-2">
                                  <select name="order_payment_status" id="order_payment_status">
                                    <option value="0">未付款</option>
                                    <option value="1">已付款</option>
                                  </select>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>6.</td>
                              <td>訂單狀態</td>
                              <td>
                                <label style="font-weight: 500;">
                                  <?php if ($row["order_status"] == 0) { ?>
                                    <div class="text-red">未出貨</div>
                                  <?php } elseif ($row["order_status"] == 1) { ?>
                                    <span class="text-blue">運送中</span>
                                  <?php } else { ?>
                                    <span class="">已出貨</span>
                                  <?php } ?>
                                </label>
                              </td>
                              <td>
                                <div class="p-2" style="font-weight: 500;">
                                  <select name="order_status" id="order_status">
                                    <option value="0">未出貨</option>
                                    <option value="1">運送中</option>
                                    <option value="2">已出貨</option>
                                  </select>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>7.</td>
                              <td>付款方式</td>
                              <td>
                                <label>
                                  <?php if ($row["order_pay"] == 0) { ?>
                                    <div style="font-weight: 500;" class="">刷卡</div>
                                  <?php } elseif ($row["order_pay"] == 1) { ?>
                                    <span class="">匯款</span>
                                  <?php } else { ?>
                                    <span class="">超商付款</span>
                                  <?php } ?>
                                </label>
                              </td>
                              <td>
                                <div class="p-2">
                                  <select name="order_pay" id="order_pay">
                                    <option value="0">刷卡</option>
                                    <option value="1">匯款</option>
                                    <option value="2">超商付款</option>
                                  </select>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>8.</td>
                              <td>收件地址</td>
                              <td>
                                <div class="form-group">
                                  <input type="address" class="form-control" id="inputSuccess" name="order_address" value="<?= $row["order_address"] ?> ">
                                </div>
                              </td>
                              <td></td>
                            </tr>
                            <tr>
                              <td>9.</td>
                              <td>訂購日期</td>
                              <td>
                                <?= $row["order_date"] ?>
                              </td>
                              <td></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <button type="submit" class="btn btn-info float-right">修改</button>
                    <?php }  ?>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </section>
      <!-- /.content -->
    </div>

  </div>
  </div>


  <script>
    // let input = document.querySelecter(".form-control-plaintext");
    // input.onclick = function() {
    //   this.className = "form-control";
    //   this.attr.readonly = false;
    // }
    // // onblur失去焦點
    // input.onblur = function() {
    //   this.className = "form-control-plaintext";
    // }
    $("#order_payment_status").on("change", function() {
      let payment = $(this).val();
      let paymentName = $(this).find(":selected").text();
    })


    $("#order_status").on("change", function() {
      let status = $(this).val();
      let statusName = $(this).find(":selected").text();
    })


    $("#order_pay").on("change", function() {
      let pay = $(this).val();
      let payName = $(this).find(":selected").text();
    })
  </script>

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
  <!-- SweetAlert2 -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script>
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