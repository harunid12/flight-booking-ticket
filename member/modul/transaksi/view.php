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
                  <th width="150">Nama</th>
                  <th width="150">Maskapai</th>
                  <th width="150">Kelas</th>
                  <th width="150">Keberangkatan</th>
                  <th width="150">Tujuan</th>
                  <th width="150">Pembayaran</th>
                  <th width="10">Opsi</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    $qry = mysqli_query($koneksi, "SELECT tb_pemesan.*, penerbangan.*, maskapai.nama_maskapai, kelas_penerbangan.kelas, tb_dari.lokasi as la, tb_tujuan.lokasi as lt 
                    FROM tb_pemesan, penerbangan, maskapai, kelas_penerbangan, tb_dari, tb_tujuan
                    WHERE tb_pemesan.IDPenerbangan = penerbangan.IDPenerbangan 
                    and penerbangan.IDMaskapai = maskapai.IDMaskapai
                    and penerbangan.IDKelas = kelas_penerbangan.IDKelas
                    and penerbangan.IDDari = tb_dari.IDDari
                    and penerbangan.IDTujuan = tb_tujuan.IDTujuan");
                    while ($pmsn = mysqli_fetch_array($qry)){
                  ?>
                <tr>
                  <?php
                      $no++;
                      echo "
                      <td><center>$no</center></td>
                      <td>$pmsn[nama_depan] $pmsn[nama_belakang]</td>
                      <td>$pmsn[nama_maskapai]</td>
                      <td>$pmsn[kelas]</td>
                      <td>$pmsn[la]</td>
                      <td>$pmsn[lt]</td>
                      <td>
                      <center>
                      "
                      ?>
                      <?php if ($pmsn['status_pembayaran'] == '1'){
                          echo "<a href='media.php?page=tiket&IDPemesan=$pmsn[IDPemesan]' onclick='return qh();' class='tooltip-error' data-rel='tooltip'>
                          <button class='btn btn-success'>Tiket</button>
                          </a>";
                        }elseif($pmsn['status_pembayaran'] == '0'){
                          echo "<a href='media.php?page=pembayaran&IDPemesan=$pmsn[IDPemesan]' onclick='return qh();' class='tooltip-error' data-rel='tooltip'>
                          <button class='btn btn-danger'>No Payment</button>
                          </a>";
                        }elseif($pmsn['status_pembayaran'] == '2'){
                          echo "
                          <button class='btn btn-info'>Process</button>
                         ";
                        }elseif($pmsn['status_pembayaran'] == '3'){
                          echo "
                          <button class='btn btn-danger'>Rejected</button>
                         ";
                        }
                      ?>
                      <?php 
                      echo "
                      </center>
                      </td>
                      <td>
                        <center>
                        "
                        ?>
                        <?php if ($pmsn['status_pembatalan'] == '1'){
                          echo "
                          <button class='btn btn-success'>Dibatalkan</button>
                          ";
                        }elseif($pmsn['status_pembatalan'] == '0'){
                          echo "<a href='media.php?page=transaksi_batal&IDPemesan=$pmsn[IDPemesan]' onclick='return qh();' class='tooltip-error' data-rel='tooltip' title='Tidak Aktif'>
                          <button class='btn btn-danger'>batalkan</button>
                          </a>";
                        }
                      ?>
                      <?php 
                      echo"
                        </center>
                      </td>";
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

    