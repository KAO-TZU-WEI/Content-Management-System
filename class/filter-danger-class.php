<?php

class Msgfilter {
     //filter html
    function transdanger($str) {
        $str = trim($str);
        if(PHP_VERSION >= 6 || !get_magic_quotes_gpc()) {

        $str = addslashes($str);
        }
        return htmlspecialchars($str);
    }
     
    

}



?>