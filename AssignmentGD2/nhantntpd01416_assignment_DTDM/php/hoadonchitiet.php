<?php
    include ("connect.php");

    if(isset($_POST['submit'])){
        $MaHDCT = $_POST['MaHDCT'];
        $TenSP = $_POST['TenSP'];
        $SoLuong = $_POST['SoLuong'];
        $TongTien = $_POST['TongTien'];
        $SanPham_MaSP = $_POST['SanPham_MaSP'];
        $HoaDon_MaHD = $_POST['HoaDon_MaHD'];
        $add = mysql_query("INSERT INTO hoadonchitiet(MaHDCT, TenSP, SoLuong, TongTien, SanPham_MaSP, HoaDon_MaHD) VALUES ('$MaHDCT', '$TenSP', '$SoLuong', '$TongTien', '$SanPham_MaSP', '$HoaDon_MaHD')") or die(mysql_error());
        if(isset($add)){
            echo '<div class="alert alert-success" role="alert" id="msg">Thêm Thành Công</div>';
        }else{
            echo '<div class="alert alert-danger" role="alert">Thêm Thất Bại</div>';
        }
    }
?>

<div class="container">
    <form class="form-horizontal" role="form" method="post">
        <div class="form-group">
            <label class="control-label col-sm-2">Mã Hóa Đơn Chi Tiết:</label>
            <div class="col-sm-10">
                <input name="MaHDCT" type="number" class="form-control" id="MaHDCT" placeholder="Nhập mã hóa đơn chi tiết">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Tên Sản Phẩm:</label>
            <div class="col-sm-10">
                <input name="TenSP" type="text" class="form-control" id="TenSP" placeholder="Nhập tên sản phẩm">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Số Lượng:</label>
            <div class="col-sm-10">
                <input name="SoLuong" type="text" class="form-control" id="SoLuong" placeholder="Nhập số lượng">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Tổng Tiền:</label>
            <div class="col-sm-10">
                <input name="TongTien" type="text" class="form-control" id="TongTien" placeholder="Tổng Tiền">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Mã Sản Phẩm:</label>
            <div class="col-sm-10">
                <input name="SanPham_MaSP" type="number" class="form-control" id="SanPham_MaSP" placeholder="Nhập mã sản phẩm">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Mã Hóa Đơn:</label>
            <div class="col-sm-10">
                <input name="HoaDon_MaHD" type="number" class="form-control" id="HoaDon_MaHD" placeholder="Nhập mã hóa đơn">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button  type="submit" name="submit" class="btn btn-success btn-block">Thêm</button>
            </div>
        </div>
    </form>
</div>

<div id="content">
    <fieldset>
        <hr>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Mã Hóa Đơn CT</th>
                <th>Tên Sản Phẩm</th>
                <th>Số Lượng</th>
                <th>Tổng Tiền</th>
                <th>Mã Sản Phẩm</th>
                <th>Mã Hóa Đơn</th>
            </tr>
            </thead>
            <?php
            $sql = mysql_query("SELECT * FROM hoadonchitiet");
            if(mysql_num_rows($sql)>0){
                while ($row = mysql_fetch_array($sql)){
                    $MaHDCT = $row['MaHDCT'];
                    $TenSP = $row['TenSP'];
                    $SoLuong = $row['SoLuong'];
                    $TongTien = $row['TongTien'];
                    $SanPham_MaSP = $row['SanPham_MaSP'];
                    $HoaDon_MaHD = $row['HoaDon_MaHD'];

                    echo "<tr>
                            <td>$MaHDCT</td>
                            <td>$TenSP</td>
                            <td>$SoLuong</td>
                            <td>$TongTien</td>
                            <td>$SanPham_MaSP</td>
                            <td>$HoaDon_MaHD</td>
                        </tr>";
                }
            }
            ?>
        </table>
    </fieldset>
</div>
