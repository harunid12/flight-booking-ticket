<html>
<!--SweetAlert Needed-->
<link rel="stylesheet" type="text/css" href="../alert/css/sweetalert.css">
<script src="../alert/js/sweetalert-dev.js"></script>
<script src="../alert/js/sweetjs.min"></script>
<!--End SweetAlert Needed-->
</body>

<div id="wraptambah">

<!---------------------------------- HAPUS maskapai ---------------------------------->
<?php

		$hapus = $_GET['IDAkun'];
				$q = mysqli_query($koneksi, "DELETE FROM akun_bank WHERE IDAkun='$hapus'");
					 if($q){
		echo '<script>
                    document.getElementById("wrap-tambah").innerHTML = 
                    swal({
                        title: "SUKSES",
                        text: "Data bank Berhasil Dihapus",
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
                        text: "Data bank Gagal Dihapus",
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
<!---------------------------------- Akhir HAPUS bank ---------------------------------->
</div>
</body>
</html>