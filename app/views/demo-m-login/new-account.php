<?php


require_once '../../../class/db-class.php';


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
        background: white;
    }
    .content {
        background: white;
    }

    
    .form-switch {
      overflow: hidden;
    }
    .form-right {
      z-index: 5;
    }
    .card::-webkit-scrollbar {
    display: none;
  }
 
</style>


</head>



<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper" style="background: rgb(88,98,109);">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="margin: 0;">
            <!-- Main content -->
      <section class="content pt-3" style="margin: 0 auto;">
        <div class="container-fluid">
            <!--form-->
            <div class="form-wrapper">
            <div id="personal-form" class="row">
                <div class="col-md-6 mx-auto">
              <!-- general form elements -->
                 <div class="card card-primary" style="margin-top: 100px; height: 70vh; overflow-x: hidden;
    overflow-y: scroll;">
                    <div class="card-header">
                        <div class="row">
                          <div class="col-12">
                              <h3 class="card-title">加入會員</h3>
                          </div>
                          
                        </div>
                      
                      
                    </div>
                    <!-- /.card-header -->

                    <!-- form start -->
                    <div class="row h-100">
                       <div class="col-6 form-left d-flex justify-content-center align-items-center form-switch">
                         <!--form 1-->
                         
                         <form class="form-one" action="" method="post">
                           
                          
                            <div >
                                <div class="form-group">
                                  <label for="name">真實姓名 :</label>
                                  <input type="text" class="form-control name" name="name" id="name" required/>
                                  <div class="check-name" style="color: red; font-size: 0.5rem;"></div>
                                </div>
                              

                          

                                  <div class="form-group">
                                    <label for="account">會員帳號 :</label>
                                    <input type="text" class="form-control account" name="account" id="account" required>
                                    <div class="check-account" style="color: red; font-size: 0.5rem;"></div>
                                  </div>
                                  <div class="form-group">
                                    <label for="password">會員密碼 :</label>
                                    <input type="password" class="form-control password" name="password" id="password">
                                    <div class="check-pwd" style="color: red; font-size: 0.5rem;"></div>
                                  </div>
                                  <div class="form-group">
                                    <label for="repassword">確認密碼 :</label>
                                    <input type="password" class="form-control repassword" name="repassword" id="password">
                                    <span class="re-check" style="color: red; font-size: 0.5rem;"></span>
                                  </div>
                                  
                                  

                                  <button type="button" class="btn btn-primary float-right float-right-btn" style="padding: 5px 15px;">繼續</button>
                              
                              
                              
                              
                              </div>
                           </form>



                          <!--form 1-->
                              
 
                            <!--form 2-->
                            <form id="form-2" class="form-two d-none">
                               <div >
                                <div class="form-group">
                                    <label for="name">電話號碼 :</label>
                                    <input type="text" class="form-control inputphone" id="name" />
                                    <div class="check-phone" style="color: red; font-size: 0.3rem;"></div>
                                  </div>
                                

                            

                                    <div class="form-group">
                                      <label for="account">E-mail :</label>
                                      <input type="text" class="form-control inputemail" id="account">
                                      <div class="check-email" style="color: red; font-size: 0.3rem;"></div>
                                    </div>
                                    <div class="form-group">
                                      <label for="password">生日 :</label>
                                      <input type="date" class="form-control birthday" name="birthday" id="password">
                                      <div class="check-birthday" style="color: red; font-size: 0.3rem;"></div>
                                    </div>
                                    <div class="form-group">
                                      <label for="" class="d-block">性別 :</label>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input radio-sex1" type="radio" name="sex" id="inlineRadio1" value="1">
                                          <label class="form-check-label" for="inlineRadio1">男</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input radio-sex2" type="radio" name="sex" id="inlineRadio2" value="2">
                                          <label class="form-check-label" for="inlineRadio2">女</label>
                                        </div>
                                        <div class="check-sex" style="color: red; font-size: 0.3rem;"></div>
                                      </div>
                                      
                                      <div class="form-group">
                                        <label for="address">地址 :</label>
                                        <input type="text" class="form-control address" name="address" id="address">
                                        <div class="check-address" style="color: red; font-size: 0.3rem;"></div>
                                      </div>

                                      <div class="form-group">
                                        <label for="" class="d-block">會員等級 :</label>
                                          <div class="form-check form-check-inline">
                                              <input class="form-check-input radio-level1" type="radio" name="member" id="inlineRadio1" value="1">
                                              <label class="form-check-label" for="inlineRadio1">付費會員 </label><span class="text-muted small">-------- 了解詳情</span>
                                            </div>
                                            <div></div>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input radio-level2" type="radio" name="member" id="inlineRadio2" value="2">
                                              <label class="form-check-label" for="inlineRadio2">一般會員</label><span class="text-muted small">-------- (免費)</span>
                                            </div>
                                            <div></div>
                                            <div class="check-member" style="color: red; font-size: 0.3rem;"></div>
                                        </div>
                                    
                                      <div class="form-group">
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                          同意隱私權與條款
                                        </label>
                                      </div>
                                      
                                      
                                      </div>
                                    <button class="btn btn-light float-left back-btn">返回</button>
                                    <button type="button" class="btn btn-primary float-right agree" style="padding: 5px 15px;">我同意</button>
                               
                                 
                                

                            
                          </div>
                        </form>

                            
                            <!--form 2-->
                            
                           
                    
                    

                          
                        
                          
                        </div>
                    
                    
                              <div class="col-6 d-flex justify-content-center align-items-center form-right">
                                <!--form 2-->
                                
                                <figure>
                                    <img src="https://privacy.google.com/businesses/static/svg/animations/compliance01-last-frame.svg?cache=63160b8" alt="">
                                
                                </figure>
                              
                              </div>
                  </div>
                </div>
                    
                       
                

                
              
            </div>
          </div>
          </div>
            <!--form-wrapper-->
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
<script src="../../../node_modules/admin-lte/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../../node_modules/admin-lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../node_modules/admin-lte/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../node_modules/admin-lte/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../../node_modules/admin-lte/dist/js/pages/dashboard.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>




$(function() {
  $('.float-right-btn').click(function() {
    //step1
    let name = $('.name').val();
    let account = $('.account').val();
    let pwd = $('.password').val();
    let repwd = $('.repassword').val();
    

    if(name == '') {
       $('.check-name').text('請填寫姓名');
       return;
    }
    if(account == '') {
       $('.check-account').text('請填寫帳號');
       return;
    }
    if(pwd == '') {
       $('.check-pwd').text('請填寫密碼');
       return;
    }
    if(pwd != repwd) {
      $('.re-check').text('密碼不一致');
      return;
    } else {
        $.ajax({
        method: "POST",
        url: "../../controllers/check-newmember.php",
        dataType: "json"
       })
       .done((data) => {
         console.log(data);
         let existAccount = [];
         for(i=0;i<data.length;i++) {
           existAccount.push(data[i].member_account);
         }
         console.log(existAccount);
         if(!existAccount.includes(account)) {
            //account no repeat and insert to mysql
            console.log('not exist');
            $.ajax({
              method: "POST",
              data: {
                name: name,
                account: account,
                pwd: pwd
              },
              url: "../../models/create-member.php",
              dataType: "json"
            })
            .done((data) => {
              console.log(data);
              //switch
              $('.form-one').addClass('d-none');
              $('.form-two').removeClass('d-none');
              

            })
         } else {
          $('.check-account').text('會員已存在');
          
         }
       })
       .fail((err) => {
         console.log(err);
       })


      
    }
                 
    //----------------------------------------------------------------------------------------------
    $('.agree').click(function() {
    //next step
      let phone = $('.inputphone').val();
      
      let email = $('.inputemail').val();
      let birthday = $('.birthday').val();
      let address = $('.address').val();
      //radio-sex
      let radioState1 = $('.radio-sex1').is(":checked");
      let radioState2 = $('.radio-sex2').is(":checked");
      let radioStatusSex;
      if(radioState1 == false && radioState2 == false) {
        $('.check-sex').text('請選擇');
      } else if(radioState1==true) {
        radioStatusSex = '1';
      } else if(radioState2==true) {
        radioStatusSex = '2';
      } else {
        console.log('no result');
      }

      //member level
      
      let radioStatelev = $('.radio-level1').is(":checked");
      let radioStatelev2 = $('.radio-level2').is(":checked");
      let radioStatusLevel;

      
      if(radioStatelev == false && radioStatelev2 == false) {
        $('.check-member').text('請選擇');
      } else if(radioStatelev==true) {
        radioStatusLevel = '1';
      } else if(radioStatelev2==true) {
        radioStatusLevel = '2';
      } else {
        console.log('no result');
      }

      if(phone == '') {
        $('.check-phone').text('請填寫電話');
        return;
      }
      if(email == '') {
        $('.check-email').text('請填寫email');
        return;
      }
      
      if(address == '') {
        $('.check-address').text('請填寫地址');
        return;
      }


      console.log(phone,email,birthday,radioStatusSex,address,radioStatusLevel,name);

      $.ajax({
        method: "POST",
        data: {
        phone: phone,
        email: email,
        birthday: birthday,
        radioStatusSex: radioStatusSex,
        address: address,
        radioStatusLevel: radioStatusLevel,
        },
        url: "../../models/craete-member-step2.php",
        dataType: "json"
      })
      .done((data) => {
        console.log(data);
        Swal.fire(
          '恭喜',
          '加入會員成功,3秒鐘將回首頁',
          'success'
         )
        setTimeout(() => {
          location.href='./destroy-session.php';
        }, 3000);
      })
      .fail((err) => {
        console.log(err);
      })
    })            
    
  })
})
 
$(function() {
  $('.back-btn').click(function() {
    $('.form-two').addClass('d-none');
    $('.form-one').removeClass('d-none');
  })
})
//下一步驗證
$(function() {
  
                
})


</script>


</body>





</html>