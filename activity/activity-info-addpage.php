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
    <title>template</title>
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
        <!-- layout -->
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
                    <a href="../index-page.php" class="nav-link">??????</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">??????????????????</a>
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
                                        ?????????
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">???????????????</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 ????????????</p>
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
                                        ?????????
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">??????????????????</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 ????????????</p>
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
                                        ?????????
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">??????????????????</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 ????????????</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">??????????????????</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 ????????????</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 ?????????
                            <span class="float-right text-muted text-sm">3 ?????????</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 ????????????
                            <span class="float-right text-muted text-sm">12 ?????????</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 ?????????
                            <span class="float-right text-muted text-sm">2 ??????</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">??????????????????</a>
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
            <a href="./node_modules/admin-lte/index3.html" class="brand-link">
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
                        <a href="#" class="d-block">??????, root</a>
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
                        <li class="nav-header">???????????????</li>
                        <li class="nav-item">
                            <a href="../index-page.php" class="nav-link">
                                <i class="nav-icon fas fa-chart-bar"></i>
                                <p>
                                    ????????????
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../admin/views/admin/admin-info.php" class="nav-link">
                                <i class="nav-icon fas fa-user-shield"></i>
                                <p>
                                    ???????????????
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../app/views/admin/admin-info.php" class="nav-link">
                                        <i class="fas fa-user-tie"></i>
                                        <p>???????????????</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../app/views/admin/admin-add.php" class="nav-link">
                                        <i class="fas fa-user-cog"></i>
                                        <p>???????????????</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="../orderList/orderUserList.php" class="nav-link">
                                <i class="nav-icon fas fa-file-alt"></i>
                                <p>
                                    ????????????
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./product.php" class="nav-link">
                                <i class="nav-icon fas fa-store"></i>
                                <p>
                                    ????????????
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../board/boardUserList.php" class="nav-link">
                                <i class="nav-icon far fa-comment-alt"></i>
                                <p>
                                    ???????????????
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user-friends"></i>
                                <p>
                                    ????????????
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../app/views/member.php" class="nav-link">
                                        <i class="far fa-user"></i>
                                        <p>??????????????????</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../app/views/member-add.php" class="nav-link">
                                        <i class="fas fa-user-plus"></i>
                                        <p>????????????</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../app/views/member-write-record.php" class="nav-link">
                                        <i class="fas fa-pencil-alt"></i>
                                        <p>????????????????????????</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../app/views/member-activity.php" class="nav-link">
                                        <i class="fas fa-fish"></i>
                                        <p>????????????????????????</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../app/views/member-love.php" class="nav-link">
                                        <i class="far fa-heart"></i>
                                        <p>??????????????????</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../app/views/member-ask.php" class="nav-link">
                                        <i class="fas fa-question"></i>
                                        <p>??????????????????</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tags"></i>
                                <p>
                                    ?????????
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">???????????????&???????????????</li>
                        <li class="nav-item">
                            <a href="../activity/activity-info.php" class="nav-link active">
                                <i class="nav-icon fas fa-info"></i>
                                <p>
                                    ??????????????????
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../activity/activity-apply.php" class="nav-link">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>
                                    ????????????
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../travel-notes/travel-notes-list.php" class="nav-link">
                                <i class="nav-icon fas fa-bug"></i>
                                <p>
                                    ????????????
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../return_order/template.php" class="nav-link">
                                <i class="nav-icon far fa-envelope"></i>
                                <p>
                                    ??????????????????
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../app/views/admin/admin-status.php" class="nav-link">
                                <i class="nav-icon fas fa-exclamation-triangle"></i>
                                <p>
                                    ??????????????????

                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-plus-square"></i>
                                <p>
                                    ??????
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-search"></i>
                                <p>
                                    ??????
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
                    <!-- ?????????????????? -->

                    <!-- ?????? -->
                    <div class="row justify-content-center">
                        <div class="col">
                            <div class="card card-info">
                                <div class="card-header">
                                    <div class="row ">
                                        <div class="col-md-4">
                                            <h3>????????????</h3>
                                        </div>
                                        <div class="col-md-6"></div>
                                        <div class="col-md-2">
                                            <h3><?php if (isset($_GET["error"])) {
                                                    echo $_GET["error"];
                                                } ?></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body col-8">
                                    <form class="addForm mt-3" id="ac-info-add">
                                        <div class="form-group row">
                                            <label for="full_name" class="col-form-label text-md-right mr-2">????????????</label>
                                            <div class="">
                                                <input type="text" id="full_name" class="form-control" name="full_name" placeholder="?????????????????????" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="start" class=" col-form-label text-md-right mr-2">????????????</label>
                                            <div class="">
                                                <input class="form-control" type="date" value="2021-05-01" id="start" name="activity_date" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="limit" class="col-form-label text-md-right mr-2">????????????</label>
                                            <div class="">
                                                <input type="text" id="limit" class="form-control" placeholder="?????????????????????" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="location" class="col-form-label text-md-right mr-2">????????????</label>
                                            <div class="">
                                                <input type="text" class="form-control" id="location" name="phone_number" placeholder="???????????????" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="cost" class="col-form-label text-md-right mr-2">????????????</label>
                                            <div class="">
                                                <input type="text" id="cost" class="form-control" placeholder="?????????????????????" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="schedule" class="col-form-label text-md-right mr-2">????????????</label>
                                            <div class="">
                                                <textarea id="schedule" name="schedule" rows="5" cols="30" placeholder="???????????????"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row d-flex justify-content-end">
                                        <a href="activity-info.php" class="m-1 btn btn-secondary">??????</a>
                                        <button type="submit" class="m-1 btn btn-info submit">??????</button>
                                        </div>   
                                    </form>
                                </div>
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
    <!-- js-modules -->
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
       //??????????????????
    $('.addForm').on('click', '.submit', function() {
      let acname = $('#full_name').val();
      let schedule = $('#schedule').val();
      let location = $('#location').val();
      let start = $('#start').val();
      let lim = $('#limit').val();
      let cost = $('#cost').val();
      $.ajax({
          type: 'POST',
          url: "activity-info-add.php",
          data: {
            acname: acname,
            limit: lim,
            schedule: schedule,
            location: location,
            start: start,
            cost: cost
          },
          dataType: "json"
        })
        .done(function() {
            //location.href = 'activity-info.php';
        })
        .fail(function(error) {
          console.log(error)
        });
    });
    </script>
    <script>

    </script>
</body>

</html>