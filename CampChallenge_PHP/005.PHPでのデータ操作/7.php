<HTML>
    <head>
    </head>
    <body>
        <form enctype="multipart/form-data" action="" method="post">
            ファイル選択：<input name="userfile" type="file" />
             <input type="submit" name="btnSubmit">
        </form>
    </body>
</HTML>

<?php
    // アップロードされたファイル情報確認
    var_dump($_FILES);

    // サーバー側に保存する名前
    $file_name = 'upload.txt';
    // アップロードされたファイルを移動する
    move_uploaded_file( $_FILES['userfile']['tmp_name'], $file_name);
//ファイルを選択ボタンが出る.タイプ属性とは入力コントロールなどの設定するための属性
echo 'ここまで走っている';
echo $file_name;

?>