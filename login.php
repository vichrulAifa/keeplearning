<?php
	include "koneksi.php";
	session_start();
	$user		= $_POST['id_user'];
	$password		= md5($_POST['password']);
	$op 			= $_GET['op'];

	if($op=="in"){
		$sql = mysqli_query($konek, "SELECT * FROM user WHERE nama='$user' AND password='$password'");
		 $cek = mysqli_num_rows($sql);
		if($cek>0){
			$qry = mysqli_fetch_array($sql);
			$_SESSION['id_user'] = $qry['id_user'];
			$_SESSION['password'] = $qry['password'];
			$_SESSION['nama'] = $qry['nama'];

			if($qry){
				header("location:index.php");
			}
		}
		else{
			echo "Username atau password tidak sesuai ...! &nbsp; <button type='button' onclick=location.href='indexx.php'>Back</button>";
		}
	}else if($op=="out"){
		unset($_SESSION['id_user']);
		header("location:indexx.php");
	}
?>