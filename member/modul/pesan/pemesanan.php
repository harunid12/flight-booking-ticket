<section class="content-header">
      <h1>
       Data Pemesan
      </h1>
      <ol class="breadcrumb">
        <li><a href="?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="?page=pemesanan">Detail</a></li>
        <li class="active">here</li>
      </ol>
    </section>
        <section class="content">
      <div class="row">
        <div class="col-md-3">
          </div>
          <!-- /.box -->
          <?php
            $data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT penerbangan.*, tb_dari.lokasi as la, tb_tujuan.lokasi as lt, maskapai.nama_maskapai, kelas_penerbangan.kelas
            FROM penerbangan, tb_dari, tb_tujuan, maskapai, kelas_penerbangan 
            where penerbangan.IDDari = tb_dari.IDDari
            and penerbangan.IDTujuan = tb_tujuan.IDTujuan
            and penerbangan.IDMaskapai = maskapai.IDMaskapai
            and penerbangan.IDKelas = kelas_penerbangan.IDKelas
            and IDPenerbangan='$_GET[IDPenerbangan]'"));
            
            $tgl = getTglIndo($data['tanggal_pergi']);
          ?>
          <!-- About Me Box -->
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-7">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Data pemesan</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <form action="?page=pemesanan_save" method="POST" class="form-horizontal">
                <div class="form-group">
                        <div class="col-sm-10">
                        <input type="hidden" class="form-control" autocomplete="off"  name="IDPenerbangan"  value="<?php echo $data['IDPenerbangan'] ?>">
                        </div>
                  </div>
                  <div class="form-group">
                      <label for="nama_depan" class="col-sm-2 control-label">Nama Depan</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" autocomplete="off" id="nama_depan" name="nama_depan" placeholder="Nama Depan">
                        </div>
                  </div>
                  <div class="form-group">
                      <label for="nama_belakang" class="col-sm-2 control-label">Nama Belakang</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" autocomplete="off" id="nama_belakang" name="nama_belakang" placeholder="Nama Belakang" >
                        </div>
                  </div>
                  <div class="form-group">
                      <label for="telp" class="col-sm-2 control-label">No Hp</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" autocomplete="off" id="telp" name="telp" placeholder="No Hp">
                        </div>
                  </div>
                  <div class="form-group">
                      <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                        <input type="email" class="form-control" autocomplete="off" id="email" name="email" placeholder="Email">
                        </div>
                  </div>
                  <div class="form-group">
                      <label for="nik" class="col-sm-2 control-label">NIK</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" autocomplete="off" maxlength="16" id="nik" name="nik" placeholder="NIK" >
                        </div>
                  </div>
                    
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <?php 
                        echo"
                      <a href='media.php?page=pnbg_detail&IDPenerbangan=$data[IDPenerbangan]' class='btn btn-danger'>Kembali</a>
                      "
                      ?>
                      <button type="submit" class="btn btn-primary">Simpan</button>
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
        <div class="col-md-4">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Data Pesanan</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <p><i class="fa fa-plane"></i>&nbsp;&nbsp;<strong><?php echo $data['la'] ?> <i class="fa fa-long-arrow-right"></i> <?php echo $data['lt'] ?> </strong></p>
                <p><strong>Pergi : <?php echo $tgl ?></strong></p>
                <p><strong>Waktu : <?php echo date('H:i', strtotime($data['jam_keberangkatan'])); ?></strong></p>
                <p><strong><?php echo $data['nama_maskapai'] ?> <i class="fa  fa-angle-double-right"></i> <?php echo $data['kelas'] ?></strong></p>
                  
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