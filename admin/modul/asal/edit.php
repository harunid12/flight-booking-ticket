<section class="content-header">
      <h1>
       Lokasi Asal
      </h1>
      <ol class="breadcrumb">
        <li><a href="?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="?page=asal">Detail</a></li>
        <li class="active">here</li>
      </ol>
    </section>
<?php
  $data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * from tb_dari where IDDari='$_GET[IDDari]'"));
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
              <li class="active"><a href="#activity" data-toggle="tab">Data Lokasi Asal</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <form action="?page=asal_update" method="POST" class="form-horizontal">
                      <input type="hidden" class="form-control" id="IDDari" name="IDDari" value="<?php echo $data['IDDari']; ?>" />
                  <div class="form-group">
                      <label for="lokasi" class="col-sm-2 control-label">lokasi Asal</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" autocomplete="off" id="lokasi" name="lokasi" placeholder="lokasi" value="<?php echo $data['lokasi']; ?>">
                        </div>
                  </div>
                  <div class="form-group">
                      <label for="kelas" class="col-sm-2 control-label">Bandara</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="IDBandara" required />
                            <?php 

                            $kat_bandara = mysqli_query($koneksi, "SELECT * FROM tb_bandara order by nama_bandara Asc");
              
                              while($data_bandara=mysqli_fetch_array($kat_bandara)){
                                     if ($data[IDBandara]==$data_bandara[IDBandara]){
                               echo "<option value=$data_bandara[IDBandara] selected>$data_bandara[nama_bandara]</option>";
                              }
                                      else{
                               echo "<option value=$data_bandara[IDBandara]>$data_bandara[nama_bandara]</option> </p> ";}
                              }
                           ?>
                          </select>
                        </div>
                  </div>
                  <div class="form-group">
                      <label for="alias" class="col-sm-2 control-label">alias</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" autocomplete="off" id="alias" name="alias" placeholder="alias" value="<?php echo $data['alias']; ?>">
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