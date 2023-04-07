<?php

include "../../../config/koneksi.php";
    if($_POST['rowid']) {
        $id = $_POST['rowid'];
        $data = mysql_fetch_array(mysql_query("SELECT * From tb_user where id='$id' ")); 
?>
    <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

<form action="?page=user_update" method="post">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="hidden" name="id" class="form-control" value="<?php echo $data['id']; ?>" readonly />
                <input type="text" name="nama" class="form-control" placeholder="Nama User" value="<?php echo $data['nama_user']; ?>" required />
              </div>
              <br />
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat lahir User" value="<?php echo $data['tempat_lahir']; ?>" required />
              </div>
              <br />
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="tgl_lahir" class="form-control pull-right" id="datepicker" placeholder="Tanggal Lahir" value="<?php echo $data['tgl_lahir']; ?>" required />
                </div>
              <br />
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-road"></i></span>
                <input type="text" name="alamat" class="form-control" placeholder="Alamat User" value="<?php echo $data['alamat']; ?>" required  />
              </div>
              <br />
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                <input type="text" name="telp" class="form-control" placeholder="Nomor Telphone" maxlength="12" value="<?php echo $data['telp']; ?>" required />
              </div>
              <br />
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-info-circle"></i></span>
                <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $data['username']; ?>" readonly required />
              </div>
              <br />
              <div class="form-group">
                  <select class="form-control" name="level" required >
                    <option value=""> --------- Pilih Level User --------- </option>
                    <option <?php if($data['level']=='admin') {echo "selected"; } ?> value="admin"> Administrator</option>
                    <option <?php if($data['level']=='pimpinan') {echo "selected"; } ?> value="pimpinan"> Pimpinan</option>
                  </select>
              </div>
              <br />
  <div class="modal-footer">
      <button class="btn btn-primary" type="submit"> Update</button>
      <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true"> Cancel</button>
  </div>
</form>
<script src="../admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="../admin/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<?php
    }
?>

<script>
  $(function () {
        $('#datepicker').datepicker({
      autoclose: true
    })
  })
</script>