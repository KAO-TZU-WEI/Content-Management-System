<!doctype html>
<html lang="en">

<head>
    <title>文章上傳</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    body {
        background: #ddd;
    }
</style>

<body>
    <div class="container ">
        <header class="pt-5 ">
            <h1 class="text-info font-weight-bold">文章上傳</h1>
        </header>
        <div class="py-3"></div>
        <form class="form-group" action="travel-notes-newUpdate.php" method="post">
            <div class="form-group ">
                <label for="">文章標題</label>
                <input type="text" name="title" id="title" class="form-control" required oninvalid="this.setCustomValidity('請輸入文章標題')" oninput="setCustomValidity('')">
            </div>
            <div class="form-group">
                <label for="">文章內容</label>
                <textarea name="editor1" id="editor1" rows="10" cols="80" class="form-control">
                </textarea>
            </div>
            <input class="mt-3 btn btn-info " type='submit' value='送出文章' id="submitBtn">
        </form>


    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./ckeditor4/ckeditor.js"></script>
    <script src="./ckfinder/ckfinder.js"></script>
    <script src="./ckeditor4/plugins/image/dialogs/image.js"></script>
    <script src="./ckeditor4/lang/zh.js"></script>
    <!-- SweetAlert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
        var editor = CKEDITOR.replace('editor1', {
            removeButtons: 'about,PasteFromWord,PasteText,Source,Anchor,Scayt,About,Blockquote,Maximize',
            removePlugins: 'elementspath,resize',
            extraPlugins: 'font,editorplaceholder',
            // filebrowserBrowseUrl: './ckfinder/ckfinder.html',
            filebrowserUploadUrl: './ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            height: 500,
            tabSpaces: 4, //調整點擊tab的字元數  預設:0
            editorplaceholder: "點擊輸入文章...",
        });
        CKEDITOR.addCss(".cke_editable{cursor:text; font-size: 16px; font-family: Arial, sans-serif;}"); //修改預設字體大小

        $('#submitBtn').on('click', function(e) {
            e.preventDefault();
            var form = $(this).parents('form');
            let titleVal = $("#title").val()
            var textData = CKEDITOR.instances.editor1.getData();
            if (titleVal === "") {
                Swal.fire({
                    title: '請加入文章標題',
                    confirmButtonText: `確認`,
                })
            } else if (textData === "") {
                Swal.fire({
                    title: '請加入文章內容',
                    confirmButtonText: `確認`,
                })
            } else if (titleVal !== "" && textData !== "") {
                Swal.fire({
                    title: "確定要送出文章嗎",
                    showDenyButton: true,
                    confirmButtonText: `確定`,
                    denyButtonText: `取消`,
                    closeOnConfirm: false
                }).then((result) => {
                    if (result.isConfirmed) form.submit();
                });
            }
        });
    </script>



</body>

</html>