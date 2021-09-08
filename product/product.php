<?php
require_once "pdo-connect-small.php";
require_once '../app/controllers/isLoadingFromViewsOthers.php';
$username = $_SESSION['username'];
$stmtCat = $db_host->prepare("SELECT * FROM catalog ");
$sqlSelect = "SELECT * FROM product";
// 抓出分類表
try {
    $stmtCat->execute();
    while ($rowCate = $stmtCat->fetch()) {
        $catagoryId[$rowCate["catolog_id"]] = $rowCate["catolog_id"];
        $catagoryName[$rowCate["catolog_id"]] = $rowCate["catalog_name"];
    }
} catch (PDOException $e) {
    echo "產品分類失敗<br>";
    echo "Error: " . $e->getMessage();
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>商品管理</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../node_modules/admin-lte/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../node_modules/admin-lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../node_modules/admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../node_modules/admin-lte/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../node_modules/admin-lte/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../node_modules/admin-lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../node_modules/admin-lte/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../node_modules/admin-lte/plugins/summernote/summernote-bs4.min.css">
    <style>
        /* body {
            color: #c2c7d0;
        } */

        .content-wrapper {
            background: #58626d;
        }

        .content {
            background: #58626d;
        }
    </style>


</head>



<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- layout -->
        <?php require_once("layout.php") ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content pt-3">
                <div class="container-fluid">
                    <!-- 內容這裡開始 -->

                    <!-- 圖表 -->
                    <div class="row">


                        <div class="col-md-12">
                            <div class="card p-2">
                                <div class="card-header">
                                    <div class="row ">
                                        <div class="col-m-4">
                                            <h2>商品管理</h2>
                                        </div>

                                    </div>
                                    <div class="card-body">
                                        <div class="row">

                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-2"><span class="input-group-text my-2">分類</span></div>
                                                    <div class="col-3"><span class="input-group-text my-2">最小價格</span></div>
                                                    <div class="col-3"><span class="input-group-text my-2">最大價格</span></div>
                                                    <div class="col-3"><span class="input-group-text fs-4 my-2">庫存以上</span></div>
                                                    <div class="col-1" style="margin-top: 8px;"><button id="filter" class="btn btn-secondary btn-block">篩選</button></div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-2">
                                                        <select class="form-control my-2" id="filterCatalog" name="page-option">
                                                            <option value="-1"> none </option>
                                                            <?php
                                                            foreach ($catagoryId as $catIdItem) {
                                                            ?>
                                                                <option value="<?= $catIdItem ?>"><?= $catagoryName[$catIdItem] ?></option>
                                                            <?php
                                                            }
                                                            ?>

                                                        </select>
                                                    </div>
                                                    <div class="col-3"><input class="form-control my-2" type="number" name="low-limit" id="filterMinPrice"></div>
                                                    <div class="col-3"><input class="form-control my-2" type="number" name="up-limit" id="filterMaxPrice"></div>
                                                    <div class="col-3"><input class="form-control my-2" type="number" name="reserved" id="filterMinReserved"></div>
                                                    <div class="col-1" style="margin-top: 8px;"><button id="filter" class="btn btn-secondary btn-block">
                                                            <a href="catalog-create.php" style="text-decoration: none;color: white;">新分類</a>
                                                        </button></div>

                                                </div>

                                            </div>











                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-bordered table-hover">
                                    <thead class="table-info">
                                        <tr>
                                            <th><input type="checkbox"></th>
                                            <th scope="col">商品編號</th>
                                            <th scope="col">商品名稱</th>
                                            <th scope="col">商品售價</th>
                                            <th scope="col">商品分類</th>
                                            <th scope="col">商品庫存</th>
                                            <th scope="col">操作</th>

                                        </tr>
                                    </thead>

                                    <tbody id="productTbody">
                                        <?php
                                        $stmtProduct = $db_host->prepare($sqlSelect);
                                        $stmtProduct->execute();
                                        while ($row = $stmtProduct->fetch()) {
                                            if ($row["product_state"] == 0) {
                                        ?>
                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                    <td><?= $row["product_id"] ?></td>

                                                    <td><?= $row["product_name"] ?></td>
                                                    <td><?= $row["product_price"] ?></td>
                                                    <td><?= $catagoryName[$row["product_catalog"]] ?></td>
                                                    <td><?= $row["product_reserved"] ?></td>
                                                    <td><a href="product-update.php?id=<?= $row["product_id"] ?>" class="btn btn-app bg-info"><i class="fas fa-edit"></i>檢視</a>
                                                        <a href="product-delete.php?id=<?= $row["product_id"] ?>" class="btn btn-app bg-danger"><i class="fas fa-trash-alt"></i>刪除</a>
                                                    </td>

                                                </tr>
                                        <?php
                                            }
                                        }
                                        ?>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                            <td>
                                                <a href="product-create.php" class="btn btn-app bg-secondary"><i class="far fa-plus-square"></i>新增</a>


                                            </td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>

        </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    </div>
    </div>




    <!-- js-modules -->
    <?php require_once("js-module.php") ?>

    <script>
        let btnFilter = document.querySelector("#filter");
        btnFilter.addEventListener("click", function(event) {
            event.preventDefault();
            console.log($("#filterCatalog").val());
            console.log($("#filterMinReserved").val());
            $("#productTbody").empty();
            let query = {
                catalog: $("#filterCatalog").val(),
                minPrice: $("#filterMinPrice").val(),
                maxPrice: $("#filterMaxPrice").val(),
                minReserved: $("#filterMinReserved").val()
            };
            $.ajax({
                method: "GET",
                url: "product-select-do.php",
                dataType: "json",
                data: query
            }).done(function(res) {
                console.log($("#filterCatalog").val());
                console.log(res);
                //console.log("res");
                //console.log(res);
                res.forEach((row) => {
                    //console.log(row);
                    renderTable(row);
                });
            }).always(function() {
                console.log("final");
                let finalLine = `
        <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  
                  <td><a href="product-create.php" class="btn btn-app bg-secondary"><i class="far fa-plus-square"></i>新增</a></td>
                </tr>
        `;
                $("#productTbody").append(finalLine);
            });
        });
        let rowTemplate = "";

        function renderTable(row) {
            rowTemplate = `
     <tr>
         <td><input type="checkbox"></td>
         <td>${row.product_id}</td>
        <td>${row.product_name}</td>
        <td>${row.product_price}</td>
        <td>${row.product_catalog}</td>
         <td>${row.product_reserved}</td>
        <td><a href="item-update.php?id=${row.product_id}" class="btn btn-app bg-info"><i class="fas fa-edit"></i>檢視</a>
        <a href="item-delete.php?id=${row.product_id}" class="btn btn-app bg-danger"><i class="fas fa-trash-alt"></i>刪除</a></td>

    </tr>
     `;
            //console.log(rowTemplate);
            $("#productTbody").append(rowTemplate);

        };
    </script>
   
</body>

</html>