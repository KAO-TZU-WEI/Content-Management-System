<?php
  require_once '../../class/db-class.php';
  require_once '../../class/filter-danger-class.php';
  $id = $_GET['id'];
  
  $db = new Mydb();
  
  $res = $db->select("SELECT * FROM member WHERE member_id='$id'");
  foreach($res as $row) {
      $name = $row['member_name'];
      $sex = $row['member_gender'];
      $birthday = $row['member_birthday'];
      $account = $row['member_account'];
      $password = $row['member_password'];
      $level = $row['member_level'];
      $email = $row['member_email'];
      $address = $row['member_address'];
      $phone = $row['member_phone'];
      $loginip = $row['loginip'];
      
  }

  

  $data = array(
      "name" => $name,
      "sex" => $sex,
      "birthday" => $birthday,
      "account" => $account,
      "password" => $password,
      "level" => $level,
      "email" => $email,
      "address" => $address,
      "phone" => $phone,
      "loginip" => $loginip,
  );


  echo json_encode($data);
  

  
?>