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
    $data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT tb_pembayaran.*, tb_pemesan.*, penerbangan.*, kelas_penerbangan.kelas, tb_dari.lokasi as la, tb_tujuan.lokasi as lt, tb_bandara.nama_bandara 
    FROM tb_pembayaran, tb_pemesan, penerbangan, kelas_penerbangan, tb_dari, Tb_tujuan, tb_bandara
    WHERE tb_pembayaran.IDPenerbangan = penerbangan.IDPenerbangan
    and tb_pembayaran.IDPemesan = tb_pemesan.IDPemesan
    and penerbangan.IDDari = tb_dari.IDDari
    and penerbangan.IDTujuan = tb_tujuan.IDTujuan
    and tb_dari.IDBandara = tb_bandara.IDBandara
    and IDPembayaran = $_GET[IDPembayaran]
    "));
    
?>

<?php 
                $tj = mysqli_fetch_array(mysqli_query($koneksi, "SELECT tb_pembayaran.*, tb_pemesan.*, penerbangan.*, tb_tujuan.IDBandara, tb_bandara.nama_bandara as nbt
                FROM tb_pembayaran, tb_pemesan, penerbangan, tb_tujuan, tb_bandara 
                WHERE tb_pembayaran.IDPenerbangan = penerbangan.IDPenerbangan
                and tb_pembayaran.IDPemesan = tb_pemesan.IDPemesan
                and penerbangan.IDTujuan = tb_tujuan.IDTujuan
                and tb_tujuan.IDBandara = tb_bandara.IDBandara
                and IDPembayaran = $_GET[IDPembayaran]
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
                <form action="?page=proses_update" method="POST" class="form-horizontal" enctype="multipart/form-data">
                      <input type="hidden" class="form-control" id="IDPembayaran" name="IDPembayaran" placeholder="IDPembayaran" value="<?php echo $data['IDPembayaran']; ?>" />
                      <input type="hidden" class="form-control" id="IDPemesan" name="IDPemesan" placeholder="IDPemesan" value="<?php echo $data['IDPemesan']; ?>" />
                      <input type="hidden" class="form-control" id="IDPenerbangan" name="IDPenerbangan" placeholder="IDPenerbangan" value="<?php echo $data['IDPenerbangan']; ?>" />
                      
                  <div class="form-group">
                      <label for="nama_depan" class="col-sm-2 control-label">Nama Pemesan</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_depan" readonly value="<?php echo $data['nama_depan']; ?>">
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
                        <br>
                        </div>
                  </div>
                  <div class="form-group">
                        <label for="bukti" class="col-sm-2 control-label">bukti Pembayaran</label>
                        <div class="col-sm-6">
                          <input type="file" class="dropify" id="dropify" name="bukti"  data-default-file="../images/bukti_pembayaran/<?php echo $data['bukti']; ?>" />
                        </div>
                      </div> 
                    
                      <div class="form-group">

                        <label for="inputEmail" class="col-sm-2 control-label">Pembayaran</label>

                        <div class="col-sm-10">
                        <select class="form-control" name="status_pembayaran" required />
                            <option value="">----- Pilih -----</option>
                            <option value="1">Diterima</option>
                            <option value="3">Ditolak</option>
                        </select>
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