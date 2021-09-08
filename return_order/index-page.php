<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>網頁分析</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./node_modules/admin-lte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="./node_modules/admin-lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="./node_modules/admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="./node_modules/admin-lte/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./node_modules/admin-lte/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="./node_modules/admin-lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="./node_modules/admin-lte/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="./node_modules/admin-lte/plugins/summernote/summernote-bs4.min.css">
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
    <img class="animation__shake" src="./node_modules/admin-lte/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar  -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">首頁</a>
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
              <img src="./image/user.png" alt="User Avatar" class="img-size-50 mr-3 img-circle">
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
              <img src="./image/user.png" alt="User Avatar" class="img-size-50 img-circle mr-3">
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
              <img src="./image/user.png" alt="User Avatar" class="img-size-50 img-circle mr-3">
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
      <img src="./node_modules/admin-lte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">logo</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="./image/user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">某某某</a>
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
            <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-chart-bar"></i>
              <p>
                網頁分析
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user-tie"></i>
              <p>
                管理員資訊
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-file-alt"></i>
              <p>
                訂單明細
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-store"></i>
              <p>
                商品管理
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
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
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-info"></i>
              <p>
                活動資訊管理
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                活動報名
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-bug"></i>
              <p>
                旅遊札記
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                客訴管理中心
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
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
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>150</h3>
  
                  <p>新訂單</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">更多資訊 <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>53<sup style="font-size: 20px">%</sup></h3>
  
                  <p>跳出率</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">更多資訊 <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>44</h3>
  
                  <p>加入的會員</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">更多資訊<i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>65</h3>
  
                  <p>欲參加活動通知</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">更多資訊 <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-chart-pie mr-1"></i>
                    網站流量
                  </h3>
                  <div class="card-tools">
                    <ul class="nav nav-pills ml-auto">
                      <li class="nav-item">
                        <a class="nav-link active" href="#revenue-chart" data-toggle="tab">區域</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#sales-chart" data-toggle="tab">分析</a>
                      </li>
                    </ul>
                  </div>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content p-0">
                    <!-- Morris chart - Sales -->
                    <div class="chart tab-pane active" id="revenue-chart"
                         style="position: relative; height: 300px;">
                        <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                     </div>
                    <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                      <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                    </div>
                  </div>
                </div><!-- /.card-body -->
              </div>
              <!-- /.card -->
  
              <!-- DIRECT CHAT -->
              <div class="card direct-chat direct-chat-primary">
                <div class="card-header">
                  <h3 class="card-title">員工聊天室</h3>
  
                  <div class="card-tools">
                    <span title="3 New Messages" class="badge badge-primary">3</span>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                      <i class="fas fa-comments"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <!-- Conversations are loaded here -->
                  <div class="direct-chat-messages">
                    <!-- Message. Default to the left -->
                    <div class="direct-chat-msg">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-left">Alexander Pierce</span>
                        <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                      </div>
                      <!-- /.direct-chat-infos -->
                      <img class="direct-chat-img" src="./image/user.png" alt="message user image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        Is this template really for free? That's unbelievable!
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->
  
                    <!-- Message to the right -->
                    <div class="direct-chat-msg right">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-right">Sarah Bullock</span>
                        <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                      </div>
                      <!-- /.direct-chat-infos -->
                      <img class="direct-chat-img" src="./image/user.png" alt="message user image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        你在幹麻
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->
  
                    <!-- Message. Default to the left -->
                    <div class="direct-chat-msg">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-left">Alexander Pierce</span>
                        <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                      </div>
                      <!-- /.direct-chat-infos -->
                      <img class="direct-chat-img" src="./image/user.png" alt="message user image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        我在工作
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->
  
                    <!-- Message to the right -->
                    <div class="direct-chat-msg right">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-right">Sarah Bullock</span>
                        <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                      </div>
                      <!-- /.direct-chat-infos -->
                      <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        加油
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->
  
                  </div>
                  <!--/.direct-chat-messages-->
  
                  <!-- Contacts are loaded here -->
                  <div class="direct-chat-contacts">
                    <ul class="contacts-list">
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="./image/user.png" alt="User Avatar">
  
                          <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              某某某
                              <small class="contacts-list-date float-right">2/28/2015</small>
                            </span>
                            <span class="contacts-list-msg">你在幹麻</span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="./image/user.png" alt="User Avatar">
  
                          <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              Sarah Doe
                              <small class="contacts-list-date float-right">2/23/2015</small>
                            </span>
                            <span class="contacts-list-msg">你在幹麻</span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="./image/user.png" alt="User Avatar">
  
                          <div class="contacts-list-info">
                            <span class="contacts-list-name">
                                某某某
                              <small class="contacts-list-date float-right">2/20/2015</small>
                            </span>
                            <span class="contacts-list-msg">你在幹麻</span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="./image/user.png" alt="User Avatar">
  
                          <div class="contacts-list-info">
                            <span class="contacts-list-name">
                                某某某
                              <small class="contacts-list-date float-right">2/10/2015</small>
                            </span>
                            <span class="contacts-list-msg">你在幹麻</span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="./image/user.png" alt="User Avatar">
  
                          <div class="contacts-list-info">
                            <span class="contacts-list-name">
                                某某某
                              <small class="contacts-list-date float-right">1/27/2015</small>
                            </span>
                            <span class="contacts-list-msg">你在幹麻</span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="./image/user.png" alt="User Avatar">
  
                          <div class="contacts-list-info">
                            <span class="contacts-list-name">
                                某某某
                              <small class="contacts-list-date float-right">1/4/2015</small>
                            </span>
                            <span class="contacts-list-msg">你在幹麻</span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                    </ul>
                    <!-- /.contacts-list -->
                  </div>
                  <!-- /.direct-chat-pane -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <form action="#" method="post">
                    <div class="input-group">
                      <input type="text" name="message" placeholder="請輸入訊息" ..." class="form-control">
                      <span class="input-group-append">
                        <button type="button" class="btn btn-primary">發送</button>
                      </span>
                    </div>
                  </form>
                </div>
                <!-- /.card-footer-->
              </div>
              <!--/.direct-chat -->
  
              <!-- TO DO List -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="ion ion-clipboard mr-1"></i>
                    代辦事項
                  </h3>
  
                  <div class="card-tools">
                    <ul class="pagination pagination-sm">
                      <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                      <li class="page-item"><a href="#" class="page-link">1</a></li>
                      <li class="page-item"><a href="#" class="page-link">2</a></li>
                      <li class="page-item"><a href="#" class="page-link">3</a></li>
                      <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                    </ul>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <ul class="todo-list" data-widget="todo-list">
                    <li>
                      <!-- drag handle -->
                      <span class="handle">
                        <i class="fas fa-ellipsis-v"></i>
                        <i class="fas fa-ellipsis-v"></i>
                      </span>
                      <!-- checkbox -->
                      <div  class="icheck-primary d-inline ml-2">
                        <input type="checkbox" value="" name="todo1" id="todoCheck1">
                        <label for="todoCheck1"></label>
                      </div>
                      <!-- todo text -->
                      <span class="text">發想一個主題</span>
                      <!-- Emphasis label -->
                      <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
                      <!-- General tools such as edit or delete-->
                      <div class="tools">
                        <i class="fas fa-edit"></i>
                        <i class="fas fa-trash-o"></i>
                      </div>
                    </li>
                    <li>
                      <span class="handle">
                        <i class="fas fa-ellipsis-v"></i>
                        <i class="fas fa-ellipsis-v"></i>
                      </span>
                      <div  class="icheck-primary d-inline ml-2">
                        <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>
                        <label for="todoCheck2"></label>
                      </div>
                      <span class="text">處理客戶</span>
                      <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
                      <div class="tools">
                        <i class="fas fa-edit"></i>
                        <i class="fas fa-trash-o"></i>
                      </div>
                    </li>
                    <li>
                      <span class="handle">
                        <i class="fas fa-ellipsis-v"></i>
                        <i class="fas fa-ellipsis-v"></i>
                      </span>
                      <div  class="icheck-primary d-inline ml-2">
                        <input type="checkbox" value="" name="todo3" id="todoCheck3">
                        <label for="todoCheck3"></label>
                      </div>
                      <span class="text">發布一個新聞</span>
                      <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
                      <div class="tools">
                        <i class="fas fa-edit"></i>
                        <i class="fas fa-trash-o"></i>
                      </div>
                    </li>
                    <li>
                      <span class="handle">
                        <i class="fas fa-ellipsis-v"></i>
                        <i class="fas fa-ellipsis-v"></i>
                      </span>
                      <div  class="icheck-primary d-inline ml-2">
                        <input type="checkbox" value="" name="todo4" id="todoCheck4">
                        <label for="todoCheck4"></label>
                      </div>
                      <span class="text">版本更新</span>
                      <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
                      <div class="tools">
                        <i class="fas fa-edit"></i>
                        <i class="fas fa-trash-o"></i>
                      </div>
                    </li>
                    <li>
                      <span class="handle">
                        <i class="fas fa-ellipsis-v"></i>
                        <i class="fas fa-ellipsis-v"></i>
                      </span>
                      <div  class="icheck-primary d-inline ml-2">
                        <input type="checkbox" value="" name="todo5" id="todoCheck5">
                        <label for="todoCheck5"></label>
                      </div>
                      <span class="text">確認每個客戶需求</span>
                      <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>
                      <div class="tools">
                        <i class="fas fa-edit"></i>
                        <i class="fas fa-trash-o"></i>
                      </div>
                    </li>
                    <li>
                      <span class="handle">
                        <i class="fas fa-ellipsis-v"></i>
                        <i class="fas fa-ellipsis-v"></i>
                      </span>
                      <div  class="icheck-primary d-inline ml-2">
                        <input type="checkbox" value="" name="todo6" id="todoCheck6">
                        <label for="todoCheck6"></label>
                      </div>
                      <span class="text">辦新活動</span>
                      <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>
                      <div class="tools">
                        <i class="fas fa-edit"></i>
                        <i class="fas fa-trash-o"></i>
                      </div>
                    </li>
                  </ul>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> 新增代辦事項</button>
                </div>
              </div>
              <!-- /.card -->
            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">
  
              <!-- Map card -->
              <div class="card bg-gradient-light">
                <div class="card-header border-0">
                    <h3 class="card-title">
                      各裝置使用率分析
                    </h3>
                    <!-- card tools -->
                    <div class="card-tools">
                      <button type="button" class="btn btn-secondary btn-sm daterange" title="Date range">
                        <i class="far fa-calendar-alt"></i>
                      </button>
                      <button type="button" class="btn btn-secondary btn-sm" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                    </div>
                    <!-- /.card-tools -->
                  </div>
                  <div class="card-body">
                    <div id="" style="height: 250px; width: 100%;">
                        
                            <!-- /.card-header -->
                            
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th style="width: 10px">#</th>
                                    <th>裝置</th>
                                    <th>條狀分析</th>
                                    <th style="width: 40px">使用率</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1.</td>
                                    <td>ios</td>
                                    <td>
                                      <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                      </div>
                                    </td>
                                    <td><span class="badge bg-danger">55%</span></td>
                                  </tr>
                                  <tr>
                                    <td>2.</td>
                                    <td>Android</td>
                                    <td>
                                      <div class="progress progress-xs">
                                        <div class="progress-bar bg-warning" style="width: 70%"></div>
                                      </div>
                                    </td>
                                    <td><span class="badge bg-warning">70%</span></td>
                                  </tr>
                                  <tr>
                                    <td>3.</td>
                                    <td>電腦</td>
                                    <td>
                                      <div class="progress progress-xs">
                                        <div class="progress-bar bg-danger" style="width: 20%"></div>
                                      </div>
                                    </td>
                                    <td><span class="badge bg-warning">70%</span></td>
                                  </tr>
                                  <tr>
                                    <td>4.</td>
                                    <td>其他</td>
                                    <td>
                                      <div class="progress progress-xs progress-striped active">
                                        <div class="progress-bar bg-success" style="width: 90%"></div>
                                      </div>
                                    </td>
                                    <td><span class="badge bg-success">90%</span></td>
                                  </tr>
                                </tbody>
                              </table>
                            
                            <!-- /.card-body -->
                          
                    
                    </div>
                  </div>
                  <!-- /.card-body-->
                  <div class="card-footer bg-transparent">
                    <div class="row">
                      <div class="col-4 text-center">
                        <div id="sparkline-1"></div>
                        <div class="text-white">訪客</div>
                      </div>
                      <!-- ./col -->
                      <div class="col-4 text-center">
                        <div id="sparkline-2"></div>
                        <div class="text-white">網路</div>
                      </div>
                      <!-- ./col -->
                      <div class="col-4 text-center">
                        <div id="sparkline-3"></div>
                        <div class="text-white">國家</div>
                      </div>
                      <!-- ./col -->
                    </div>
                    <!-- /.row -->
                  </div>
              </div>
              <!-- /.card -->
  
              <!-- solid sales graph -->
              <div class="card bg-gradient-info">
                <div class="card-header border-0">
                  <h3 class="card-title">
                    <i class="fas fa-th mr-1"></i>
                    銷售量
                  </h3>
  
                  <div class="card-tools">
                    <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <canvas class="chart" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
                <!-- /.card-body -->
                <div class="card-footer bg-transparent">
                  <div class="row">
                    <div class="col-4 text-center">
                      <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"
                             data-fgColor="#39CCCC">
  
                      <div class="text-white">Mail訂單</div>
                    </div>
                    <!-- ./col -->
                    <div class="col-4 text-center">
                      <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"
                             data-fgColor="#39CCCC">
  
                      <div class="text-white">網際網路</div>
                    </div>
                    <!-- ./col -->
                    <div class="col-4 text-center">
                      <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"
                             data-fgColor="#39CCCC">
  
                      <div class="text-white">臨櫃</div>
                    </div>
                    <!-- ./col -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.card-footer -->
              </div>
              <!-- /.card -->
  
              <!-- Calendar -->
              <div class="card bg-gradient-success">
                <div class="card-header border-0">
  
                  <h3 class="card-title">
                    <i class="far fa-calendar-alt"></i>
                    日曆
                  </h3>
                  <!-- tools card -->
                  <div class="card-tools">
                    <!-- button with a dropdown -->
                    <div class="btn-group">
                      <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                        <i class="fas fa-bars"></i>
                      </button>
                      <div class="dropdown-menu" role="menu">
                        <a href="#" class="dropdown-item">新增事件</a>
                        <a href="#" class="dropdown-item">清除事件</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">查看日曆</a>
                      </div>
                    </div>
                    <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                  <!-- /. tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body pt-0">
                  <!--The calendar -->
                  <div id="calendar" style="width: 100%"></div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </section>
            <!-- right col -->
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>

    </div>
</div>




<!-- jQuery -->
<script src="./node_modules/admin-lte/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="./node_modules/admin-lte/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="./node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="./node_modules/admin-lte/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="./node_modules/admin-lte/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="./node_modules/admin-lte/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="./node_modules/admin-lte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="./node_modules/admin-lte/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="./node_modules/admin-lte/plugins/moment/moment.min.js"></script>
<script src="./node_modules/admin-lte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="./node_modules/admin-lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="./node_modules/admin-lte/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="./node_modules/admin-lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="./node_modules/admin-lte/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./node_modules/admin-lte/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="./node_modules/admin-lte/dist/js/pages/dashboard.js"></script>
</body>
</html>