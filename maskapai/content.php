<?php
if ($_GET[page]=='dashboard'){
	include 'dashbord.php';

/////////////////// Awal Profile ///////////////////
}elseif($_GET[page]=='profile'){
	include 'modul/profile/profile.php';
}elseif($_GET[page]=='profile_update'){
	include 'modul/profile/update.php';
/////////////////// Awal Profile ///////////////////

/////////////////// Awal pesawat ////////////////
}elseif($_GET[page]=='pesawat'){
	include 'modul/pesawat/view.php';
}elseif($_GET[page]=='pesawat_save'){
	include 'modul/pesawat/save.php';
}elseif($_GET[page]=='pesawat_delete'){
	include 'modul/pesawat/delete.php';
}elseif($_GET[page]=='pesawat_edit'){
	include 'modul/pesawat/edit.php';
}elseif($_GET[page]=='pesawat_update'){
	include 'modul/pesawat/update.php';
/////////////////// Akhir pesawat ///////////////

/////////////////// Awal penerbangan ////////////////
}elseif($_GET[page]=='penerbangan'){
	include 'modul/penerbangan/view.php';
}elseif($_GET[page]=='pnbg_save'){
	include 'modul/penerbangan/save.php';
}elseif($_GET[page]=='pnbg_delete'){
	include 'modul/penerbangan/delete.php';
}elseif($_GET[page]=='pnbg_edit'){
	include 'modul/penerbangan/edit.php';
}elseif($_GET[page]=='pnbg_update'){
	include 'modul/penerbangan/update.php';
}elseif($_GET[page]=='aktif_pnbg'){
	include 'modul/penerbangan/aktif.php';
}elseif($_GET[page]=='nonaktif_pnbg'){
	include 'modul/penerbangan/non_aktif.php';
/////////////////// Akhir penerbangan ///////////////

/////////////////// Awal harga ////////////////
}elseif($_GET[page]=='harga'){
	include 'modul/harga/view.php';
}elseif($_GET[page]=='harga_save'){
	include 'modul/harga/save.php';
}elseif($_GET[page]=='harga_delete'){
	include 'modul/harga/delete.php';
}elseif($_GET[page]=='harga_edit'){
	include 'modul/harga/edit.php';
}elseif($_GET[page]=='harga_update'){
	include 'modul/harga/update.php';
/////////////////// Akhir harga ///////////////

/////////////////// Awal transaksi ////////////////
}elseif($_GET[page]=='transaksi'){
	include 'modul/transaksi/view.php';
}elseif($_GET[page]=='proses_transaksi'){
	include 'modul/transaksi/proses.php';
}elseif($_GET[page]=='proses_update'){
	include 'modul/transaksi/update.php';
/////////////////// Akhir transaksi ///////////////


}else{
	include 'eror.php';
}
?>





