<html>
<!--SweetAlert Needed-->
<link rel="stylesheet" type="text/css" href="alert/css/sweetalert.css">
<script src="alert/js/sweetalert-dev.js"></script>
<script src="alert/js/sweetjs.min"></script>
<!--End SweetAlert Needed-->
</body>

<div id="wraptambah">


<?php
include "config/koneksi.php";
$nama = htmlspecialchars($_POST['nama']);
$username = htmlspecialchars($_POST['username']);
$password = $_POST['password'];

    $q = mysqli_query($koneksi, "INSERT INTO user (IDUser, nama, username, password, level) VALUES ('', '$nama', '$username', md5('$password'), '3')"); 
    // var_dump($q);
    
    if($q){
        echo '<script>
                    document.getElementById("wrap-tambah").innerHTML = 
                    swal({
                        title: "SUKSES",
                        text: "berhasil mendaftar",
                        type: "success",
                        showConfirmButton: false,
                        timer: 1000,
                    },
                    function(){
                        window.location.href = "index.php"
                    });
                </script>';
    } else {
        echo '<script>
                    document.getElementById("wrap-tambah").innerHTML = 
                    swal({
                        title: "GAGAL",
                        text: "gagal mendaftar",
                        type: "error",
                        showConfirmButton: false,
                        timer: 1000,   
                    },
                    function(){
                        window.location.href = "regis.php"
                    });
                </script>';     
    }
    
?>

</div>
</body>
</html>