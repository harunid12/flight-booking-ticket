<?php
if ($_GET[page]=='dashboard'){
	include 'dashbord.php';

/////////////////// Awal Profile ///////////////////
}elseif($_GET[page]=='profile'){
	include 'modul/profile/profile.php';
}elseif($_GET[page]=='profile_update'){
	include 'modul/profile/update.php';
/////////////////// Awal Profile ///////////////////

/////////////////// Awal Mahasiswa ////////////////
}elseif($_GET[page]=='mahasiswa'){
	include 'modul/mahasiswa/view.php';
}elseif($_GET[page]=='mahasiswa_save'){
	include 'modul/mahasiswa/save.php';
}elseif($_GET[page]=='mahasiswa_delete'){
	include 'modul/mahasiswa/delete.php';
}elseif($_GET[page]=='mahasiswa_edit'){
	include 'modul/mahasiswa/edit.php';
}elseif($_GET[page]=='mahasiswa_update'){
	include 'modul/mahasiswa/update.php';
/////////////////// Akhir Mahasiswa ///////////////

/////////////////// Awal User  ///////////////////

}elseif($_GET[page]=='user'){
	include 'modul/user/view.php';
}elseif($_GET[page]=='user_save'){
	include 'modul/user/save.php';
}elseif($_GET[page]=='user_delete'){
	include 'modul/user/delete.php';

/////////////////// Akhir User  ///////////////////

/////////////////// Awal User maskapai ///////////////////

}elseif($_GET[page]=='user_maskapai'){
	include 'modul/um_maskapai/view.php';
}elseif($_GET[page]=='um_save'){
	include 'modul/um_maskapai/save.php';
}elseif($_GET[page]=='um_delete'){
	include 'modul/um_maskapai/delete.php';

/////////////////// Akhir User maskapai  ///////////////////

/////////////////// Awal dari ////////////////
}elseif($_GET[page]=='asal'){
	include 'modul/asal/view.php';
}elseif($_GET[page]=='asal_save'){
	include 'modul/asal/save.php';
}elseif($_GET[page]=='asal_delete'){
	include 'modul/asal/delete.php';
}elseif($_GET[page]=='asal_edit'){
	include 'modul/asal/edit.php';
}elseif($_GET[page]=='asal_update'){
	include 'modul/asal/update.php';
/////////////////// Akhir dari ///////////////

/////////////////// Awal Tujuan ////////////////
}elseif($_GET[page]=='tujuan'){
	include 'modul/tujuan/view.php';
}elseif($_GET[page]=='tujuan_save'){
	include 'modul/tujuan/save.php';
}elseif($_GET[page]=='tujuan_delete'){
	include 'modul/tujuan/delete.php';
}elseif($_GET[page]=='tujuan_edit'){
	include 'modul/tujuan/edit.php';
}elseif($_GET[page]=='tujuan_update'){
	include 'modul/tujuan/update.php';
/////////////////// Akhir Tujuan ///////////////

/////////////////// Awal bandara ////////////////
}elseif($_GET[page]=='bandara'){
	include 'modul/bandara/view.php';
}elseif($_GET[page]=='bandara_save'){
	include 'modul/bandara/save.php';
}elseif($_GET[page]=='bandara_delete'){
	include 'modul/bandara/delete.php';
}elseif($_GET[page]=='bandara_edit'){
	include 'modul/bandara/edit.php';
}elseif($_GET[page]=='bandara_update'){
	include 'modul/bandara/update.php';
/////////////////// Akhir bandara ///////////////

/////////////////// Awal maskapai ////////////////
}elseif($_GET[page]=='maskapai'){
	include 'modul/maskapai/view.php';
}elseif($_GET[page]=='maskapai_save'){
	include 'modul/maskapai/save.php';
}elseif($_GET[page]=='maskapai_delete'){
	include 'modul/maskapai/delete.php';
}elseif($_GET[page]=='maskapai_edit'){
	include 'modul/maskapai/edit.php';
}elseif($_GET[page]=='maskapai_update'){
	include 'modul/maskapai/update.php';
/////////////////// Akhir maskapai ///////////////

/////////////////// Awal bank ////////////////
}elseif($_GET[page]=='bank'){
	include 'modul/bank/view.php';
}elseif($_GET[page]=='bank_save'){
	include 'modul/bank/save.php';
}elseif($_GET[page]=='bank_delete'){
	include 'modul/bank/delete.php';
}elseif($_GET[page]=='bank_edit'){
	include 'modul/bank/edit.php';
}elseif($_GET[page]=='bank_update'){
	include 'modul/bank/update.php';
/////////////////// Akhir bank ///////////////

}else{
	include 'eror.php';
}
?>





