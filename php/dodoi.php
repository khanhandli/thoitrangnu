<?php 
	require_once('../resoures/header1.php');
	require_once('../resoures/dbhelp.php');
    $upload_directory = __DIR__ . DIRECTORY_SEPARATOR . "photo/";
    $id1 = $gia   = "";

    if (!empty($_POST)) {
        if (isset($_POST['gia'])) {
            $gia = $_POST['gia'];
        }


        if (isset($_POST['id'])) {
            $id1 = $_POST['id'];
        }
        $anh = $_FILES['anh']['name'];

                if($anh != null)
                {
                $path = "photo/";
                $tmp_name = $_FILES['anh']['tmp_name'];
                $anh = $_FILES['anh']['name'];

                move_uploaded_file($tmp_name,$path.$anh);
        if ($id1 != '') {
            //update 
            $sql = "UPDATE DoDoi SET  Anh ='$anh',  Gia = '$gia' WHERE id = " .$id1;
            $sql1 = "UPDATE GioHang SET  Anh ='$anh',  Gia = '$gia' WHERE id = " .$id1;
        }else if($gia != ''){ 
            //insert
            $sql = "INSERT INTO DoDoi(Anh,Gia)
                VALUES('$anh', '$gia')";
            $sql1 = "INSERT INTO GioHang(Anh,Gia)
                VALUES('$anh', '$gia')";

        }
    }
        execute($sql);
        execute($sql1);
}

?>
	<li class="list__item">
                    <a href="../php/donu.php" class="list__item--link">
                        ĐỒ NỮ                        
                    </a>                
                </li>
                <li class="list__item">
                    <a href="#" class="list__item--link link-active ">
                        ĐỒ ĐÔI                        
                    </a>
                </li>
                <li class="list__item">
                    <a href="../php/phukien.php" class="list__item--link">
                        PHỤ KIỆN                        
                    </a>
                </li>
<!-- mnu -->
</ul>
            <div class="menu">
                <div class="menu__left">
                    <i class="fad fa-list menu__left--icon"></i>
                    <span class="menu__left--text">Lọc</span>
                    <form action="" method="GET" class="form-timkiem" style="margin-left: 100px;">
                        <input type="checkbox" hidden id="search"> 
                        <input type="text" class="form-control" style="width: auto;display: inline-block; font-size: 1.4rem" name="timkiem" placeholder="Tìm kiếm giá sản phẩm">           
                        <button class="btn btn-outline-warning" style="min-width: 52px;
    height: 24.5px;border: 1px solid #ffc107">Tìm</button>
                     </form>
                </div>
                <div class="menu__right">
                    <span class="menu__right--text">Xem: </span>
                    <i class="fal fa-th menu__right--icon1"></i>
                    <i class="fal fa-th-list menu__right--icon2"></i>
                    <span class="menu__right--text">Sắp xếp theo: </span>
                    <span class="menu__right--text-border">Mặc định</span>
                </div>
                
            </div>  

            <!-- ! -->
<div class="grid">
                	<div class="row hidden">
                		<?php 

                            //Lay danh muc tu db
                            $limit = 8;
                            $page = 1;
                            if(isset($_GET['page'])){
                            $page = $_GET['page'];
                        }

                            if ($page <= 0) {
                                $page = 1;
                            }
                            $firstIndex = ($page - 1) * $limit;
                                    if (isset($_GET['timkiem']) && $_GET['timkiem'] != '') {
                                        $sql = "SELECT * FROM DoDoi WHERE gia LIKE '%".$_GET['timkiem']."%'";    
                                    }
                                     else {
                                        $sql = 'SELECT * FROM DoDoi WHERE 1 LIMIT '.$firstIndex.','.$limit;
                                    }
                                        $classList1 = executeResult($sql);
                                        $sql = 'SELECT count(id) as total FROM DoDoi';
                                        $countResult = executeSingleResult($sql);
                                        $count = $countResult['total'];
                                        $number = ceil($count/$limit);
                                        foreach ($classList1 as $class1) {
               echo        '<div class="col c-3">';
				echo		'<div class="hover">';
				echo			'<div class="img-hover">';
				echo				'<img src="../php/photo/'.$class1["Anh"].'" >';
					                				
				echo				'<div>';
				echo					'<button class="btn" onclick="deleteDD('.$class1['id'].')"><span class="btn1 btn-delete">Xóa</span></button>';
                echo        '<button  class= "btn" onclick=\'window.open("../update/updatedonu.php?id='.$class1['id'].'","_self")\'>
                <span class="btn1 btn-edit">Sửa</span></button>';
                                         
                echo				'</div>';
                  
				echo			'</div>';
				echo			'<span class="img-hover--text">';
				echo					number_format($class1['Gia'], 0, ",", ".") . ' VNĐ';
				echo			'</span>';
				echo		'</div>';		
				echo	'</div>'; }

                                    ?>

                	</div>
                	<nav aria-label="Page navigation example" class ="pagination--absolute">
                              <ul class="pagination">
                                <li class="page-item">
                                  <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                </li>
                                <?php 
                                    for ($i=0; $i < $number; $i++) { 
                                        if ($page == ($i +1)) {
                                        echo '<li class="page-item active1"><a class="page-link" href="#">'.($i+1).'</a></li>';
                                            
                                        }else {

                                        echo '<li class="page-item"><a class="page-link" href="?page= '.($i+1).'">'.($i+1).'</a></li>';
                                        }
                                    }
                                 ?>
                                <li class="page-item">
                                  <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </li>
                              </ul>
                            </nav>
                </div>
            </div> 

            <?php require_once('../resoures/footer.php') ?>        
                       
        </div> 
        <?php require_once('../resoures/nav.php'); ?>
        <!--  -->
        <?php 
                                            $sql1 = "SELECT * FROM DoDoi";
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
       				<li id="donu" class="nav-content__list--item"><a href="../update/updatedonu.php"><i class="fal fa-plus"></i> ĐỒ NỮ</a></li>
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
    <script type="text/javascript">
        function deleteDD(id) {
            var option = confirm('Bạn Có Muốn Xóa Không?')
            if(!option) {
                return;
            }
            $.post('delete.php', {
                        'id1': id
             }, function(data) {
                alert('Đã Xóa Thành Công');
                location.reload();
            })
                }
    </script>                           
</body>

</html>