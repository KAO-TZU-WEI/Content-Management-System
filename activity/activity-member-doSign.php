<?php
session_start();
if (isset($_POST['name']) && isset($_POST['name'])) {
    require_once("db_connect.php");
    $name = $_POST['name'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM member WHERE member_account='$name' AND member_password='$password'";
    $result = $db_host->query($sql);

    if ($result->rowCount() > 0) {
        while ($row = $result->fetch()) {
            $_SESSION["user"]["id"] = $row['member_id'];
            $_SESSION["user"]["account"] = $row["member_account"];
            $_SESSION["user"]["name"] = $row["member_name"];
            $_SESSION["user"]["gender"] = $row["member_gender"];
            $_SESSION["user"]["birth"] = $row["member_birthday"];
            $_SESSION["user"]["phone"] = $row["member_phone"];
            $_SESSION["user"]["password"] = $row['member_password'];
            $_SESSION['user']['email'] = $row['member_email'];
            unset($_SESSION["error"]);
            //var_dump($_SESSION['user']);
            header ('location:activity-signup.php');
        }
    } else {
        $_SESSION["error"]["message"] = "您輸入的帳號或密碼錯誤";
        //var_dump($_SESSION['error']);
        header ('location:activity-member-signin.php');
    }
}