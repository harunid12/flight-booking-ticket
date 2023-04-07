<section class="content-header">
      <h1>
       Profile pesawat
      </h1>
      <ol class="breadcrumb">
        <li><a href="?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="?page=pesawat_update">Detail</a></li>
        <li class="active">here</li>
      </ol>
    </section>
<?php
  $data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM tb_pesawat where IDIdentitas='$_GET[IDIdentitas]'"));
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
              <li class="active"><a href="#activity" data-toggle="tab">Data pesawat</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <form action="?page=pesawat_update" method="POST" class="form-horizontal">
                      <input type="hidden" class="form-control" id="IDIdentitas" name="IDIdentitas" placeholder="IDIdentitas" value="<?php echo $data['IDIdentitas']; ?>" />
                      
                  <div class="form-group">
                      <label for="jenis_pesawat" class="col-sm-2 control-label">jenis pesawat</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" autocomplete="off" id="jenis_pesawat" name="jenis_pesawat" placeholder="jenis pesawat" value="<?php echo $data['jenis_pesawat']; ?>">
                        </div>
                  </div>
                  <div class="form-group">
                      <label for="seri_pesawat" class="col-sm-2 control-label">seri pesawat</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" autocomplete="off" id="seri_pesawat" name="seri_pesawat" placeholder="seri pesawat" value="<?php echo $data['seri_pesawat']; ?>">
                        </div>
                  </div>
                  <div class="form-group">
                      <label for="tata_kursi" class="col-sm-2 control-label">Tata Kursi</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" autocomplete="off" id="tata_kursi" name="tata_kursi" placeholder="Tata Kursi" value="<?php echo $data['tata_kursi']; ?>">
                        </div>
                  </div>
                  <div class="form-group">
                      <label for="jarak_kursi" class="col-sm-2 control-label">Jarak Kursi</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" autocomplete="off" id="jarak_kursi" name="jarak_kursi" placeholder="Jarak Kursi" value="<?php echo $data['jarak_kursi']; ?>">
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