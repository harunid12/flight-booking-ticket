<section class="content-header">
      <h1>
       Pembayaran
      </h1>
      <ol class="breadcrumb">
        <li><a href="?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="?page=pembayaran">Detail</a></li>
        <li class="active">here</li>
      </ol>
    </section>
<?php
    // $data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM tb_pemesan WHERE IDPemesan ='$_GET[IDPemesan]'")); 
    $data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT tb_pemesan.*, penerbangan.*, maskapai.nama_maskapai, kelas_penerbangan.kelas, tb_dari.lokasi as la, tb_tujuan.lokasi as lt, akun_bank.*, tb_bandara.nama_bandara 
    FROM tb_pemesan, penerbangan, kelas_penerbangan, tb_dari, Tb_tujuan, maskapai, akun_bank, tb_bandara
    WHERE tb_pemesan.IDPenerbangan = penerbangan.IDPenerbangan
    and penerbangan.IDDari = tb_dari.IDDari
    and penerbangan.IDTujuan = tb_tujuan.IDTujuan
    and penerbangan.IDMaskapai = maskapai.IDMaskapai
    and tb_dari.IDBandara = tb_bandara.IDBandara
    and maskapai.IDMaskapai = akun_bank.IDMaskapai
    and IDPemesan = $_GET[IDPemesan]
    "));
    
    $rp = rupiah($data['harga']);
    
?>

<?php 
                $tj = mysqli_fetch_array(mysqli_query($koneksi, "SELECT tb_pemesan.*, penerbangan.*, tb_tujuan.IDBandara, tb_bandara.nama_bandara as nbt
                FROM tb_pemesan, penerbangan, tb_tujuan, tb_bandara 
                WHERE tb_pemesan.IDPenerbangan = penerbangan.IDPenerbangan
                and penerbangan.IDTujuan = tb_tujuan.IDTujuan
                and tb_tujuan.IDBandara = tb_bandara.IDBandara
                and IDPemesan = $_GET[IDPemesan]
                "));
                
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
        <div class="col-xl-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Data Pembayaran</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <form action="?page=pembayaran_simpan" method="POST" class="form-horizontal" enctype="multipart/form-data">
                      <input type="hidden" class="form-control" id="IDPemesan" name="IDPemesan" placeholder="IDPemesan" value="<?php echo $data['IDPemesan']; ?>" />
                      <input type="hidden" class="form-control" id="IDPenerbangan" name="IDPenerbangan" placeholder="IDPenerbangan" value="<?php echo $data['IDPenerbangan']; ?>" />
                      
                  <div class="form-group">
                      <label for="nama_depan" class="col-sm-2 control-label">Nama Pemesan</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_depan" readonly value="<?php echo $data['nama_depan']; ?> <?php echo $data['nama_belakang']; ?> ">
                        </div>
                  </div>
                  <div class="form-group">
                      <label for="nama_maskapai" class="col-sm-2 control-label">Maskapai</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_maskapai" readonly value="<?php echo $data['nama_maskapai']; ?>">
                        </div>
                  </div>
                  <div class="form-group">
                      <label for="kelas" class="col-sm-2 control-label">Kelas</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="kelas" readonly value="<?php echo $data['kelas']; ?>">
                        </div>
                  </div>
                  <div class="form-group">
                      <label for="la" class="col-sm-2 control-label">Keberangkatan</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="la" readonly  value="<?php echo $data['la']; ?> -- <?php echo $data['nama_bandara']; ?>">
                        </div>
                  </div>
                  <div class="form-group">
                      <label for="lt" class="col-sm-2 control-label">Tujuan</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="lt" readonly  value="<?php echo $data['lt']; ?> -- <?php echo $tj['nbt']; ?>">
                        </div>
                  </div>
                  
                  <div class="form-group">
                      <label for="la" class="col-sm-2 control-label">Harga</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="la" readonly  value="<?php echo $rp; ?>">
                        <br>
                        <p>-------- Data Rekening Maskapai ---------</p>
                        </div>
                  </div>
                  <div class="form-group">
                      <label for="an_bank" class="col-sm-2 control-label">AN Rekening</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="an_bank" readonly value="<?php echo $data['an_bank']; ?>">
                        </div>
                  </div>
                  <div class="form-group">
                      <label for="no_rek" class="col-sm-2 control-label">Nomor rekening</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="no_rek" readonly value="<?php echo $data['no_rek']; ?>">
                        <br>
                        <p>-------- Input Pembayaran ---------</p>
                        </div>
                  </div>
                  <div class="form-group">
                        <label for="bukti" class="col-sm-2 control-label">bukti Pembayaran</label>
                        <div class="col-sm-6">
                          <input type="file" class="dropify" id="dropify" name="bukti" />
                        </div>
                      </div>
                      
                 
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
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
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <script>
  $(document).ready(function(){
    $('.dropify').dropify({
      messages: {
        default: 'Drag atau drop untuk memilih gambar',
        replace: 'Ganti',
        remove: 'Hapus',
        error: 'error'
      }
    });
  });

</script>
