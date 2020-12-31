<?php 
    require_once('../resoures/dbhelp.php');
 
    $id ='';
       if (isset($_GET['id'])) {
        $id = $_GET['id'];
        
        $sql = 'SELECT * FROM DoNu WHERE id = '. $id;
        $roomList = executeResult($sql);
        
    }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/bootstrap-4.5.3-dist/css/bootstrap.min.css">
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
				<div class="form1">
					<div class="headerr">
						<i class="fal fa-store-alt"></i>
	        			<h1>Thêm đồ nữ vào cửa hàng</h1>
					</div>		
	        <form action="../php/donu.php" method="post" class="form2" enctype="multipart/form-data">
	        	 <input type="number" name="id" value="<?=$id?>" hidden>
	        	<div class="anh">
	        		<label class="form-label" for="customFile">Tải ảnh sản phẩm:</label>
					<input type="file" name="anh" class="form-file" id="customFile">
	        	</div>
	        	<div class="gia">
	        		<label class="form-label" for="gia">Giá:</label>
					<input type="text" name="gia" class="form-file" id="gia" />
	        	</div>		
	        	<button class="btn btn-outline-success">Lưu</button>
	        </form>
        </div>
         <div class="fotter vh">
            	<h1>Phạm Thị Vân Anh</h1>
            	<h1>Vũ Thị Quỳnh</h1>
            </div>  
            </div> 
        <?php require_once('../resoures/nav.php'); ?>
        <!--  -->
        <?php 
        require_once('../resoures/dbhelp.php');
        
                                            $sql1 = "SELECT * FROM DoNu";
                                            $list1 = executeResult($sql1);
                                            $i1 = count($list1);

                                            echo "<span>".$i1."</span>";
        ?>
        <!--  -->
                </li>
            </ul>
            <div class="nav-content">
                <a href="../php/home.php" class="nav-content--link">TRANG CHỦ</a>
                <a href="#" class="nav-content--link">GIỚI THIỆU</a>
                        <a href="../php/donu.php" class="nav-content--link">XEM SẢN PHẨM</a>
                <span>THÊM SẢN PHẨM:</span>
                <ul class="nav-content__list">
					<li id="donu" class="nav-content__list--item link-active"><a href="../update/updatedonu.php"><i class="fal fa-plus"></i> ĐỒ NỮ</a></li>
        			<li class="nav-content__list--item"><a href="../update/updatedodoi.php"><i class="fal fa-plus"></i> ĐỒ ĐÔI</a></li>
        			<li class="nav-content__list--item"><a href="../update/updatephukien.php"><i class="fal fa-plus"></i> PHỤ KIỆN</a></li>
                </ul>
                 <div onclick='window.open("../cart/dathang.php","_self")' class="nav-content--link" style="
    margin-top: -18px; cursor: pointer;
">GIỎ HÀNG</div>
                
                
        	</div>
            <a href="../index.php" class="out">
                    <i class="fal fa-sign-out-alt"></i>
                    <span>Thoát</span>
                </a>
        </div>
                    
        </div> 
        
    </div>                          
</body>

</html>