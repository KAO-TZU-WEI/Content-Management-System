<?php 
    include("connect.php");
    if(isset($_POST["action"])&&($_POST["action"]=="delete")){
        $sql_query = "DELETE  FROM return_order WHERE ID=?";
        $stmt = $conn -> prepare($sql_query);
        $stmt -> bind_param("i", $_POST["ID"]);
        $stmt -> execute();
        $stmt -> close();
        $conn -> close();
        //重新導向回主畫面
        header("Location: template.php");
    }
    $sql_select = "SELECT ID, OrderID, Name, telNumber, Email, Address, Reason, createTime FROM return_order WHERE ID = ?";
    $stmt = $conn -> prepare($sql_select);
    $stmt -> bind_param("i", $_GET["id"]);
    $stmt -> execute();
    $stmt -> bind_result($id, $orderid, $name, $telnumber, $email, $address, $reason, $createtime);
    $stmt -> fetch();
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
    <h1 align="center">退換貨管理系統 - 刪除資料</h1>
    <p align="center"><a href="template.php">回主畫面</a></p>
    <form action="" method="post" name="formDel" id="formDel">
        <table border="1" align="center" cellpadding="4">
            <tr>
                <th>欄位</th><th>資料</th>
            </tr>
            <tr>
                <td>訂單編號</td><td><?php echo $orderid;?></td>
            </tr>
            <tr>
                <td>姓名</td><td><?php echo $name;?></td>
            </tr>
            <tr>
                <td>電話</td><td><?php echo $telnumber;?></td>
            </tr>
            <tr>
                <td>email</td><td><?php echo $email;?></td>
            </tr>
            <tr>
                <td>地址</td><td><?php echo $address;?></td>
            </tr>
            <tr>
                <td>退貨原因</td><td><?php echo $reason;?></td>
            </tr>
            <tr>
                <td>退貨日期</td><td><?php echo $createtime;?></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                <input name="ID" type="hidden" value="<?php echo $id;?>">
                <input name="action" type="hidden" value="delete">
                <input type="submit" name="buttun" id="button" value="確定刪除這筆資料嗎？">
                </td>
            </tr>

        </table>

    </form>
    
</body>
</html>
<?php 
    $stmt -> close();
    $conn -> close();
?>