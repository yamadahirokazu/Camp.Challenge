<?php
session_start();
?>
<html>
  <head>
    <title>データ操作</title>
  </head>
  <body>
    <form action="par2.php" method="post">
     ・名前<input type = "text" name="Name" placeholder="<?php echo $_SESSION['name']; ?>"><br>
     ・性別 <br>:男<input type="radio" name="sex1">
                 女<input type="radio" name="sex2">
     ・ 趣味:<input type="text" name="hobby" placeholder="<?php echo $_SESSION['hobby']; ?>">
           <input type="submit">
    </form>
  </body>
</html>


