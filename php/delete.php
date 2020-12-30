<?php 
	//Xoa do nu
	require_once('../resoures/dbhelp.php');
	if (isset($_POST['id'])) {
		$id = $_POST['id'];
		$sql = 'DELETE FROM DoNu WHERE id = ' . $id;
		execute($sql);

		echo "Xoá Thành Công!!";
	}
	//Xoas đồ  đôi
	if (isset($_POST['id1'])) {
		$id1 = $_POST['id1'];
		$sql = 'DELETE FROM DoDoi WHERE id = ' . $id1;
		execute($sql);

		echo "Xoá Thành Công!!";
	}
	//Xoas phụ kiện
	if (isset($_POST['id2'])) {
		$id2 = $_POST['id2'];
		$sql = 'DELETE FROM PhuKien WHERE id = ' . $id2;
		execute($sql);

		echo "Xoá Thành Công!!";
	}
	//Xoas nhân viên
	if (isset($_POST['id3'])) {
		$id3 = $_POST['id3'];
		$sql = 'DELETE FROM NhanVien WHERE id = ' . $id3;
		execute($sql);

		echo "Xoá Thành Công!!";
	}

 ?>