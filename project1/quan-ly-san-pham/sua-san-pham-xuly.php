<?php
//Mở kết nối đến db
include_once "../connect/open-connect";
//Lấy dữ liệu từ form
    $tensanpham = $_POST['ten_san_pham'];
    $nhaphanphoi = $_POST['nha_phan_phoi'];
    $loaisanpham = $_POST['id_loai'];
    $soluong = $_POST['so_luong'];
$sql = "UPDATE danh_sach_san_pham SET ten_san_pham = '$tensanpham', nha_phan_phoi = '$nhaphanphoi', id_loai = '$loaisanpham', password = 'so_luong'";
mysqli_query($connect,$sql);
include_once "../connect/close-connect";
header('Location:danh-sach-san-pham.php');
?>