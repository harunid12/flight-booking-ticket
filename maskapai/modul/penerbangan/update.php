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
    $waktu = $_POST['jam_keberangkatan'];
    $tanggal = "$_POST[tanggal_pergi]";
    
    $tanggal = explode('/',$tanggal);
    $tgl = $tanggal[2] .'-'. $tanggal[0] .'-'. $tanggal[1];

    $q = mysqli_query($koneksi, "UPDATE penerbangan SET IDMaskapai='$_SESSION[IDMaskapai]', IDIdentitas='$IDIdentitas', IDKelas='$IDKelas', IDDari='$IDDari', IDTujuan='$IDTujuan', harga='$harga', tanggal_pergi='$tgl', jam_keberangkatan='$waktu' where IDPenerbangan='$_POST[IDPenerbangan]' ");
    
    if($q){
        echo '<script>
                    document.getElementById("wrap-tambah").innerHTML = 
                    swal({
                        title: "SUKSES",
                        text: "Data penerbangan Berhasil Diupdate",
                        type: "success",
                        showConfirmButton: false,
                        timer: 1000,   
                    },
                    function(){
                         window.location.href = "?page=penerbangan"
                    });
                </script>';
    } else {
        echo '<script>
                    document.getElementById("wrap-tambah").innerHTML = 
                    swal({
                        title: "GAGAL",
                        text: "Data penerbangan Gagal Diupdate",
                        type: "error",
                        showConfirmButton: false,
                        timer: 1000,   
                    },
                    function(){
                        window.location.href = "?page=pnbg_update"
                    });
                </script>';     
    }
    
?>

</div>
</body>
</html>