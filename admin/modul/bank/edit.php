<section class="content-header">
      <h1>
       Akun Bank
      </h1>
      <ol class="breadcrumb">
        <li><a href="?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="?page=bank">Detail</a></li>
        <li class="active">here</li>
      </ol>
    </section>
<?php
  $data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * from akun_bank where IDAkun='$_GET[IDAkun]'"));
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
              <li class="active"><a href="#activity" data-toggle="tab">Data Akun Bank</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <form action="?page=bank_update" method="POST" class="form-horizontal">
                      <input type="hidden" class="form-control" id="IDAkun" name="IDAkun" value="<?php echo $data['IDAkun']; ?>" />
                  <div class="form-group">
                      <label for="kelas" class="col-sm-2 control-label">Bandara</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="IDMaskapai" required />
                            <?php 

                            $kat_maskapai = mysqli_query($koneksi, "SELECT * FROM maskapai order by nama_maskapai Asc");
              
                              while($data_maskapai=mysqli_fetch_array($kat_maskapai)){
                                     if ($data[IDMaskapai]==$data_maskapai[IDMaskapai]){
                               echo "<option value=$data_maskapai[IDMaskapai] selected>$data_maskapai[nama_maskapai]</option>";
                              }
                                      else{
                               echo "<option value=$data_maskapai[IDMaskapai]>$data_maskapai[nama_maskapai]</option> </p> ";}
                              }
                           ?>
                          </select>
                        </div>
                  </div>
                  <div class="form-group">
                      <label for="an_bank" class="col-sm-2 control-label">An Rek</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" autocomplete="off" id="an_bank" name="an_bank" placeholder="an_bank" value="<?php echo $data['an_bank']; ?>">
                        </div>
                  </div>
                  <div class="form-group">
                      <label for="no_rek" class="col-sm-2 control-label">Nomor rekening</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" autocomplete="off" id="no_rek" name="no_rek" placeholder="no_rek" value="<?php echo $data['no_rek']; ?>">
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