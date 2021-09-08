<?php
require_once "pdo-connect-small.php";
if(isset($_POST["deleteItemId"])){
    $deleteItemId =$_POST["deleteItemId"];
    echo"get $deleteItemId";
    //UPDATE
    
    try
    {
        $sql="UPDATE product SET product_state = ? WHERE product_id = ? ";
        $stmtDeleteItem = $db_host->prepare($sql);
        $stmtDeleteItem->execute([1,$deleteItemId]);
        echo"seccuss";
        header("location: product.php");
        
    }catch(Exception $e)
    {
        echo "error";
    }
    

}else{
    header("location: product.php");
}
?>
