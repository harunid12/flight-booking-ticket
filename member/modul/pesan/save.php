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
$nama_depan = htmlspecialchars($_POST['nama_depan']);
$nama_belakang = htmlspecialchars($_POST['nama_belakang']);
$telp = htmlspecialchars($_POST['telp']);
$email = htmlspecialchars($_POST['email']);
$nik = htmlspecialchars($_POST['nik']);
$IDPenerbangan = $_POST['IDPenerbangan'];

    $q = mysqli_query($koneksi, "INSERT INTO tb_pemesan (IDPenerbangan, nama_depan, nama_belakang, telp, email, nik) VALUES ('$IDPenerbangan', '$nama_depan', '$nama_belakang', '$telp', '$email', '$nik')"); 
    
    if($q){
        echo '<script>
                    document.getElementById("wrap-tambah").innerHTML = 
                    swal({
                        title: "SUKSES",
                        text: "Data pesanan Berhasil Ditambah",
                        type: "success",
                        showConfirmButton: false,
                        timer: 1000,   
                    },
                    function(){
                        window.location.href = "?page=transaksi"
                    });
                </script>';
    } else {
        echo '<script>
                    document.getElementById("wrap-tambah").innerHTML = 
                    swal({
                        title: "GAGAL",
                        text: "Data pesanan Gagal Ditambahkan",
                        type: "error",
                        showConfirmButton: false,
                        timer: 1000,   
                    },
                    function(){
                        window.location.href = "?page=transaksi"
                    });
                </script>';     
    }
    
?>

</div>
</body>
</html>