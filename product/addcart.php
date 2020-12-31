<?php
    session_start();
    require_once('../resoures/dbhelp.php');
    $sql = 'SELECT * FROM GioHang';

    $products = executeResult($sql);
    $maSP = $_GET['MaSP'];
    if (isset($_SESSION['cart'][$maSP])) {
        $_SESSION['cart'][$maSP]['SoLuong']++;
        setcookie('them','dyyhjj',time()+2);
    }else {
        $product = $products[$maSP];
        setcookie('them','success',time()+2);

        $product['SoLuong'] = 1;
        $_SESSION[$maSP] = $product;
    }

    header('Location: cart.php');
?>