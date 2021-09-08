<?php

class Mydb {
    public $conn;
    //connect db
    function __construct() {
        date_default_timezone_set("Asia/Taipei");
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "project";
        try {
            $this->conn = new PDO(
                "mysql:host={$servername};dbname={$dbname};charset=utf8", $username, $password
            );
        } catch (PDOException $e) {
            echo "資料庫連接失敗<br>";
            echo "Error: ".$e->getMessage();
            exit;
        }
    }

    //excute select table (relative arr)
    function select($sql,$res=2) {
        switch($res) {
            
            case 1:
            $stmt = $this->conn->prepare($sql);
            try {
                $array = array();
                $stmt->execute();
                while($row = $stmt->fetch()) {
                    $array = $row;
                };
                return $array;
                
            } catch (PDOException $e) {
                echo '資料庫查詢失敗<br>';
                echo "Error: ".$e->getMessage();
                
            }
            break;
            
            
            case 2:
            $stmt = $this->conn->prepare($sql);
            try {
                $array = array();
                $stmt->execute();
                while($row = $stmt->fetch()) {
                    $array[] = $row;
                };
                return $array;
                
            } catch (PDOException $e) {
                echo '資料庫查詢失敗<br>';
                echo "Error: ".$e->getMessage();
                
            }
            break;
        }

        
    }
    //excute 並返回影響行數 INSERT、UPDATE、DELETE
    function sql($sql) {
        try {
            return $this->conn->exec($sql);

        } catch (PDOException $e) {
            echo '資料庫執行失敗<br>';
            echo "Error: ".$e->getMessage();
            exit;
        }
    }

    //table to JSON
    function toJSON($table) {
        $stmt = $this->conn->prepare("SELECT * FROM $table");
        try {
            $array = array();
            $stmt->execute();
            while($row = $stmt->fetch()) {
                $array[] = $row;
            }                 
            $dataJson = json_encode($array);
            return $dataJson;
            
        } catch (PDOException $e) {
            echo '資料庫查詢失敗<br>';
            echo "Error: ".$e->getMessage();
            exit;
        }
    }

}



    




?>