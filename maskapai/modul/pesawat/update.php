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

    $jenis_pesawat = htmlspecialchars($_POST['jenis_pesawat']);
    $seri_pesawat = htmlspecialchars($_POST['seri_pesawat']);
    $tata_kursi = htmlspecialchars($_POST['tata_kursi']);
    $jarak_kursi = htmlspecialchars($_POST['jarak_kursi']);

    $q = mysqli_query($koneksi, "UPDATE tb_pesawat SET  IDMaskapai='$_SESSION[IDMaskapai]', jenis_pesawat='$jenis_pesawat', seri_pesawat='$seri_pesawat', tata_kursi='$tata_kursi', jarak_kursi='$jarak_kursi' where IDIdentitas='$_POST[IDIdentitas]' ");
    
    if($q){
        echo '<script>
                    document.getElementById("wrap-tambah").innerHTML = 
                    swal({
                        title: "SUKSES",
                        text: "Data pesawat Berhasil Diupdate",
                        type: "success",
                        showConfirmButton: false,
                        timer: 1000,   
                    },
                    function(){
                         window.location.href = "?page=pesawat"
                    });
                </script>';
    } else {
        echo '<script>
                    document.getElementById("wrap-tambah").innerHTML = 
                    swal({
                        title: "GAGAL",
                        text: "Data pesawat Gagal Diupdate",
                        type: "error",
                        showConfirmButton: false,
                        timer: 1000,   
                    },
                    function(){
                        window.location.href = "?page=pesawat_update"
                    });
                </script>';     
    }
    
?>

</div>
</body>
</html>