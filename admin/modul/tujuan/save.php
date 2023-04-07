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
$lokasi = htmlspecialchars($_POST['lokasi']);
$alias = htmlspecialchars($_POST['alias']);
$IDBandara = $_POST['IDBandara'];

    $q = mysqli_query($koneksi, "INSERT INTO tb_tujuan (IDTujuan, IDBandara, lokasi, alias) VALUES ('', '$IDBandara','$lokasi', '$alias')");
    
    if($q){
        echo '<script>
                    document.getElementById("wrap-tambah").innerHTML = 
                    swal({
                        title: "SUKSES",
                        text: "Data Lokasi Berhasil Ditambah",
                        type: "success",
                        showConfirmButton: false,
                        timer: 1000,
                    },
                    function(){
                        window.location.href = "?page=tujuan"
                    });
                </script>';
    } else {
        echo '<script>
                    document.getElementById("wrap-tambah").innerHTML = 
                    swal({
                        title: "GAGAL",
                        text: "Data Lokasi Gagal Ditambahkan",
                        type: "error",
                        showConfirmButton: false,
                        timer: 1000,   
                    },
                    function(){
                        window.location.href = "?page=tujuan"
                    });
                </script>';     
    }
    
?>

</div>
</body>
</html>