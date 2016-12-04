<?php
    include ("connect.php");

    if(isset($_POST['submit'])){
        $MaLoai = $_POST['MaLoai'];
        $TenLoai = $_POST['TenLoai'];
        $TenNCC = $_POST['TenNCC'];
        $DiaChi = $_POST['DiaChi'];
        $add = mysql_query("INSERT INTO loaisanpham(MaLoai, TenLoai, TenNCC, DiaChi) VALUES ('$MaLoai', '$TenLoai', '$TenNCC', '$DiaChi')") or die(mysql_error());
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
            <label class="control-label col-sm-2">Mã Loại:</label>
            <div class="col-sm-10">
                <input name="MaLoai" type="number" class="form-control" id="MaLoai" placeholder="Nhập mã loại">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Tên Loại:</label>
            <div class="col-sm-10">
                <input name="TenLoai" type="text" class="form-control" id="TenLoai" placeholder="Nhập tên loại">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Tên Nhà Cung Cấp:</label>
            <div class="col-sm-10">
                <input name="TenNCC" type="text" class="form-control" id="TenNCC" placeholder="Nhập nhà cung cấp">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Địa Chỉ:</label>
            <div class="col-sm-10">
                <input name="DiaChi" type="text" class="form-control" id="DiaChi" placeholder="Nhập địa chỉ">
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
                <th>Mã Loại</th>
                <th>Tên Loại</th>
                <th>Tên Nhà Cung Cấp</th>
                <th>Địa Chỉ</th>
            </tr>
            </thead>
            <?php
            $sql = mysql_query("SELECT * FROM loaisanpham");
            if(mysql_num_rows($sql)>0){
                while ($row = mysql_fetch_array($sql)){
                    $MaLoai = $row['MaLoai'];
                    $TenLoai = $row['TenLoai'];
                    $TenNCC = $row['TenNCC'];
                    $DiaChi = $row['DiaChi'];

                    echo "<tr>
                            <td>$MaLoai</td>
                            <td>$TenLoai</td>
                            <td>$TenNCC</td>
                            <td>$DiaChi</td>
                        </tr>";
                }
            }
            ?>
        </table>
    </fieldset>
</div>
