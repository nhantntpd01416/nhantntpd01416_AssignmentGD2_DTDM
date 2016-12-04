<?php
    include ("connect.php");

    if(isset($_POST['submit'])){
        $MaHD = $_POST['MaHD'];
        $NgayXuatHD = $_POST['NgayXuatHD'];
        $DonGia = $_POST['DonGia'];
        $KhachHang_MaKH = $_POST['KhachHang_MaKH'];
        $add = mysql_query("INSERT INTO hoadon(MaHD, NgayXuatHD, DonGia, KhachHang_MaKH) VALUES ('$MaHD', '$NgayXuatHD', '$DonGia', '$KhachHang_MaKH')") or die(mysql_error());
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
            <label class="control-label col-sm-2">Mã Hóa Đơn:</label>
            <div class="col-sm-10">
                <input name="MaHD" type="number" class="form-control" id="MaHD" placeholder="Nhập mã hóa đơn">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Ngày Xuất Hóa Đơn:</label>
            <div class="col-sm-10">
                <input name="NgayXuatHD" type="date" class="form-control" id="NgayXuatHD" placeholder="Nhập ngày xuất hóa đơn">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Đơn Giá:</label>
            <div class="col-sm-10">
                <input name="DonGia" type="text" class="form-control" id="DonGia" placeholder="Nhập đơn giá">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Mã Khách Hàng:</label>
            <div class="col-sm-10">
                <input name="KhachHang_MaKH" type="number" class="form-control" id="KhachHang_MaKH" placeholder="Nhập khách hàng">
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
                <th>Mã Hóa Đơn</th>
                <th>Ngày Xuất Hóa Đơn</th>
                <th>Đơn Giá</th>
                <th>Mã Khách Hàng</th>
            </tr>
            </thead>
            <?php
            $sql = mysql_query("SELECT * FROM hoadon");
            if(mysql_num_rows($sql)>0){
                while ($row = mysql_fetch_array($sql)){
                    $MaHD = $row['MaHD'];
                    $NgayXuatHD = $row['NgayXuatHD'];
                    $DonGia = $row['DonGia'];
                    $KhachHang_MaKH = $row['KhachHang_MaKH'];

                    echo "<tr>
                            <td>$MaHD</td>
                            <td>$NgayXuatHD</td>
                            <td>$DonGia</td>
                            <td>$KhachHang_MaKH</td>
                        </tr>";
                }
            }
            ?>
        </table>
    </fieldset>
</div>
