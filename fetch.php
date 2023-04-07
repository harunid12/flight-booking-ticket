<?php
include "config/koneksi.php";
include "config/konfigurasi.php"; 
include "config/fungsi_indotgl.php"; 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $_CONFIG['appname']; ?> ||  <?php echo $_CONFIG['owner']; ?></title>
  <link rel="icon" type="image/png" href="images/fav.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">
      <img src="images/logo.png" alt="logo" style="width: 100%;">
    </p>
    <br>
    <?php 
    $id = $_GET['employee_list'];
    $data = mysql_fetch_array(mysql_query("SELECT * From tb_certificate where id_certificate='$id'" ));
    ?>
    <table cellpadding="10px">
        <tr>
            <td width="150px" height="30">
                <b>Certificate ID</b>
            </td>
            <td>
                <?php echo $data['id_certificate'] ?>
            </td>
        </tr>
        <tr>
            <td width="150px" height="30">
                <b>Name</b>
            </td>
            <td>
                <?php echo $data['nama'] ?>
            </td>
        </tr>
        <tr>
            <td width="150px" height="30">
                <b>Complated On</b>
            </td>
            <td>
                <?php echo getTglIndo($data['completed_date']); ?>
            </td>
        </tr>
        <tr>
            <td width="150px" height="30">
                <b>Exppired On</b>
            </td>
            <td>
                <?php echo getTglIndo($data['expired_date']); ?>
            </td>
        </tr>
        <tr>
            <td width="150px" height="30">
                <b>Training Program</b>
            </td>
            <td>
              <?php echo $data['program']; ?>
            </td>
        </tr>
        <tr>
            <td width="150px" height="30">
                <b>Status</b>
            </td>
            <td>
                <?php echo $data['status'] ?>
            </td>
        </tr>
  </table>
  <br>
  <button type="submit" class="btn btn-block btn-social btn-google btn-flat" onclick="GoBackWithRefresh();return false;" ><i class="fa fa-angle-double-left"></i> <b>Go Back </b></button>
   </div>
    </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
<script>
function GoBackWithRefresh(event) {
    if ('referrer' in document) {
        window.location = document.referrer;
        /* OR */
        //location.replace(document.referrer);
    } else {
        window.history.back();
    }
}
</script>