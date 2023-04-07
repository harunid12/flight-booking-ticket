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
    $an_bank = htmlspecialchars($_POST['an_bank']);
    $no_rek = htmlspecialchars($_POST['no_rek']);

    $q = mysqli_query($koneksi, "UPDATE akun_bank SET IDMaskapai='$IDMaskapai', an_bank='$an_bank', no_rek='$no_rek'  where IDAkun='$_POST[IDAkun]' ");
    
    if($q){
        echo '<script>
                    document.getElementById("wrap-tambah").innerHTML = 
                    swal({
                        title: "SUKSES",
                        text: "Data Bank Berhasil Diupdate",
                        type: "success",
                        showConfirmButton: false,
                        timer: 1000,   
                    },
                    function(){
                         window.location.href = "?page=bank"
                    });
                </script>';
    } else {
        echo '<script>
                    document.getElementById("wrap-tambah").innerHTML = 
                    swal({
                        title: "GAGAL",
                        text: "Data Bank Gagal Diupdate",
                        type: "error",
                        showConfirmButton: false,
                        timer: 1000,   
                    },
                    function(){
                        window.location.href = "?page=bank"
                    });
                </script>';     
    }
    
?>

</div>
</body>
</html>