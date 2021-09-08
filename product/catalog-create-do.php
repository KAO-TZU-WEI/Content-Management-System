<?php
    require_once("pdo-connect-small.php");
     if( isset( $_POST["catalogName"]) )
     {
       
        $createName = $_POST["catalogName"];
        
        //檢查名稱是否已存在
        $sqlCheckCatalog="SELECT COUNT(*) AS 'Name'  FROM catalog WHERE catalog_name = ? LIMIT 1";
        $stmtCheck = $db_host->prepare($sqlCheckCatalog);
        $stmtCheck->execute([$createName]);
        $nameCount = $stmtCheck->fetch();
        if($nameCount["Name"]>0){
            header("location: catalog-create.php?msg=名稱重複");
        }else{
            try{
                $sqlCreateCatalog="INSERT  catalog( catalog_name ) VALUES( ?)";
                $stmtCreateCatalog=$db_host->prepare($sqlCreateCatalog);
                $stmtCreateCatalog->execute([$createName]);
                header("location: catalog-create.php?msg=新增成功");
            }catch(PDOException $ex){
                echo "fail". $ex;
            }
            
        }
     }else{
         header("location: catalog-create.php");
     }
