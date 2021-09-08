<?php
    if(isset($_POST["action"])&&($_POST["action"]=="add")){
        include("connect.php");
    $sql_query = "INSERT INTO return_order (OrderID, Name, telNumber, Email, Address, Reason, createTime) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn -> prepare($sql_query);
    $stmt -> bind_param("isissss", $_POST["OrderID"], $_POST["Name"], $_POST["telNumber"], $_POST["Email"], $_POST["Address"], $_POST["Reason"], $_POST["createTime"]);
    $stmt -> execute();
    $stmt -> close();
    $conn -> close();
    header("Location: template.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>退換貨管理系統</title>
</head>
<body>
    <h1 align="center">退換貨管理系統 - 新增資料</h1>
    <p align="center"><a href="template.php">回主畫面</a></p>
    <form action="" method="post" name="formAdd" id="formAdd">
        <table border="1" align="center" cellpadding="4">
            <tr>
                <th>欄位</th> <th>資料</th>
            </tr>
            <tr>
                <td>訂單編號</td><td><input type="text" name="OrderID" id="OrderID"></td>
            </tr>
            <tr>
                <td>姓名</td><td><input type="text" name="Name" id="Name"></td>
            </tr>
            <tr>
                <td>電話</td><td><input type="text" name="telNumber" id="telNumber"></td>
            </tr>
            <tr>
                <td>email</td><td><input type="text" name="Email" id="Email"></td>
            </tr>
            <tr>
                <td>地址</td><td><input type="text" name="Address" id="Address" size="40"></td>
            </tr>
            <tr>
                <td>退貨原因</td><td><input type="text" name="Reason" id="Reason" size="100"></td>
            </tr>
            <tr>
                <td>退貨日期</td><td><input type="date" name="createTime" id="createTime"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                <input name="action" type="hidden" value="add">
                <input type="submit" name="button" value="新增資料">
                <input type="reset" name="button2" value="重新填寫">
                </td>
            </tr>



        </table>
</form>
</body>
</html>