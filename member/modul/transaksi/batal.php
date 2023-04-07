<html>
<!--SweetAlert Needed-->
<link rel="stylesheet" type="text/css" href="../alert/css/sweetalert.css">
<script src="../alert/js/sweetalert-dev.js"></script>
<script src="../alert/js/sweetjs.min"></script>
<!--End SweetAlert Needed-->
</body>

<div id="wraptambah">

<!---------------------------------- HAPUS MAHASISWA ---------------------------------->
<?php

		$update = $_GET['IDPemesan'];
				$q = mysqli_query($koneksi, "UPDATE tb_pemesan SET status_pembatalan='1' WHERE IDPemesan='$update'");
					 if($q){
		echo '<script>
                    document.getElementById("wrap-tambah").innerHTML = 
                    swal({
                        title: "SUKSES",
                        text: "Data transaksi Berhasil Dibatalkan",
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
                        text: "Data transaksi Gagal Dibatalkan",
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
<!---------------------------------- Akhir HAPUS MAHASISWA ---------------------------------->
</div>
</body>
</html>