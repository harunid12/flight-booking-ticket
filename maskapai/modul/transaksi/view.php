<section class="content-header">
      <h1>
        pemesanan
        <small>Data pemesanan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="?page=transaksi">pemesanan</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data pemesanan</h3>
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="10">No</th>
                  <th width="150">Nama Pemesan</th>
                  <th width="150">Kelas</th>
                  <th width="150">Keberangkatan</th>
                  <th width="150">Tujuan</th>
                  <th width="150">Pembayaran</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    $qry = mysqli_query($koneksi, "SELECT tb_pembayaran.*, tb_pemesan.*, penerbangan.*, kelas_penerbangan.kelas, tb_dari.lokasi as la, tb_tujuan.lokasi as lt 
                    FROM tb_pembayaran, tb_pemesan, penerbangan, kelas_penerbangan, tb_dari, tb_tujuan
                    WHERE tb_pembayaran.IDPenerbangan = penerbangan.IDPenerbangan 
                    and tb_pembayaran.IDPemesan = tb_pemesan.IDPemesan
                    and penerbangan.IDKelas = kelas_penerbangan.IDKelas
                    and penerbangan.IDDari = tb_dari.IDDari
                    and penerbangan.IDTujuan = tb_tujuan.IDTujuan
                    and tb_pemesan.status_pembatalan = '0'
                    and IDMaskapai = $_SESSION[IDMaskapai]");
                    while ($pmbyrn = mysqli_fetch_array($qry)){
                  ?>
                <tr>
                  <?php
                      $no++;
                      echo "
                      <td><center>$no</center></td>
                      <td>$pmbyrn[nama_depan] $pmbyrn[nama_belakang]</td>
                      <td>$pmbyrn[kelas]</td>
                      <td>$pmbyrn[la]</td>
                      <td>$pmbyrn[lt]</td>
                      <td>
                      <center>
                      "
                      ?>
                      <?php if ($pmbyrn['status_pembayaran'] == '1'){
                          echo "
                          <button class='btn btn-success'>payment</button>
                         ";
                        }elseif($pmbyrn['status_pembayaran'] == '3'){
                          echo "
                          <button class='btn btn-danger'>Rejected</button>
                          ";
                        }elseif($pmbyrn['status_pembayaran'] == '2'){
                          echo "
                          <a href='media.php?page=proses_transaksi&IDPembayaran=$pmbyrn[IDPembayaran]' onclick='return qh();' class='tooltip-error' data-rel='tooltip' title='Tidak Aktif'>
                          <button class='btn btn-info'>Process</button>
                          </a>
                         ";
                        }
                      ?>
                </tr>
                  <?php
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>

    