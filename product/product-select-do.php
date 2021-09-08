<?php
    // $resData = array(
    //     "catalog"=>$_GET["catalog"],
    //     "minPrice"=>$_GET["minPrice"],
    //     "maxPrice"=>$_GET["maxPrice"],
    //     "minReserved"=>$_GET["minReserved"],
    // );
    // echo json_encode($resData);
    $strCatalog="";
    $MinPrice=0;
    $MaxPrice=99999;
    $strPrice="";
    $MinReserved=0;
    $strReserved="";
    if(isset($_GET["catalog"]) ){
      if($_GET["catalog"]!=-1){
         $strCatalog=" AND product.product_catalog = ".$_GET["catalog"]." ";
      }
    }
    if(isset($_GET["minPrice"]) || isset($_GET["maxPrice"]) ){
      if(isset($_GET["minPrice"]) && !empty($_GET["minPrice"])){ 
        $MinPrice =($_GET["minPrice"]); 
        $strPrice=$strPrice. " AND product.product_price >= ".$MinPrice;
      }
      if(isset($_GET["maxPrice"]) && !empty($_GET["maxPrice"])){
         $MaxPrice =($_GET["maxPrice"]); 
         $strPrice=$strPrice." AND product.product_price <= ".$MaxPrice;
        }
      // $strPrice=" AND product.product_price >= ".$MinPrice." AND product.product_price <= ".$MaxPrice." ";
      // if( $MinPrice!="" && $MaxPrice!=null){
      //   $strPrice=" AND product.product_price BETWEEN ".$MinPrice. " AND ".$MaxPrice." ";
      // }
       
    }
    if(isset($_GET["minReserved"]) && !empty($_GET["minReserved"])  ){
      $MinReserved=$_GET["minReserved"];
      
        $strReserved=" AND product.product_reserved >= ".$MinReserved." ";
      
    }
   
    require_once("pdo-connect-small.php");
    $sqlSelect = "SELECT * FROM product  JOIN catalog ON product.product_catalog = catalog.catolog_id WHERE product.product_state =0 ".$strCatalog.$strPrice.$strReserved;
    $stmtProduct = $db_host->prepare($sqlSelect);
    $stmtProduct->execute();

    $resData = array();
    while ($row = $stmtProduct->fetch()) {
      
          $rowData = array(
            "product_id"=>$row["product_id"],
            "product_name"=>$row["product_name"],
            "product_price"=>$row["product_price"],
            "product_catalog"=>$row["catalog_name"],
             "product_reserved"=>$row["product_reserved"]
          );
          array_push( $resData , $rowData);
      
    }
    echo json_encode($resData);
?>