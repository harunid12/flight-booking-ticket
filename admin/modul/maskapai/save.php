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
$nama = htmlspecialchars($_POST['nama_maskapai']);
$icon = $_FILES['icon']['name'];
    
    if($icon !=""){
        $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg', 'gif');
        $x = explode('.', $icon);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['icon']['tmp_name'];
        $angka_acak = rand(1, 9999);
        $nama_gambar_baru = $angka_acak.'-'.$icon;
        if(in_array($ekstensi, $ekstensi_diperbolehkan) == true){
            copy($file_tmp, '../images/icon_maskapai/'.$nama_gambar_baru);
            
         $query = "INSERT INTO maskapai (nama_maskapai,icon) VALUES ('$nama', '$nama_gambar_baru')";
         $q = mysqli_query($koneksi, $query);
            $_SESSION['qq'] = $query;
        if($q){
        echo '<script>
                    document.getElementById("wrap-tambah").innerHTML = 
                    swal({
                        title: "SUKSES",
                        text: "maskapai Berhasil Ditambah",
                        type: "success",
                        showConfirmButton: false,
                        timer: 1000,   
                    },
                    function(){
                        window.location.href = "?page=maskapai"
                    });
                </script>';
        } else {
        echo '<script>
                    document.getElementById("wrap-tambah").innerHTML = 
                    swal({
                        title: "GAGAL",
                        text: "maskapai Gagal Ditambahkan : '.$query.'",
                        type: "error",
                        showConfirmButton: false,
                        timer: 10000,   
                    },
                    function(){
                        window.location.href = "?page=maskapai"
                    });
                </script>';     
            } 
        }
    }
    
?>

</div>
</body>
</html>