<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sach san pham</title>
    <link rel="stylesheet" href="styledanhsachsp.css">
</head>
<body>
    


<table border="1" cellspacing="0" cellpadding="0" width="100%" >
    
    <h3> welcom danh sách sản phẩm </h3>
    <button><a href="them-san-pham.php">thêm</a></button>
    <div class="wapper">
        <tr>
            <td>id_sanpham</td>
            <td>Tên sản phẩm</td>
            <td>loại sản phẩm</td>
            <td>nhà phâm phối</td>
            <td>số lượng sản phẩm</td>
            <td></td>
            <td></td>
        </tr>
    </div>
<?php
include_once "../connect/open-connect.php";
$sql = "SELECT * FROM danh_sach_san_pham";
$san_pham = mysqli_query($connect,$sql);
foreach($san_pham as $each){
    ?>
        <tr>
            <td>
                <?php echo $each['id_sanpham']
                ?>
            </td>
            <td>
                <?php echo $each['ten_san_pham']
                ?>
            </td>
            <td>
                <?php 
                    echo $each['id_loai']
                ?>
            </td>
            <td>
                <?php
                    echo $each['nha_phan_phoi']
                ?>
            </td>
            <td>
                <?php
                echo $each['so_luong']
                ?>
            </td>
            <td>
                <a href="sua-san-pham.php">
                Sửa</a>
            </td>
            <td>
                <a href="xoa-san-pham.php?id=<?php echo $eacho['id'] ?>">
                Xóa</a>
            </td>
        </tr>

<?php
}
    include_once "../connect/close-connect.php"
?>
</table>

</body>
</html>