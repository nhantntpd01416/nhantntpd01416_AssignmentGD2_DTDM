<?php
    include("connect.php");
    if(isset($_GET['MaKH']) && $MaKH = $_GET['MaKH']){
        $khachhang = mysql_query("SELECT MaKH, TenKH, DiaChi, NgaySinh, SDT FROM khachhang WHERE MaKH=$MaKH");
            if(mysql_num_rows($khachhang)>0){
                $kh = mysql_fetch_array($khachhang);
            }
            if(isset($_POST['submit'])){
                $MaKH = $_POST['MaKH'];
                $TenKH = $_POST['TenKH'];
                $DiaChi = $_POST['DiaChi'];
                $NgaySinh = $_POST['NgaySinh'];
                $SDT = $_POST['SDT'];
                $capnhat = mysql_query("UPDATE khachhang SET MaKH='$MaKH', TenKH='$TenKH', DiaChi='$DiaChi', NgaySinh = '$NgaySinh', SDT='$SDT' WHERE MaKH='$MaKH'");
                if($capnhat){
                    echo "Thành Công!";
                }else{
                    echo "Thất Bại!";
                }
            }
    }
?>

<div class="container">
    <form class="form-horizontal" role="form" method="post">
        <div class="form-group">
            <label class="control-label col-sm-2">Mã Khách Hàng:</label>
            <div class="col-sm-10">
                <input name="MaKH" type="number" class="form-control" id="MaKH" placeholder="Nhập mã khách hàng">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Tên Khách Hàng:</label>
            <div class="col-sm-10">
                <input name="TenKH" type="text" class="form-control" id="TenKH" placeholder="Nhập tên khách hàng">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Địa Chỉ:</label>
            <div class="col-sm-10">
                <input name="DiaChi" type="text" class="form-control" id="DiaChi" placeholder="Nhập địa chỉ">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Ngày Sinh:</label>
            <div class="col-sm-10">
                <input name="NgaySinh" type="date" class="form-control" id="NgaySinh" placeholder="Nhập ngày sinh">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Số Điện Thoại:</label>
            <div class="col-sm-10">
                <input name="SDT" type="number" class="form-control" id="SDT" placeholder="Nhập số điện thoại">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button  type="submit" name="submit" class="btn btn-success btn-block">Sửa</button>
            </div>
        </div>
    </form>
</div>
