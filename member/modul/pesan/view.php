<section class="content-header">
      <h1>
         penerbangan
        <small>Data  penerbangan</small>
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
                $qry = mysqli_query($koneksi, "SELECT penerbangan.*, maskapai.icon, tb_dari.lokasi as la, tb_tujuan.lokasi as lt
                FROM penerbangan, maskapai, tb_dari, tb_tujuan
                WHERE penerbangan.IDMaskapai = maskapai.IDMaskapai
                and penerbangan.IDDari = tb_dari.IDDari
                and penerbangan.IDTujuan = tb_tujuan.IDTujuan
                and status = '1'
                Order By harga Asc
                ");
                while ($psn = mysqli_fetch_array($qry)){
                $rp = rupiah($psn['harga']);
                $tgl = getTglIndo($psn['tanggal_pergi']);
                $jam = date('H:i', strtotime($psn['jam_keberangkatan']));
                
                echo "
                <div class='col-md-12'>
                
                <a href='media.php?page=pnbg_detail&IDPenerbangan=$psn[IDPenerbangan]'>
                <div class='box box-info'>
                <div class='info-box'>
                <span class='info-box-icon bg-default'><img src='../images/icon_maskapai/$psn[icon]' width='70' height='70'></span>
                        <div class='info-box-content'>
                            <span class='info-box-number'>$psn[la] <i class='fa fa-long-arrow-right'></i> $psn[lt]</span>
                            <span>Tanggal: $tgl <span style='margin-left: 60%'> $rp / org</span></span>
                            <p>Waktu: $jam</p>
                        </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
                </div>
                </div><!-- /.col -->
                <a>
                ";
                }
            ?>
            
            
          </div>
            </div>
          </div>
        </div>
      </div>
    </section>


