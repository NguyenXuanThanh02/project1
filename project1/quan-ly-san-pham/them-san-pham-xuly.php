<?php

    $ten_san_pham = $_POST['ten_san_pham'];
    $nha_phan_phoi = $_POST['nha_phan_phoi'];
    $loai_san_pham = $_POST['id_loai'];
    $so_luong = $_POST['so_luong'];
    include_once "../connect/open-connect.php";
    $sql = "INSERT INTO danh_sach_san_pham(ten_san_pham, nha_phan_phoi, id_loai, so_luong ) VALUES('$ten_san_pham', '$nha_phan_phoi', '$loai_san_pham', '$so_luong')";
    mysqli_query($connect, $sql);
    include_once "../connect/close-connect.php";
    header('location:danh-sach-san-pham.php');
    
?>