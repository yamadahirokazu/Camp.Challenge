<html>
  <head>
    <title>自己紹介</title>
  </head>
  <body>
    <form action="" method="post">
    名前 <input type="text" name="txtName">
     性別 <input type="radio" name="rdoSample">
      趣味<textarea name="mulText"></textarea>
    </form>
  </body>
</html>

<?php
    $textbox = $_POST['txtName'];
    //$checkbox = $_POST['chkTest'];
    $radio = $_POST['rdoSample'];
    //$button = $_POST['btnTest'];
    //$submit = $_POST['btnSubmit'];
    //$select = $_POST['cmbList'];
    $textarea = $_POST['mulText'];

echo $textbox.'<br>';//文字が出力
//echo $checkbox.'<br>';
echo $radio.'<br>';//押した場合onと表示
//echo $button.'<br>';
//echo $submit.'<br>';
//echo $select.'<br>';
echo $textarea.'<br>';//送信ボタンがないと進めない
?>
