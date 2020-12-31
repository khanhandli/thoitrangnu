<?php
    require_once('../resoures/dbhelp.php');
    session_start();

    $maSP = $_GET['MaSP'];

    if($_SESSION[$maSP]['SoLuong'] > 1) {
        $_SESSION[$maSP]['SoLuong']--;
        setcookie('xoa', 'as',time()+3);
    }else {
        unset($_SESSION[$maSP]);
        setcookie('xoa','as',time()+3);
    }
    header('Location: cart.php');
?>