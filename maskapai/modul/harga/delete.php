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

		$hapus = $_GET['IDHarga'];
				$q = mysqli_query($koneksi, "DELETE FROM tb_harga WHERE IDHarga='$hapus'");
					 if($q){
		echo '<script>
                    document.getElementById("wrap-tambah").innerHTML = 
                    swal({
                        title: "SUKSES",
                        text: "Data harga Berhasil Dihapus",
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
                        text: "Data harga Gagal Dihapus",
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
<!---------------------------------- Akhir HAPUS MAHASISWA ---------------------------------->
</div>
</body>
</html>