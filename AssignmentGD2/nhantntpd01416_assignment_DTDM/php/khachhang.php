<?php
    include("connect.php");
?>
<script type="text/javascript">
    function xoaKH() {
        return confirm("Bạn có muốn xóa không?");
    }
</script>
<div id="content">
    <fieldset>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Mã Khách Hàng</th>
                    <th>Tên Khách Hàng</th>
                    <th>Địa Chỉ</th>
                    <th>Ngày Sinh</th>
                    <th>Số Điện Thoại</th>
                </tr>
            </thead>
            <?php
                $sql = mysql_query("SELECT * FROM khachhang");
                if(mysql_num_rows($sql)>0){
                    while ($row = mysql_fetch_array($sql)){
                        $MaKH = $row['MaKH'];
                        $TenKH = $row['TenKH'];
                        $DiaChi = $row['DiaChi'];
                        $NgaySinh = $row['NgaySinh'];
                        $SDT = $row['SDT'];

                        echo "<tr>
                            <td>$MaKH</td>
                            <td>$TenKH</td>
                            <td>$DiaChi</td>
                            <td>$NgaySinh</td>
                            <td>$SDT</td>
                            <td><a class=\"btn mini blue-stripe\" href='index.php?page=suakhachhang&MaKH=".$MaKH."'>Sửa</a></td>
                            <td><a class=\"btn mini blue-stripe\" href='index.php?page=xoakhachhang&MaKH=".$MaKH."' onclick='return xoaKH();'>Xóa</a></td>
                        </tr>";
                    }
                }
            ?>
        </table>
    </fieldset>
</div>
