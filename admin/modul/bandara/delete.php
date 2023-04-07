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

		$hapus = $_GET['IDBandara'];
				$q = mysqli_query($koneksi, "DELETE FROM tb_bandara WHERE IDBandara='$hapus'");
					 if($q){
		echo '<script>
                    document.getElementById("wrap-tambah").innerHTML = 
                    swal({
                        title: "SUKSES",
                        text: "Data Bandara Berhasil Dihapus",
                        type: "success",
                        showConfirmButton: false,
                        timer: 1000,   
                    },
                    function(){
                         window.location.href = "?page=bandara"
                    });
                </script>';
	} else {
		echo '<script>
                    document.getElementById("wrap-tambah").innerHTML = 
                    swal({
                        title: "GAGAL",
                        text: "Data Bandara Gagal Dihapus",
                        type: "error",
                        showConfirmButton: false,
                        timer: 1000,   
                    },
                    function(){
                        window.location.href = "?page=bandara"
                    });
                </script>';		
	}
	?>
<!---------------------------------- Akhir HAPUS MAHASISWA ---------------------------------->
</div>
</body>
</html>