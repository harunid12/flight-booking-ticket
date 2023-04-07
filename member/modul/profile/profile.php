    <section class="content-header">
      <h1>
       Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="?page=profile">Profile</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>
<?php
	$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * from tb_user where id='$_SESSION[id]'"));
	$tanggal = $data['tgl_lahir'];
	$tanggal = explode('-',$tanggal);
	$tgl = $tanggal[1] .'/'. $tanggal[2] .'/'. $tanggal[0];
?>
        <section class="content">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="../images/img_user/admin.png" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $data['nama_user']; ?></h3>

              <p class="text-muted text-center"><?php echo $data['telp']; ?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Username</b> <a class="pull-right"><?php echo $data['username']; ?></a>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Settings</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <form action="?page=profile_update" method="POST" class="form-horizontal">
                  <div class="form-group">
                    <div class="col-sm-10">
                      <input type="hidden" class="form-control" id="id" name="id" placeholder="Id" value="<?php echo $data['id']; ?>"  />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nama" name="nama_user" placeholder="Nama" value="<?php echo $data['nama_user']; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Tempat Lahir</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $data['tempat_lahir']; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Telphone</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Telphone" name="telp" maxlength="12" value="<?php echo $data['telp']; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Alamat</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="alamat" placeholder="Alamat" name="alamat"><?php echo $data['alamat']; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="password" name="password" placeholder="************">
                      <span class="help-block text-red">Biarkan kosong jika tidak diganti</span>
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