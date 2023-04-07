<section class="content-header">
      <h1>
       Profile penerbangan
      </h1>
      <ol class="breadcrumb">
        <li><a href="?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="?page=pnbg_edit">Detail</a></li>
        <li class="active">here</li>
      </ol>
    </section>
<?php
  $data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * from penerbangan where IDPenerbangan='$_GET[IDPenerbangan]'"));
  $tanggal = $data['tanggal_pergi'];
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
              <li class="active"><a href="#activity" data-toggle="tab">Data penerbangan</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <form action="?page=pnbg_update" method="POST" class="form-horizontal">
                      <input type="hidden" class="form-control" id="IDPenerbangan" name="IDPenerbangan" placeholder="IDPenerbangan" value="<?php echo $data['IDPenerbangan']; ?>" />
                      <div class="form-group">
                      <label for="kelas" class="col-sm-2 control-label">Jenis Pesawat</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="IDIdentitas" required />
                            <?php 

                            $kat_pesawat = mysqli_query($koneksi, "SELECT * FROM tb_pesawat WHERE IDMaskapai = $_SESSION[IDMaskapai]");
              
                              while($data_pesawat=mysqli_fetch_array($kat_pesawat)){
                                     if ($data[IDIdentitas]==$data_pesawat[IDIdentitas]){
                               echo "<option value=$data_pesawat[IDIdentitas] selected>$data_pesawat[jenis_pesawat] -- $data_pesawat[seri_pesawat]</option>";
                              }
                                      else{
                               echo "<option value=$_pesawat_pesawat[IDIdentitas]>$data_pesawat[jenis_pesawat] -- $data_pesawat[seri_pesawat]</option> </p> ";}
                              }
                           ?>
                          </select>
                        </div>
                  </div>
                  <div class="form-group">
                      <label for="kelas" class="col-sm-2 control-label">Kelas</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="IDKelas" required />
                            <?php 

                            $kat_kelas = mysqli_query($koneksi, "SELECT * FROM kelas_penerbangan");
              
                              while($data_kelas=mysqli_fetch_array($kat_kelas)){
                                     if ($data[IDKelas]==$data_kelas[IDKelas]){
                               echo "<option value=$data_kelas[IDKelas] selected>$data_kelas[kelas]</option>";
                              }
                                      else{
                               echo "<option value=$data_kelas[IDKelas]>$data_kelas[kelas]</option> </p> ";}
                              }
                           ?>
                          </select>
                        </div>
                  </div>
                  <div class="form-group">
                      <label for="kelas" class="col-sm-2 control-label">Keberangkatan</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="IDDari" required />
                            <?php 

                            $kat_asal = mysqli_query($koneksi, "SELECT * FROM tb_dari");
              
                              while($data_asal=mysqli_fetch_array($kat_asal)){
                                     if ($data[IDDari]==$data_asal[IDDari]){
                               echo "<option value=$data_asal[IDDari] selected>$data_asal[lokasi]</option>";
                              }
                                      else{
                               echo "<option value=$data_asal[IDDari]>$data_asal[lokasi]</option> </p> ";}
                              }
                           ?>
                          </select>
                        </div>
                  </div>
                  <div class="form-group">
                      <label for="kelas" class="col-sm-2 control-label">Tujuan</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="IDTujuan" required />
                            <?php 

                            $kat_tujuan = mysqli_query($koneksi, "SELECT * FROM tb_tujuan");
              
                              while($data_tujuan=mysqli_fetch_array($kat_tujuan)){
                                     if ($data[IDTujuan]==$data_tujuan[IDTujuan]){
                               echo "<option value=$data_tujuan[IDTujuan] selected>$data_tujuan[lokasi]</option>";
                              }
                                      else{
                               echo "<option value=$data_tujuan[IDTujuan]>$data_tujuan[lokasi]</option> </p> ";}
                              }
                           ?>
                          </select>
                        </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Tanggal Pergi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="datepicker" placeholder="Tanggal pergi" name="tanggal_pergi" value="<?php echo $tgl; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                      <label for="jam_keberangkatan" class="col-sm-2 control-label">Jam Keberangkatan</label>
                        <div class="col-sm-10">
                        <input type="time" class="form-control" autocomplete="off" id="jam_keberangkatan" name="jam_keberangkatan" placeholder="jam_keberangkatan" value="<?php echo $data['jam_keberangkatan']; ?>">
                        </div>
                  </div>
                  <div class="form-group">
                      <label for="harga" class="col-sm-2 control-label">Harga</label>
                        <div class="col-sm-10">
                        <input type="number" class="form-control" autocomplete="off" id="harga" name="harga" placeholder="Harga" value="<?php echo $data['harga']; ?>">
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