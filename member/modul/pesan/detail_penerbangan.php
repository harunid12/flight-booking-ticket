<section class="content-header">
      <h1>
         penerbangan
        <small>Detail  penerbangan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="?page=pesan"> penerbangan</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
            <?php
                $qry = mysqli_fetch_array(mysqli_query($koneksi, "SELECT penerbangan.*, tb_pesawat.*, maskapai.nama_maskapai, kelas_penerbangan.kelas, tb_bandara.*, tb_dari.lokasi as la, tb_dari.alias as aa, tb_tujuan.lokasi as lt, tb_tujuan.alias as atj
                FROM penerbangan, kelas_penerbangan, tb_bandara, tb_dari, Tb_tujuan, maskapai, tb_pesawat
                WHERE penerbangan.IDKelas = kelas_penerbangan.IDKelas
                and penerbangan.IDDari = tb_dari.IDDari
                and tb_dari.IDBandara = tb_bandara.IDBandara
                and penerbangan.IDTujuan = tb_tujuan.IDTujuan
                and penerbangan.IDMaskapai = maskapai.IDMaskapai
                and penerbangan.IDIdentitas = tb_pesawat.IDIdentitas
                and IDPenerbangan = $_GET[IDPenerbangan]
                "));
            
                $tgl = getTglIndo($qry['tanggal_pergi']);
                $rp = rupiah($qry['harga']); 
            ?>
            <?php 
                $tj = mysqli_fetch_array(mysqli_query($koneksi, "SELECT penerbangan.*, tb_tujuan.IDBandara, tb_bandara.nama_bandara as nbt
                FROM penerbangan, tb_tujuan, tb_bandara 
                WHERE penerbangan.IDTujuan = tb_tujuan.IDTujuan
                and tb_tujuan.IDBandara = tb_bandara.IDBandara
                and IDPenerbangan = $_GET[IDPenerbangan]
                "));
                
            ?>
          <!-- row -->
          <div class="row">
            <div class="col-md-12">
                
              <span class='info-box-number'><?php echo $qry['la']; ?> / <?php echo $qry['aa']?> </span>
              <span class='h5'><?php echo $qry['nama_bandara']; ?> </span>
              <span style='margin-left: 60%'> <strong><?php echo $rp; ?></strong> </span>
              <p></p>
              <!-- The time line -->
              <ul class="timeline">
                <!-- timeline time label -->
                <li class="time-label">
                  <span class="bg-red">
                    <?php echo $tgl; ?>
                  </span>
                </li>
                <!-- /.timeline-label -->
                <!-- timeline item -->
                <li>
                  <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> <?php echo date('H:i', strtotime($qry['jam_keberangkatan'])); ?></span>
                    <h4 style="color:black">Maskapai : <?php echo $qry['nama_maskapai']; ?></h4>
                    <h3 class="timeline-header"><strong><?php echo $qry['seri_pesawat']; ?> <i class="fa  fa-angle-double-right"></i> <?php echo $qry['kelas']; ?> </strong> </h3>
                    <div class="timeline-body">
                      <p><strong>pesawat : <?php echo $qry['jenis_pesawat']; ?></strong></p>
                      <p><strong>Tata Kursi : <?php echo $qry['tata_kursi']; ?></strong></p>
                      <p><strong>Jarak Antar Kursi : <?php echo $qry['jarak_kursi']; ?></strong></p>
                    </div>
                  </div>
                </li>
                <!-- END timeline item -->
                <!-- timeline item -->
                <li class="time-label">
                  <span class="bg-green">
                    <?php echo $tgl; ?>
                  </span>
                </li>
                
                <!-- END timeline item -->
            
              </ul>
              
              <span class='info-box-number'><?php echo $qry['lt']; ?> / <?php echo $qry['atj']?> </span>
              <span class='h5'><?php echo $tj['nbt']; ?> </span>
              <?php 
              echo"
              <a href='media.php?page=pemesanan&IDPenerbangan=$qry[IDPenerbangan]' class='btn btn-primary btn-md' style='margin-left: 80%'>Pilih</a>
              "
              ?>
              <br>
              <br>
            </div><!-- /.col -->
          </div><!-- /.row -->

            
          </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script>
    window.print();
  </script>

