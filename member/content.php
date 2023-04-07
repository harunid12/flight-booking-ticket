<?php
if ($_GET[page]=='dashboard'){
	include 'dashbord.php';

/////////////////// Awal Profile ///////////////////
}elseif($_GET[page]=='profile'){
	include 'modul/profile/profile.php';
}elseif($_GET[page]=='profile_update'){
	include 'modul/profile/update.php';
/////////////////// Awal Profile ///////////////////

/////////////////// Awal pesan ////////////////
}elseif($_GET[page]=='pesan'){
	include 'modul/pesan/view.php';
}elseif($_GET[page]=='pnbg_detail'){
	include 'modul/pesan/detail_penerbangan.php';
}elseif($_GET[page]=='pemesanan'){
	include 'modul/pesan/pemesanan.php';
}elseif($_GET[page]=='pemesanan_save'){
	include 'modul/pesan/save.php';
/////////////////// Akhir pesan ///////////////

/////////////////// Awal transaksi ////////////////
}elseif($_GET[page]=='transaksi'){
	include 'modul/transaksi/view.php';
}elseif($_GET[page]=='pembayaran'){
	include 'modul/transaksi/pembayaran.php';
}elseif($_GET[page]=='pembayaran_simpan'){
	include 'modul/transaksi/simpan.php';
}elseif($_GET[page]=='transaksi_batal'){
	include 'modul/transaksi/batal.php';
/////////////////// Akhir transaksi ///////////////

/////////////////// Awal transaksi ////////////////
}elseif($_GET[page]=='tiket'){
	include 'modul/tiket/view.php';
/////////////////// Akhir transaksi ///////////////

}else{
	include 'eror.php';
}
?>





