<?php
session_start();

include("dist/config/koneksi.php");

if(isset($_POST['login'])) {
	
	if(empty($_POST['username']) || empty($_POST['password'])) {
		
		header("location: login.php?err=empty");
	}
	else {
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		$akses = $_POST['akses'];
		
		$username = htmlentities(trim(strip_tags($username)));
		$password = htmlentities(trim(strip_tags($password)));
			

			if($akses=="Admin"){			
				$sql = "SELECT * FROM admin WHERE user_adm='". $username ."' AND pass_adm='". $password ."'";
				$ress = mysqli_query($conn, $sql);
				$rows = mysqli_num_rows($ress);
				$dataku = mysqli_fetch_array($ress);
				
				if($rows == 1) {
					
					$_SESSION['admin'] = strtolower($dataku['id_adm']);
					
					header("location: index.php?login=success");
				}else{
					header("location: login.php?err=not_found");
				}
				}else if($akses=="Mng"){			
				$aks = "Mahasiswa";
				$sql = "SELECT * FROM employee WHERE hak_akses='".$aks."' AND npp='". $username ."' AND password='". $password ."'";
				$ress = mysqli_query($conn, $sql);
				$rows = mysqli_num_rows($ress);
				$dataku = mysqli_fetch_array($ress);
				if($rows == 1) {
					
					$_SESSION['mahasiswa'] = strtolower($dataku['npp']);
					
					header("location: mahasiswa/index.php?login=success");
				}else{
					header("location: login.php?err=not_found");
				}
				}
	}
}
?>