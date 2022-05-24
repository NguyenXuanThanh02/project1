<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .dang-nhap{
        
    }
    </style>
</head>
<body>
<?php
    session_start();
    if(isset($_SESSION['accout'])){
        header("location:dang-nhap.php");
    }
?>
<form method="post" action="dang-nhap-xuly.php">
    <div class="dang-nhap">
    uid: <input type="text" name="accout"><br>
    pwd: <input type="password" name="pwd"><br>
    <button>Đăng nhập</button>
    </div>
</form>

</body>
</html>