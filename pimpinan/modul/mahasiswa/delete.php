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

		$hapus = $_GET['id'];
				$q = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id='$hapus'");
					 if($q){
		echo '<script>
                    document.getElementById("wrap-tambah").innerHTML = 
                    swal({
                        title: "SUKSES",
                        text: "Data mahasiswa Berhasil Dihapus",
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
                        text: "Data mahasiswa Gagal Dihapus",
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
<!---------------------------------- Akhir HAPUS MAHASISWA ---------------------------------->
</div>
</body>
</html>