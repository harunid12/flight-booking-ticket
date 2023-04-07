<section class="content-header">
      <h1>
        bandara
      </h1>
      <ol class="breadcrumb">
        <li><a href="?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="?page=bandara">Detail</a></li>
        <li class="active">here</li>
      </ol>
    </section>
<?php
  $data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * from tb_bandara where IDBandara='$_GET[IDBandara]'"));
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
              <li class="active"><a href="#activity" data-toggle="tab">Data  bandara</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <form action="?page=bandara_update" method="POST" class="form-horizontal">
                      <input type="hidden" class="form-control" id="IDBandara" name="IDBandara" value="<?php echo $data['IDBandara']; ?>" />
                  <div class="form-group">
                      <label for="bandara" class="col-sm-2 control-label"> Nama Bandara</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" autocomplete="off" id="bandara" name="nama_bandara" placeholder="nama bandara" value="<?php echo $data['nama_bandara']; ?>">
                        </div>
                  </div>
                  <div class="form-group">
                      <label for="bandara" class="col-sm-2 control-label"> Alias</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" autocomplete="off" id="bandara" name="alias" placeholder="nama Alias" value="<?php echo $data['alias']; ?>">
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
    <script>
    window.print();
  </script>