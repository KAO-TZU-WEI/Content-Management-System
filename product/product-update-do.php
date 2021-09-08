<?php
    require_once "pdo-connect-small.php";
    if(isset($_POST["updateId"]))
    {
        echo "has update Id";
    }else{
        header("location: product.php");
        exit();
    }
    $updateId=$_POST["updateId"];
    $updateName = $_POST["updateName"];
    $updatePrice=$_POST["updatePrice"];
    $updateCatalog=$_POST["updateCatalog"];
    $updateReserved=$_POST["updateReserved"];
    $updateText =$_POST["updateText"];

    //改名確認不會重複
    $sqlCheckName="SELECT COUNT(*) AS 'Amount'  FROM product  WHERE  product_name = ? AND NOT product_id = ? LIMIT 1";
    $stmtDeleteItem = $db_host->prepare($sqlCheckName);
    $stmtDeleteItem->execute([$updateName,$updateId]);
    $nameCount = $stmtDeleteItem->fetch();
    echo $nameCount["Amount"];
    if($nameCount["Amount"]>0){
        
        echo "重複";
        header("location: product-update.php?id=".$_POST["updateId"]."&error=名稱重複");
        exit();
    }

    
    try{
        $sqlUpdateProduct="UPDATE product SET product_name = ?, product_price = ?, product_catalog =?, product_reserved = ?, product_text = ? WHERE product_id = ?";
            $stmtUpdateProduct=$db_host->prepare($sqlUpdateProduct);
            $stmtUpdateProduct->execute([$updateName,$updatePrice,$updateCatalog,$updateReserved,$updateText, $updateId]);
    }catch(PDOException $e){
        echo "Pdo error";
    }

    
    header("location: product-update.php?id=".$_POST["updateId"]."&error=修改成功");
?>