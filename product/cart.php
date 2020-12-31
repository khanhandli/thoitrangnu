<?php
    session_start();
    require_once('../resoures/dbhelp.php');

    $products_cart = $_SESSION['cart'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="../assets/js/jquery.js"></script>

</head>
<body>
    <div class="container">
        <a href="../php/home.php" class="btn btn-success">Về trang chủ</a>
        <h2>Danh sách sản phẩm</h2>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>Mã sản phẩm</th>
                        <th>Ảnh</th>
                        <th>Giá tiền</th>
                        <th>Thành tiền</th>
                        <th>Thêm/Bớt</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $tong=0;foreach($products_cart as $key => $row){ ?>
                        <tr>
                            <td><?php echo $row['maSP']; ?></td>
                            <td><?php echo $row['Anh']; ?></td>
                            <td><?php echo $row['Gia']; ?></td>
                            <td><?php echo number_format($row['Gia']); ?></td>
                            <td>
                                <a href="subtract.php?msp=<?php echo $key ?>">
                                <button type="button" class="btn btn-primary">
                                -
                                </button></a>

                                <a href="addcart.php?msp=<?php echo $key ?>">
                                <button type="button" class="btn btn-primary">
                                +
                                </button></a>
                            </td>
                            <td>
                            <a href="delete.php?msp=<?php echo $key ?>">
                                <button type="button" class="btn btn-primary">
                                Xóa
                                </button></a>
                            </td>
                        </tr>
                        <?php
                            $tong += $row['Gia'];}
                        ?>
                </tbody>
            </table>
            <footer>
                <p>Tổng:<strong style="margin-left: 620px;"> <?php echo number_format($tong); ?></strong></p>
            </footer>
        </div>
    </div>
</body>
</html>