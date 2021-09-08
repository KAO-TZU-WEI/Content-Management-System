<?php
require_once "pdo-connect.php";
$sql = $db_host->prepare("SELECT * FROM board WHERE board_valid=1 ORDER BY board_date DESC");
$sql->execute();

?>
<!doctype html>
<html lang="en">

<head>
    <title>留言板輸入顯示</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .board_pic {
            width: 500px;
            height: 300px;
        }

        .headPic {
            width: 60px;
            height: 60px;
            background: pink;
        }
    </style>
</head>

<body>
    <div class="container">
    <h2>測試頁</h2>
        <form class="py-2" action="boardInsertData.php" method="post">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <figure class="d-flex justify-content-center">
                            <img src="img/01.jpg" class="card-img-top board_pic " alt="...">
                        </figure>
                        <div class="card-body">
                            <figure class="mr-4">
                                <img class="headPic" src="img/4.png" alt="">
                            </figure>
                            <h4>會員: board_member_id 4</h4>
                            <h3>顯示留言內容board_id</h3>
                            <p>
                                空山新雨後，天氣晚來秋。<br>
                                明月松間照，清泉石上流。<br>
                                竹喧歸浣女，蓮動下漁舟。<br>
                                隨意春芳歇，王孫自可留。
                            </p>

                            <div class="d-flex justify-content-end">
                                <a href="boardUserList.php" class="btn btn-outline-primary">到後台</a>
                            </div>
                            <?php while ($row = $sql->fetch()) { ?>
                                <div class="container">
                                    <div class="d-flex justify-content-between border">
                                        <div class="d-flex justify-content-start">
                                            <figure class="mr-4">
                                                <img class="headPic" src="img/<?= $row["board_member_id"] ?>.png" alt="">
                                            </figure>
                                            <div class="align-self-center mr-4 ">
                                                <h6>reply回覆者<?= $row["reply_member_id"] ?>留言: </h6>
                                            </div>
                                            <div class="align-self-center">
                                                <?= $row["board_content"] ?>
                                            </div>
                                        </div>
                                        <div class="align-self-end">
                                            <?= $row["board_date"] ?>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <a href="" class="btn btn-outline-danger">檢舉</a>
                                    </div>
                                </div>
                                <hr>
                            <?php } ?>
                        </div>
                        <div class="card-footer">
                            <!-- <input class="text-muted"> -->
                            <form class="form-inline py-2" action="boardInsertData.php" method="POST">
                                <div class="input-group">
                                    <div class="form-group">
                                        <label for="">board_member_id</label>
                                        <input type="text" name="board_member_id">
                                    </div>
                                    <div class="form-group">
                                        <label for="">board_id</label>
                                        <input type="text" name="board_id">
                                    </div>
                                    <div class="form-group">
                                        <label for="">reply_member_id</label>
                                        <input type="text" name="reply_member_id" >
                                    </div>
                                    <!-- <div class="form-group row">
                                        <label for="example-datetime-local-input" class="col-2 col-form-label">dataTime</label>
                                        <div class="col-10">
                                            <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input" name="dataTime" min="2021-01-01T00:00" max="2021-12-31T23:59">
                                        </div>
                                    </div> -->
                                    
                                    <textarea type="text" class="form-control" aria-label="With textarea" placeholder="請輸入內容" name="board_content"></textarea>
                                    <button class="btn btn-info" type="submit">送出</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </form>
    </div>
</body>

</html>