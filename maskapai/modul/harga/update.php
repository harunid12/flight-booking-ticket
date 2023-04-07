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

    $q = mysqli_query($koneksi, "UPDATE tb_harga SET IDIdentitas='$IDIdentitas', IDKelas='$IDKelas', IDDari='$IDDari', IDTujuan='$IDTujuan', harga='$harga' where IDHarga='$_POST[IDHarga]' ");
    
    if($q){
        echo '<script>
                    document.getElementById("wrap-tambah").innerHTML = 
                    swal({
                        title: "SUKSES",
                        text: "Data harga Berhasil Diupdate",
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
                        text: "Data harga Gagal Diupdate",
                        type: "error",
                        showConfirmButton: false,
                        timer: 1000,   
                    },
                    function(){
                        window.location.href = "?page=harga_update"
                    });
                </script>';     
    }
    
?>

</div>
</body>
</html>