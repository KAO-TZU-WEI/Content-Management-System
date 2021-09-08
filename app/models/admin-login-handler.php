<?php

class Adminlogin {
    private $db;
    function __construct() {
        $this->db = new Mydb();
    }


    function isLogin($account, $pwd) {
        $result = $this->db->select("SELECT * FROM admin WHERE account='$account'",1);

        $state=0; //登入狀態78tfdxz
        
        $ip = $_SERVER['REMOTE_ADDR'];//取得ip
        $time = time();
        if($result != false) {

            if($result['password'] != $pwd) {
                $state = -1; //-1 password false
                
            } else {
                //寫入mysql  登入ip
                $this->db->sql("UPDATE admin SET loginsum=loginsum+1,ip='$ip' WHERE account='$account'");
                $state = 1;
            }

        } else {
            $state = -2; //account false
        }
        $this->db->sql("INSERT INTO adminlog(account,password,logintime,ip,state) VALUES('$account', '$pwd','$time','$ip','$state')");
        return $state;
    }
}





?>