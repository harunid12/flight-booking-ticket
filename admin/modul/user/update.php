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

    $q = mysql_query("UPDATE tb_user SET nama_user='$_POST[nama]', tempat_lahir='$_POST[tempat_lahir]', tgl_lahir='$_POST[tgl_lahir]', alamat='$_POST[alamat]', telp='$_POST[telp]', level='$_POST[level]' where id='$_POST[id]' ");
    
    if($q){
		echo '<script>
                    document.getElementById("wrap-tambah").innerHTML = 
                    swal({
                        title: "SUKSES",
                        text: "Data User Berhasil Diupdate",
                        type: "success",
                        showConfirmButton: false,
                        timer: 4000,   
                    },
                    function(){
                         window.location.href = "?page=user"
                    });
                </script>';
	} else {
		echo '<script>
                    document.getElementById("wrap-tambah").innerHTML = 
                    swal({
                        title: "GAGAL",
                        text: "Data User Gagal Diupdate",
                        type: "error",
                        showConfirmButton: false,
                        timer: 4000,   
                    },
                    function(){
                        window.location.href = "?page=user"
                    });
                </script>';		
	}
    
?>

</div>
</body>
</html>