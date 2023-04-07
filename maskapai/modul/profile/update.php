<html>
<!--SweetAlert Needed-->
<link rel="stylesheet" type="text/css" href="../alert/css/sweetalert.css">
<script src="../alert/js/sweetalert-dev.js"></script>
<script src="../alert/js/sweetjs.min"></script>
<!--End SweetAlert Needed-->
</body>

<div id="wraptambah">


<?php
  include "../config/koneksi.php";
        $nama = htmlspecialchars($_POST['nama']);


        if (!empty($_POST['password'])){

            $password = md5($_POST['password']);
            $q = mysqli_query($koneksi, "UPDATE user_maskapai SET nama='$nama', password='$password' where IDUserMaskapai='$_SESSION[IDUserMaskapai]' ");
            
        }else{
            $q = mysqli_query($koneksi, "UPDATE user_maskapai SET nama='$nama' where IDUserMaskapai='$_SESSION[IDUserMaskapai]' ");
        }      
    if($q){
		echo '<script>
                    document.getElementById("wrap-tambah").innerHTML = 
                    swal({
                        title: "SUKSES",
                        text: "Data Anda Berhasil Diupdate",
                        type: "success",
                        showConfirmButton: false,
                        timer: 1000,   
                    },
                    function(){
                         window.location.href = "?page=profile"
                    });
                </script>';
	} else {
		echo '<script>
                    document.getElementById("wrap-tambah").innerHTML = 
                    swal({
                        title: "GAGAL",
                        text: "Data Anda Gagal Diupdate",
                        type: "error",
                        showConfirmButton: false,
                        timer: 1000,   
                    },
                    function(){
                        window.location.href = "?page=profile"
                    });
                </script>';		
	}
    
?>

</div>
</body>
</html>