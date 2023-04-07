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
$IDMaskapai = $_POST['IDMaskapai'];
$nama = htmlspecialchars($_POST['nama']);
$username = htmlspecialchars($_POST['username']);

    $q = mysqli_query($koneksi, "INSERT INTO user_maskapai (IDUserMaskapai, IDMaskapai, nama, username, password) VALUES ('', '$IDMaskapai', '$nama', '$username', md5('$username'))"); 
    
    if($q){
        echo '<script>
                    document.getElementById("wrap-tambah").innerHTML = 
                    swal({
                        title: "SUKSES",
                        text: "Data User Berhasil Ditambah",
                        type: "success",
                        showConfirmButton: false,
                        timer: 1000,   
                    },
                    function(){
                        window.location.href = "?page=user_maskapai"
                    });
                </script>';
    } else {
        echo '<script>
                    document.getElementById("wrap-tambah").innerHTML = 
                    swal({
                        title: "GAGAL",
                        text: "Data user Gagal Ditambahkan",
                        type: "error",
                        showConfirmButton: false,
                        timer: 1000,   
                    },
                    function(){
                        window.location.href = "?page=user_maskapai"
                    });
                </script>';     
    }
    
?>

</div>
</body>
</html>