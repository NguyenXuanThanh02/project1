<?php
    $id_sanpham = $_GET['id_sanpham'];
    include_once '../connect/open-connect.php';
    $sql = "SELECT * FROM danh_sach_san_pham WHERE id_sanpham = $id_sanpham ";
    $danh_sach_san_pham = mysqli_query($connect,$sql);
    foreach ($danh_sach_san_pham as $each){
    
        ?>
        <from method="post" action="sua-san-pham-xuly.php">
            <input type="hidden" >
        
        
        </from>
<?php
    }
    include_once "../connect/close-connect";
?>

