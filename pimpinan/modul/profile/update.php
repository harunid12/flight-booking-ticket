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
        $nama_user = htmlspecialchars($_POST['nama_user']);
        $tempat_lahir = htmlspecialchars($_POST['tempat_lahir']);
        $alamat = htmlspecialchars($_POST['alamat']);
        $telp = htmlspecialchars($_POST['telp']);
        $tgl = "$_POST[tgl_lahir]";
        if (!empty($_POST['password'])){

            $password = md5($_POST['password']);
            $q = mysqli_query($koneksi, "UPDATE tb_user SET nama_user='$nama_user', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl', alamat='$alamat', telp='$telp', password='$password' where id='$_POST[id]' ");
            
        }else{
            $q = mysqli_query($koneksi, "UPDATE tb_user SET nama_user='$nama_user', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl', alamat='$alamat', telp='$telp' where id='$_POST[id]' ");
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