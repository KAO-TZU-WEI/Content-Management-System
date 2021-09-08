<?php
  
  class AdminLogin {
    private $db;
    function __construct() {
        $this->db = new Mydb();
    }
      
    //判斷mysql裡有無這個用戶
    function isLogin($uid, $pwd) {
          
          $result = $this->db->select("SELECT * FROM admin WHERE username='$uid'",1);
          
          $state; //登入狀態
          $ip = $_SERVER['REMOTE_ADDR'];//取得ip
          if($result!=false) {
              //判斷pwd 有無錯誤
              //return 1; //account and pwd both of right
              if($result['password']!=$pwd) {
                $state = -1; //pwd 有誤
               } else {
                //寫入mysql  登入ip
                $this->db->sql("UPDATE admin SET loginsum=loginsum+1,ip='$ip' WHERE username='$uid'");
                $state = 1; //success
              }
              
           } else {
            $state = -2; //no account
          }

          $this->db->sql("INSERT INTO adminlog(username,password,addtime,ip,state) VALUES('$uid', '$pwd','".time()."','$ip','$state')");

          return $state;
          
      }
  }



?>