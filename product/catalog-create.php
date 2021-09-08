<?php
require_once "pdo-connect-small.php";
$stmtCat = $db_host->prepare("SELECT * FROM catalog ");

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
    <title>template</title>

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
                            <div class="card">
                                <div class="card-header">
                                    <div class="row justify-content-between mt-2">
                                        <div class="col-md-2">
                                            <h1>新增分類</h1>
                                        </div>
                                        <div class="col-md-2">
                                            <?php
                                            if (isset($_GET["msg"])) {  ?>

                                                <h2><?= $_GET["msg"] ?></h2>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">

                                    <form action="catalog-create-do.php" method="POST">
                                        <div class="mb-3 row">
                                            <label for="catalogName" class="col-sm-2 col-form-label">分類名稱</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="catalogName" id="catalogName" value="">
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row-reverse">
                                            <a class="btn btn-secondary mx-2" href="product.php">返回</a>
                                            <button type="submit" class="btn btn-primary mx-2" id="btnAdd">新增</button>
                                        </div>
                                    </form>
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
        let btnAdd = document.querySelector("#btnAdd");

        btnAdd.addEventListener("click", function(event) {
            //event.preventDefault();
            console.log($("#catalogName").val());
            if ($("#catalogName").value == "") {

                event.preventDefault();
                alert("without Name");
            } else {

            }
        })
    </script>
</body>

</html>