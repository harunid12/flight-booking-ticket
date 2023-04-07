<section class="content-header">
      <h1>
        E Tiket
      </h1>
      <ol class="breadcrumb">
        <li><a href="?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="?page=bandara">Detail</a></li>
        <li class="active">here</li>
      </ol>
    </section>
<?php
  $data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT tb_pemesan.*, penerbangan.*, maskapai.*, kelas_penerbangan.kelas, tb_dari.lokasi as la, tb_tujuan.lokasi as lt, tb_bandara.nama_bandara 
  FROM tb_pemesan, penerbangan, maskapai, kelas_penerbangan, tb_dari, tb_tujuan, tb_bandara
  WHERE tb_pemesan.IDPenerbangan = penerbangan.IDPenerbangan
  and penerbangan.IDMaskapai = maskapai.IDMaskapai
  and penerbangan.IDKelas = kelas_penerbangan.IDKelas
  and penerbangan.IDDari = tb_dari.IDDari
  and penerbangan.IDTujuan = tb_tujuan.IDTujuan
  and tb_dari.IDBandara = tb_bandara.IDBandara
  and IDPemesan = $_GET[IDPemesan]"));
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
            <br>
            <span style="margin-left:75%; color:blue; font-size:20px;">FLIGHT BOOKING</span>
            <span class="info-box-number" style="margin-left:2%;"> E Tiket</span>
            <ul class="nav">
            <p style="margin-left:2%;"> Penerbangan Pergi</p>
            <div class="col-md-2">
                <br>
                <?php echo "<img src='../images/icon_maskapai/$data[icon]' width='70' height='70'>" ?>
                
            </div>
            </ul>
            
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="col-md-2">
                    
                </div>
                    
                    
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
    <!-- <script>
    window.print();
  </script> -->