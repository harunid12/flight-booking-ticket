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
	$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT user_maskapai.*, maskapai.nama_maskapai 
  FROM user_maskapai, maskapai 
  where user_maskapai.IDMaskapai = maskapai.IDMaskapai
  and IDUserMaskapai='$_SESSION[IDUserMaskapai]'"));
?>
        <section class="content">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="../images/img_user/admin.png" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $data['nama']; ?></h3>

              <p class="text-muted text-center"><?php echo $data['telp']; ?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Username</b> <a class="pull-right"><?php echo $data['username']; ?></a>
                </li>
                <li class="list-group-item">
                  <b>Maskapai</b> <a class="pull-right"><?php echo $data['nama_maskapai']; ?></a>
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
                    <label for="inputName" class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="<?php echo $data['nama']; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="username" readonly name="username" placeholder="username" value="<?php echo $data['username']; ?>">
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