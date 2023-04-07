<?php 
// mengaktifkan session php
 
// menghubungkan dengan koneksi
include 'config/koneksi.php';
 
// menangkap data yang dikirim dari form
$username = mysqli_real_escape_string($koneksi, $_POST["username"]);
$password = mysqli_real_escape_string($koneksi, md5($_POST["password"]));
 
// menyeleksi data admin dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "SELECT * FROM user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
$data = mysqli_fetch_array($login);

$login2 = mysqli_query($koneksi, "SELECT * FROM user_maskapai where username='$username' and password='$password'");
$cek2 = mysqli_num_rows($login2);
$data2 = mysqli_fetch_array($login2);


	if($cek or $cek2 > 0){
		session_start();
		include "timeout.php";
		$_SESSION['IDUser'] = $data['IDUser'];
		$_SESSION['username'] = $data['username'];
		$_SESSION['IDUserMaskapai'] = $data2['IDUserMaskapai'];
		$_SESSION['IDMaskapai'] = $data2['IDMaskapai'];
		$_SESSION['m_username'] = $data2['username'];
		timer();
		if($data['level'] == 1){
			header("location:admin/media.php?page=dashboard");
		}
		elseif ($data['level'] == 2) {
			header("location:pimpinan/media.php?page=dashboard");
		}
		elseif ($data['level'] == 3) {
			header("location:member/media.php?page=dashboard");
		}
		elseif ($cek2) {
			header("location:maskapai/media.php?page=dashboard");
		}
	}else{
		echo "<script>parent.location ='index.php?result=error';</script>";
	}



//     $_SESSION['username'] = $username;
//     $_SESSION['IDAdmin'] = "login";
//     header("location:admin/media.php?page=dashboard");
// }elseif ($cek2 > 0) {
// 	 $_SESSION['username'] = $username;
//      $_SESSION['status'] = "login";
//      header("location:rumah_asuh/media.php?page=dashboard");
// }else{
    // header("<script>parent.location ='index.php?result=error';</script>");
// }
?>