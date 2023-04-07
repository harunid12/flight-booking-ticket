<section class="content-header">
      <h1>
       Profile Mahasiswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="?page=mahasiswa_update">Detail</a></li>
        <li class="active">here</li>
      </ol>
    </section>
<?php
  $data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * from mahasiswa where id='$_GET[id]'"));
  $tanggal = $data['tgl_lahir'];
  $tanggal = explode('-',$tanggal);
  $tgl = $tanggal[1] .'/'. $tanggal[2] .'/'. $tanggal[0];
?>
        <section class="content">
      <div class="row">
        <div class="col-md-3">
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Data Mahasiswa</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <form action="?page=mahasiswa_update" method="POST" class="form-horizontal">
                      <input type="hidden" class="form-control" id="id" name="id" placeholder="Id" value="<?php echo $data['id']; ?>" />
                  <div class="form-group">
                      <label for="Nama" class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" autocomplete="off" id="Nama" name="nama" placeholder="Nama" value="<?php echo $data['nama']; ?>">
                        </div>
                  </div>
                  <div class="form-group">
                      <label for="nim" class="col-sm-2 control-label">Nim</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" autocomplete="off" id="nim" name="nim" placeholder="nim" value="<?php echo $data['nim']; ?>">
                        </div>
                  </div>
                  <div class="form-group">

                    <label for="inputEmail" class="col-sm-2 control-label">Jenis Kelamin</label>

                    <div class="col-sm-10">
                      <select class="form-control" name="jenis_kelamin" required />
                          <option value="laki-laki" <?php if ($data['jenis_kelamin']=='laki-laki') echo "selected"; ?> name="jenis_kelamin">laki-laki</option>
                          <option value="perempuan" <?php if ($data['jenis_kelamin']=='perempuan') echo "selected"; ?> name="jenis_kelamin"> perempuan</option>
                      </select>
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="datepicker" placeholder="Tanggal Lahir" name="tgl_lahir" value="<?php echo $tgl; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                      <label for="agama" class="col-sm-2 control-label">Agama</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" autocomplete="off" id="agama" name="agama" placeholder="agama" value="<?php echo $data['agama']; ?>">
                        </div>
                  </div>
                  <div class="form-group">
                      <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" autocomplete="off" id="alamat" name="alamat" placeholder="alamat" value="<?php echo $data['alamat']; ?>">
                        </div>
                  </div>
                    
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                  </div>
                </form>
                <!-- /.post -->

                <!-- Post -->
                
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <!-- /.tab-pane -->
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>