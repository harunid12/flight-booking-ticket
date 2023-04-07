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
$nama = htmlspecialchars($_POST['nama_bandara']);
$alias = htmlspecialchars($_POST['alias']);

    $q = mysqli_query($koneksi, "INSERT INTO tb_bandara (nama_bandara, alias) VALUES ('$nama', '$alias')");
    
    if($q){
        echo '<script>
                    document.getElementById("wrap-tambah").innerHTML = 
                    swal({
                        title: "SUKSES",
                        text: "Data Bandara Berhasil Ditambah",
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
                        text: "Data Bandara Gagal Ditambahkan",
                        type: "error",
                        showConfirmButton: false,
                        timer: 1000,   
                    },
                    function(){
                        window.location.href = "?page=bandara"
                    });
                </script>';     
    }
    
?>

</div>
</body>
</html>