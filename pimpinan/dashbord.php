<html>
<!--SweetAlert Needed-->
<link rel="stylesheet" type="text/css" href="../alert/css/sweetalert.css">
<script src="../alert/js/sweetalert-dev.js"></script>
<script src="../alert/js/sweetjs.min"></script>
<!--End SweetAlert Needed-->
</body>

<div id="wraptambah"><?php 
$query = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM tb_user where id='$_SESSION[id]' "));
?>
<section class="content-header">
      <h1>
        DASHBOARD
      </h1>
      <ol class="breadcrumb">
        <li><a href="?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Here</li>
      </ol>
    </section>
    <section class="content">

      <!-- Default box -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Selamat Datang ...</h3>

          <div class="box-tools pull-right">
          </div>
        </div>
        <div class="box-body">
         <?php
  echo "<br><p>Hai $query[nama_user], Selamat Datang di halaman ".$_CONFIG['appname'].". <br> Silahkan klik menu pilihan yang berada di sebelah kiri untuk mengelola akun anda.</p><br>
  <br>
  <br>
  <b><table width='200px'>
    <tr>
      <td width='60px'>Hari</td>
      <td width='8px'>: </td>
      <td>$hari_s</td>
    </tr>
        <tr>
      <td>Jam</td>
      <td>:</td>
      <td>".date('H:i')." WIB</td>
    </tr>
        <tr>
      <td>Hari Ini</td>
      <td>:</td>
      <td> ".getTglIndo(date('Y m d'))."</td>
    </tr>
  </table></b>
<br>
<br>
<br>
<br>

  <b><u>Contact Us :</u><br>
  ".$_CONFIG['owner'].'<br>'.$_CONFIG['owneraddress'].', '.$_CONFIG['ownercity'].' '.$_CONFIG['ownerpostalcode'].'<br> Telp : '.$_CONFIG['ownertelp']."</a></b>";
?>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <br>
          Powered by: <b><?php echo $_CONFIG['owner'] ?></b>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
</div>
</body>
</html>