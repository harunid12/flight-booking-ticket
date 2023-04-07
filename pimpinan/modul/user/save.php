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
$nama = htmlspecialchars($_POST['nama_user']);
$tempat_lahir = htmlspecialchars($_POST['tempat_lahir']);
$alamat = htmlspecialchars($_POST['alamat']);
$telp = htmlspecialchars($_POST['telp']);
$username = htmlspecialchars($_POST['username']);
$tanggal = "$_POST[tgl_lahir]";

$tanggal = explode('/',$tanggal);
$tgl = $tanggal[2] .'-'. $tanggal[0] .'-'. $tanggal[1];

    $q = mysqli_query($koneksi, "INSERT INTO tb_user (id, nama_user, tempat_lahir, tgl_lahir, alamat, telp, username, password) VALUES ('', '$nama', '$tempat_lahir', '$tgl', '$alamat', '$telp', '$username', md5('$username'))"); 
    
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
                        window.location.href = "?page=user"
                    });
                </script>';
    } else {
        echo '<script>
                    document.getElementById("wrap-tambah").innerHTML = 
                    swal({
                        title: "GAGAL",
                        text: "Data User Gagal Ditambahkan",
                        type: "error",
                        showConfirmButton: false,
                        timer: 1000,   
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