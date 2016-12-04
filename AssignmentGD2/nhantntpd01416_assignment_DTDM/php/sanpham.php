<?php
  include ("connect.php");

    if(isset($_POST['submit'])){
        $MaSP = $_POST['MaSP'];
        $TenSP = $_POST['TenSP'];
        $SoLuongSP = $_POST['SoLuongSP'];
        $GiaSP = $_POST['GiaSP'];
        $LoaiSanPham_MaLoai = $_POST['LoaiSanPham_MaLoai'];
        $add = mysql_query("INSERT INTO sanpham(MaSP, TenSP, SoLuongSP, GiaSP, LoaiSanPham_MaLoai) VALUES ('$MaSP', '$TenSP', '$SoLuongSP', '$GiaSP', '$LoaiSanPham_MaLoai')") or die(mysql_error());
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
            <label class="control-label col-sm-2">Mã Sản Phẩm:</label>
            <div class="col-sm-10">
                <input name="MaSP" type="number" class="form-control" id="MaSP" placeholder="Nhập mã sản phẩm">
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
                <input name="SoLuongSP" type="text" class="form-control" id="SoLuongSP" placeholder="Nhập số lượng">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Giá Sản Phẩm:</label>
            <div class="col-sm-10">
                <input name="GiaSP" type="text" class="form-control" id="GiaSP" placeholder="Nhập giá sản phẩm">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Mã Loại Sản Phẩm:</label>
            <div class="col-sm-10">
                <input name="LoaiSanPham_MaLoai" type="number" class="form-control" id="LoaiSanPham_MaLoai" placeholder="Nhập loại sản phẩm">
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
                <th>Mã Sản Phẩm</th>
                <th>Tên Sản Phẩm</th>
                <th>Số Lượng</th>
                <th>Giá Sản Phẩm</th>
                <th>Loại Sản Phẩm_Mã Loại</th>
            </tr>
            </thead>
            <?php
            $sql = mysql_query("SELECT * FROM sanpham");
            if(mysql_num_rows($sql)>0){
                while ($row = mysql_fetch_array($sql)){
                    $MaSP = $row['MaSP'];
                    $TenSP = $row['TenSP'];
                    $SoLuongSP = $row['SoLuongSP'];
                    $GiaSP = $row['GiaSP'];
                    $LoaiSanPham_MaLoai = $row['LoaiSanPham_MaLoai'];

                    echo "<tr>
                            <td>$MaSP</td>
                            <td>$TenSP</td>
                            <td>$SoLuongSP</td>
                            <td>$GiaSP</td>
                            <td>$LoaiSanPham_MaLoai</td>
                        </tr>";
                }
            }
            ?>
        </table>
    </fieldset>
</div>
