<?php
    require_once "pdo-connect-small.php";
    $createName = $_POST["createName"];
    echo $createName;
    //檢查名稱是否已存在
    $sqlCheckName="SELECT COUNT(*) AS 'Amount'  FROM product WHERE product_name = ? LIMIT 1";
    $stmtDeleteItem = $db_host->prepare($sqlCheckName);
    $stmtDeleteItem->execute([$createName]);
    $nameCount = $stmtDeleteItem->fetch();
    echo $nameCount["Amount"];
    if($nameCount["Amount"]>0){
        header("location: product-create.php?error=名稱重複");
    }else{
        //新增到資料庫
    $createPrice=$_POST["createPrice"];
    $createCatalog=$_POST["createCatalog"];
    $createReserved=$_POST["createReserved"];
    $createText =$_POST["createText"];
    $sqlCreateProduct="INSERT INTO product(product_name, product_price, product_catalog, product_reserved, product_text) VALUE(?,?,?,?,?)  ";
    $stmtCreateProduct=$db_host->prepare($sqlCreateProduct);
    $stmtCreateProduct->execute([$createName,$createPrice,$createCatalog,$createReserved,$createText]);
    header("location: product-create.php?error=新增成功".$createName);
    }
    
?>