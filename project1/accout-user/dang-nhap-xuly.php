<?php
    session_start();
    include '../connect/open-connect.php';
    $accout = $_POST['accout'];
    $pwd = $_POST['password'];
    $sql = "SELECT * FROM user WHERE accout = '$accout' AND password = '$pwd'";
    $result = mysqli_query($connect, $sql);
    $sql_check = "SELECT COUNT(id_accout) AS so_account FROM user WHERE accout = '$accout' AND password = '$pwd'";
    $result_check = mysqli_query($connect, $sql_check);
    foreach($result_check as $each){
        $so_account = $each['so_account'];
    }
    if($so_account > 0){
        $_SESSION['accout'] = $accout;
        header("location:index.php");
    }
    else {
        header("location:dang-nhap.php");
    }
    include '../connect/close-connect.php';
?>