<?php
require_once("./pdo-connect.php");
$id = $_GET["id"];
$stmt = $db_host->prepare("SELECT * FROM travel_notes WHERE travel_notes_id='$id'");
$stmt->execute();
?>

<!doctype html>
<html lang="en">

<head>
    <title>文章預覽</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            background: #ddd;
        }

        .wrapper {
            max-width: 900px;
            margin: 0 auto;
        }
        a{
            color: orange;
            font-weight: bold;
        }
        a:hover{
            color: orangered;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <?php
            while ($row = $stmt->fetch()) {
            ?>
                <header class="pt-5">
                    <h1 class="text-info font-weight-bold">文章預覽</h1>
                </header>
                <div class="pt-5 d-flex justify-content-between">
                    <h6 style="opacity: .5;">文章發表於 : <?= $row["travel_notes_uptime"] ?></h6>
                    <a role="button" href="travel-notes-editor.php?id=<?= $row["travel_notes_id"] ?>" class="ml-2"><i class="fas fa-pen pr-2"></i>編輯文章</a>
                </div>
                <div>
                    <h2 class="p-2" style="background: lightblue;">[遊記] <?= $row["travel_notes_title"] ?></h2>
                </div>
                <div class="pt-5">
                    <?= $row["travel_notes_article"] ?>
                </div>

            <?php } ?>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://kit.fontawesome.com/45163e90d7.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>