<?php  
	
	include "config/connect.php";

	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$select = mysql_query("SELECT * FROM user WHERE username = '$username' AND password='$password'");
	$login = mysql_fetch_array($select);

	if ($login['username'] == $username && $login['password'] == $password) {
		
		session_start();
		$_SESSION['username'] 	= $login['username'];
		$_SESSION['password']	= $login['password'];
		$_SESSION['nama']		= $login['nama'];
		$_SESSION['desk']		= $login['deskripsi'];
		$_SESSION['level']		= $login['level'];
		$_SESSION['NIK'] 		= $login['NIK'];
		
		if ($login['level'] == 1) {
			header('location:dashboard.php');
		}	
		else if($login['level'] == 2){
			header('location:dashboard.php');
		}
		else{
			header('location:peserta_seleksi.php');
		}
	}

	else {

		header('location:index.php');
	}	
?>