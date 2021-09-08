<?php
require_once("db_connect.php");
session_start();
?>
<!doctype html>
<html lang="en">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="icon" href="Favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>活動報名頁面</title>
    <style>
        body {
            background: #58626d;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="#">跳耀吧漁會-小專用</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php
                if (!isset($_SESSION["user"])) :
                ?>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="activity-member-signin.php">登入</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-info" href="#">註冊</a>
                        </li>
                    <?php else : ?>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#"> Hi <?= $_SESSION["user"]["name"] ?> </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-info" href="login-unset.php">登出</a>
                            </li>
                        <?php endif; ?>

                        </ul>
            </div>
        </div>
    </nav>
    <main class="my-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">活動報名的輸入頁面</div>
                        <div class="card-body">
                            <form name="my-form" action="activity-success.php" method="POST">
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right" for="inputGroupSelect01">報名活動名稱</label>
                                    <select class="custom-select col-md-6 text-md-right" id="inputGroupSelect01" name="activity_name" required>
                                        <option selected value="">請選擇...</option>
                                        <option value="1">海上神奇小釣手</option>
                                        <option value="2">水族館一日遊</option>
                                        <option value="3">浮淺gogogo</option>
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <label for="example-date-input" class="col-md-4 col-form-label text-md-right">活動日期</label>
                                    <div class="col-6">
                                        <input class="form-control" type="date" value="2021-05-01" id="example-date-input" name="activity_date">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <?php if (isset($_SESSION["user"])) : ?>
                                        <input type="hidden" name='member_id' value='1'>
                                    <?php endif; ?>
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">參加者姓名</label>
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" class="form-control" name="full_name" <?php if (isset($_SESSION["user"])) : ?> value="<?php echo $_SESSION["user"]["name"] ?>">
                                    <?php else : ?>
                                        <input type="text" id="full_name" class="form-control" name="full_name" placeholder="請輸入姓名">
                                    <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center">
                                    <div class="form-check col-2">
                                        <input class="form-check-input" type="radio" name="sex" value="0" id="flexRadioDefault1" <?php if (isset($_SESSION["user"])) : echo ($_SESSION["user"]["gender"] == '0') ?  "checked" : "";
                                                                                                                                    endif; ?>>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            男性
                                        </label>
                                    </div>
                                    <div class="form-check col-2">
                                        <input class="form-check-input " type="radio" id="flexRadioDefault2" name="sex" value="1" <?php if (isset($_SESSION["user"])) : echo ($_SESSION["user"]["gender"] == '1') ?  "checked" : "";
                                                                                                                                    endif; ?>>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            女性
                                        </label>
                                    </div>
                                    <div class="form-check col-2">
                                        <input class="form-check-input " type="radio" id="flexRadioDefault2" name="sex" value="2" <?php if (isset($_SESSION["user"])) : echo ($_SESSION["user"]["gender"] == '2') ?  "checked" : "";
                                                                                                                                    endif; ?>>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            無性別
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-date-input" class="col-md-4 col-form-label text-md-right">出生日期</label>
                                    <div class="col-6">
                                        <input class="form-control" type="date" <?php if (isset($_SESSION["user"])) : ?> value="<?php echo $_SESSION["user"]["birth"] ?>" id="example-date-input" name="birth">
                                    <?php else : ?>
                                        <input class="form-control" type="date" value="1990-05-05" id="example-date-input" name="birth">
                                    <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">參加者電話</label>
                                    <div class="col-md-6">
                                        <input type="tel" id="phone_number" class="form-control" name="phone_number" <?php if (isset($_SESSION["user"])) : ?> value="<?php echo $_SESSION["user"]["phone"] ?>" maxlength="10">
                                    <?php else : ?>
                                        <input type="tel" id="phone_number" class="form-control" name="phone_number" placeholder="請輸入電話號碼" maxlength="10">
                                    <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail信箱</label>
                                    <div class="col-md-6">
                                        <input type="email" id="email_address" class="form-control" name="email_address" <?php if (isset($_SESSION["user"])) : ?> value="<?php echo $_SESSION["user"]["email"] ?>">
                                    <?php else : ?>
                                        <input type="email" id="email_address" class="form-control" name="email_address" placeholder="請輸入信箱">
                                    <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="present_address" class="col-md-4 col-form-label text-md-right">緊急聯絡人姓名</label>
                                    <div class="col-md-6">
                                        <input type="text" id="present_address" class="form-control" name="urgent_name" placeholder="請輸入緊急聯絡人" required>
                                    </div>
                                </div>
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">送出</button>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>