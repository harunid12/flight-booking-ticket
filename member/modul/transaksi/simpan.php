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
$IDPenerbangan = $_POST['IDPenerbangan'];
$IDPemesan = $_POST['IDPemesan'];
$bukti = $_FILES['bukti']['name'];
    
    if($bukti !=""){
        $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg', 'gif');
        $x = explode('.', $bukti);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['bukti']['tmp_name'];
        $angka_acak = rand(1, 9999);
        $nama_gambar_baru = $angka_acak.'-'.$bukti;
        if(in_array($ekstensi, $ekstensi_diperbolehkan) == true){
            copy($file_tmp, '../images/bukti_pembayaran/'.$nama_gambar_baru);
            
         $query = "INSERT INTO tb_pembayaran (IDPenerbangan, IDPemesan, bukti) VALUES ('$IDPenerbangan', '$IDPemesan', '$nama_gambar_baru')";
         $q = mysqli_query($koneksi, $query);
            $_SESSION['qq'] = $query;
         $query2 = "UPDATE tb_pemesan SET status_pembayaran='2' WHERE IDPemesan='$IDPemesan'";
         $q = mysqli_query($koneksi, $query2);
            $_SESSION['qq'] = $query2;
        if($q){
        echo '<script>
                    document.getElementById("wrap-tambah").innerHTML = 
                    swal({
                        title: "SUKSES",
                        text: "pembayaran Berhasil dibuat",
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
                        text: "pembayaran Gagal dibuat : '.$query.'",
                        type: "error",
                        showConfirmButton: false,
                        timer: 10000,   
                    },
                    function(){
                        window.location.href = "?page=transaksi"
                    });
                </script>';     
            } 
        }
    }
    
?>

</div>
</body>
</html>