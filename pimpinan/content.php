<?php
if ($_GET[page]=='dashboard'){
	include 'dashbord.php';

/////////////////// Awal Profile ///////////////////
}elseif($_GET[page]=='profile'){
	include 'modul/profile/profile.php';
}elseif($_GET[page]=='profile_update'){
	include 'modul/profile/update.php';
/////////////////// Awal Profile ///////////////////


}else{
	include 'eror.php';
}
?>





