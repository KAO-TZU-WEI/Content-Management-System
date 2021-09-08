<?php
require_once './filter-danger-class.php';
require_once './db-class.php';
class Filter {
    public $conn;
    public $str;
    //connect db
    

    function filterWordAdmin($str='') {
            $db = new Mydb();
            $trans = new Msgfilter();
            $res = $trans->transdanger($str);  //轉譯結果
            if($str == '') {
                $filterOne = $db->select("SELECT * FROM admin");
                return $filterOne;
            }
            
            if($str == '一') {
                $filterOne = $db->select("SELECT * FROM admin WHERE rights LIKE '%1%'");
                return $filterOne;
            }
            if($str == '次') {
                $filterSecond = $db->select("SELECT * FROM admin WHERE rights LIKE '%2%'");
                return $filterSecond;
            }

            $filter_res = $db->select("SELECT * FROM admin WHERE username LIKE '%$str%'");
            return $filter_res;
            
    }
}


 

?>