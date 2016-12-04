<?php
    include ("connect.php");
    $MaKH = $_GET['MaKH'];
    $xoa = mysql_query("DELETE FROM khachhang WHERE MaKH='$MaKH'");
    if($xoa){
        echo "Xóa Thành Công!";
    }else{
        echo "Xóa Thất Bại!";
    }
?>