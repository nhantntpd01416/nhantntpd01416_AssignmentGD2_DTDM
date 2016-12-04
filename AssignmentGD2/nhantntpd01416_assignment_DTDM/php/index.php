<html>
    <head>
        <title>Điện toán đám mây</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="css/theme.css" rel="stylesheet">
        <link href="css/jumbotron.css" rel="stylesheet">
    </head>

    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Assignment</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Trang Chủ</a></li>
                        <li><a href="index.php?page=khachhang">Khách Hàng</a></li>
                        <li><a href="index.php?page=themkhachhang">Thêm Khách Hàng</a></li>
                        <li><a href="index.php?page=hoadon">Hóa Đơn</a></li>
                        <li><a href="index.php?page=hoadonchitiet">Hóa Đơn Chi Tiết</a></li>
                        <li><a href="index.php?page=loaisanpham">Loại Sản Phẩm</a></li>
                        <li><a href="index.php?page=sanpham">Sản Phẩm</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="jumbotron">
            <div class="container">
                <h1>Điện toán đám mây!</h1>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php
                    if(isset($_GET['page'])){
                        $page = $_GET['page'];
                        if($page=='khachhang'){
                            include ("khachhang.php");
                        }else if($page=='themkhachhang'){
                            include ("themkhachhang.php");
                        }else if($page=='hoadon'){
                            include ("hoadon.php");
                        }
                        else if($page=='hoadonchitiet'){
                            include ("hoadonchitiet.php");
                        }else if($page=='sanpham'){
                            include ("sanpham.php");
                        }else if($page=='loaisanpham'){
                            include ("loaisanpham.php");
                        }else if($page=='xoakhachhang'){
                            include ("xoakhachhang.php");
                        }else if($page=='suakhachhang'){
                            include ("suakhachhang.php");
                        }
                    }
                    ?>
                </div>
            <hr>
            <footer>
                <p style="padding-top: auto;">Copyright &copy; Dattlqpd01388_AssignmentINF205_GD2</p>
            </footer>
        </div>
    </body>

</html>