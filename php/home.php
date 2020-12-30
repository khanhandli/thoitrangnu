<?php 
        require_once('../resoures/dbhelp.php');
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/grid.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-pro-5.13.0/fontawesome-pro-5.13.0-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap&subset=vietnamese"
        rel="stylesheet">
</head>

<body>
    <div class="app">
        <div class="left">
            
        </div>
        <div class="right">
            <div class="header header-home">
                <!-- <img class="lazyautosizes lazyloaded" src="assets/img/header.jpg" alt="Banner trang chủ 2"> -->
                <img data-sizes="auto" class="lazyautosizes ls-is-cached lazyloaded" src="../assets/img/home.jpg" data-src="https://bucket.nhanh.vn/store/7136/bn/sb_1606809339_250.jpg" alt="Banner Slide home new" sizes="1061px">
            </div>
            <div class="product margin">
                <div class="grid">
                    <div class="row">
                        <div class="col c-6">
                        <img data-sizes="auto" class="lazyautosizes ls-is-cached lazyloaded" src="../assets/img/product1.jpg" data-src="https://bucket.nhanh.vn/store/7136/bn/sb_1606809597_183.jpg" alt="Banner dưới trang chủ 1" sizes="486px">
                    </div>
                    <div class="col c-6">
                        <img data-sizes="auto" class="lazyautosizes ls-is-cached lazyloaded" src="../assets/img/product2.jpg" data-src="https://bucket.nhanh.vn/store/7136/bn/sb_1606809597_183.jpg" alt="Banner dưới trang chủ 1" sizes="486px">
                    </div>
                    </div>          
                </div>
            </div>
            <div class="product-bottom">
                
                        <div class="left50">
                            <img data-sizes="auto" class="lazyautosizes ls-is-cached lazyloaded" src="https://bucket.nhanh.vn/store/7136/bn/sb_1606809697_159.jpg" data-src="../assets/img/produc3.jpg" alt="Banner lớn trái" sizes="516px">
                        </div>
                        <div class="right50">
                                    <div class="row ">
                                        <div class="col c-6 height">
                                            <div class="danhmuc pink">
                                                
                                                <a href="#"><span>2</span></a>
                                                <a href="#"><h2>NHÂN VIÊN</h2></a>
                                            </div>
                                        </div>
                                        <div class="col c-6 height">
                                            <div class="danhmuc pink2">
                                                <?php 
                                            $sql1 = "SELECT * FROM DoNu";
                                            $list1 = executeResult($sql1);
                                            $i1 = count($list1);

                                            echo '<a href="../php/donu.php"><span>'.$i1.'</span></a>';
                                         ?>
                                                
                                                <a href="../php/donu.php"><h2>ĐỒ NỮ</h2></a>
                                            </div>
                                        </div>
                                        <div class="col c-6 height" style="margin-top: 28px;">
                                            <div class="danhmuc pink3">
                                                <?php 
                                            $sql2 = "SELECT * FROM DoDoi";
                                            $list2 = executeResult($sql2);
                                            $i2 = count($list2);

                                            echo '<a href="../php/dodoi.php"><span>'.$i2.'</span></a>';
                                         ?>
                                                <a href="../php/dodoi.php"><h2>ĐỒ ĐÔI</h2></a>
                                            </div>
                                        </div>
                                        <div class="col c-6 height" style="margin-top: 28px;">
                                            <div class="danhmuc pink4">
                                                 <?php 
                                            $sql3 = "SELECT * FROM PhuKien";
                                            $list3 = executeResult($sql3);
                                            $i3 = count($list3);

                                            echo '<a href="../php/phukien.php"><span>'.$i3.'</span></a>';
                                         ?>
                                                <a href="../php/phukien.php"><h2>PHỤ KIỆN</h2></a>
                                            </div>
                                        </div>

                                    </div>
                        </div>
                    
            </div>
            <div class="fotter">
            	<h1>Phạm Thị Vân Anh</h1>
            	<h1>Vũ Thị Quỳnh</h1>
            </div>           
        </div> 
        <div class="nav">
        	<div class="name">
        		<div class="name-header">
        			<div class=""><span>V.ANH</span></div>
	        		<div class=""><span>&</span></div>
	        		<div class=""><span>QUỲNH</span></div>
        		</div>
        	</div>	
        	<div class="nav-logo"><img src="../assets/img/768px-HUNRE_Logo.png" alt=""></div>
        	<ul class="nav-header__list">
        		<li class="nav-header__list--item"><i class="fad fa-user-circle"></i></li>
        		<li class="nav-header__list--item"><i class="fad fa-search"></i></li>
        		<li class="nav-header__list--item"><i class="fal fa-heart"></i></li>
        		<li class="nav-header__list--item">
        			<i class="fad fa-tshirt"></i>
        			<span>0</span>
        		</li>
        	</ul>
        	<div class="nav-content">
        		<a href="../php/home.php" class="nav-content--link link-active">TRANG CHỦ</a>
        		<a href="#" class="nav-content--link">GIỚI THIỆU</a>
                <a href="../php/donu.php" class="nav-content--link">XEM SẢN PHẨM</a>

        		<span>THÊM SẢN PHẨM:</span>
        		<ul class="nav-content__list">
        			<li id="donu" class="nav-content__list--item"><a href="../update/updatedonu.php"><i class="fal fa-plus"></i> ĐỒ NỮ</a></li>
                    <li class="nav-content__list--item"><a href="../update/updatedodoi.php"><i class="fal fa-plus"></i> ĐỒ ĐÔI</a></li>
                    <li class="nav-content__list--item"><a href="../update/updatephukien.php"><i class="fal fa-plus"></i> PHỤ KIỆN</a></li>
        		</ul>
        	</div>
            <a href="../index.php" class="out">
                    <i class="fal fa-sign-out-alt"></i>
                    <span>Thoát</span>
                </a>
        </div>
    </div>                          
</body>

</html>