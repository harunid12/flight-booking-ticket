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

    $nama_bandara = htmlspecialchars($_POST['nama_bandara']);
    $alias = htmlspecialchars($_POST['alias']);

    $q = mysqli_query($koneksi, "UPDATE tb_bandara SET  nama_bandara='$nama_bandara', alias='$alias' where IDBandara='$_POST[IDBandara]' ");
    
    if($q){
        echo '<script>
                    document.getElementById("wrap-tambah").innerHTML = 
                    swal({
                        title: "SUKSES",
                        text: "Data Bandara Berhasil Diupdate",
                        type: "success",
                        showConfirmButton: false,
                        timer: 1000,   
                    },
                    function(){
                         window.location.href = "?page=bandara"
                    });
                </script>';
    } else {
        echo '<script>
                    document.getElementById("wrap-tambah").innerHTML = 
                    swal({
                        title: "GAGAL",
                        text: "Data Bandara Gagal Diupdate",
                        type: "error",
                        showConfirmButton: false,
                        timer: 1000,   
                    },
                    function(){
                        window.location.href = "?page=bandara_update"
                    });
                </script>';     
    }
    
?>

</div>
</body>
</html>