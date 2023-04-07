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
$IDIdentitas = $_POST['IDIdentitas'];
$IDKelas = $_POST['IDKelas'];
$IDDari = $_POST['IDDari'];
$IDTujuan = $_POST['IDTujuan'];
$harga = $_POST['harga'];

    $q = mysqli_query($koneksi, "INSERT INTO tb_harga (IDIdentitas, IDKelas, IDDari, IDTujuan, harga) VALUES ('$IDIdentitas', '$IDKelas', '$IDDari', '$IDTujuan', '$harga')"); 
    
    if($q){
        echo '<script>
                    document.getElementById("wrap-tambah").innerHTML = 
                    swal({
                        title: "SUKSES",
                        text: "Data harga Berhasil Ditambah",
                        type: "success",
                        showConfirmButton: false,
                        timer: 1000,   
                    },
                    function(){
                        window.location.href = "?page=harga"
                    });
                </script>';
    } else {
        echo '<script>
                    document.getElementById("wrap-tambah").innerHTML = 
                    swal({
                        title: "GAGAL",
                        text: "Data harga Gagal Ditambahkan",
                        type: "error",
                        showConfirmButton: false,
                        timer: 1000,   
                    },
                    function(){
                        window.location.href = "?page=harga"
                    });
                </script>';     
    }
    
?>

</div>
</body>
</html>