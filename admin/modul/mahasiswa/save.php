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
$nama = htmlspecialchars($_POST['nama']);
$nim = htmlspecialchars($_POST['nim']);
$jenis_kelamin = "$_POST[jenis_kelamin]";
$agama = htmlspecialchars($_POST['agama']);
$alamat = htmlspecialchars($_POST['alamat']);
$tanggal = "$_POST[tgl_lahir]";

$tanggal = explode('/',$tanggal);
$tgl = $tanggal[2] .'-'. $tanggal[0] .'-'. $tanggal[1];

    $q = mysqli_query($koneksi, "INSERT INTO mahasiswa (id, nama, nim, jenis_kelamin, tgl_lahir, agama, alamat) VALUES ('', '$nama', '$nim', '$jenis_kelamin', '$tgl' , '$agama', '$alamat')");
    
    if($q){
        echo '<script>
                    document.getElementById("wrap-tambah").innerHTML = 
                    swal({
                        title: "SUKSES",
                        text: "Data Mahasiswa Berhasil Ditambah",
                        type: "success",
                        showConfirmButton: false,
                        timer: 1000,
                    },
                    function(){
                        window.location.href = "?page=mahasiswa"
                    });
                </script>';
    } else {
        echo '<script>
                    document.getElementById("wrap-tambah").innerHTML = 
                    swal({
                        title: "GAGAL",
                        text: "Data Mahasiswa Gagal Ditambahkan",
                        type: "error",
                        showConfirmButton: false,
                        timer: 1000,   
                    },
                    function(){
                        window.location.href = "?page=mahasiswa"
                    });
                </script>';     
    }
    
?>

</div>
</body>
</html>