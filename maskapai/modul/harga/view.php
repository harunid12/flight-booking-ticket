<section class="content-header">
      <h1>
        harga
        <small>Data harga</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="?page=harga">harga</a></li>
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
              <h3 class="box-title">Data harga</h3>
              <a href="#" type="button" style="margin-left: 81%" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-default">
                <span><i class='fa fa-plus'></i> Tambah harga</span>
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="10">No</th>
                  <th width="150">Jenis Pesawat</th>
                  <th width="100">Kelas</th>
                  <th width="100">Lokasi Asal</th>
                  <th width="100">Lokasi Tujuan</th>
                  <th width="100">Harga</th>
                  <th width="10">Opsi</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    $qry = mysqli_query($koneksi, "SELECT tb_harga.*, tb_pesawat.jenis_pesawat, tb_pesawat.IDMaskapai, kelas_penerbangan.kelas, tb_dari.lokasi as la, tb_tujuan.lokasi as lt
                    FROM tb_harga, tb_pesawat, tb_dari, tb_tujuan, kelas_penerbangan
                    WHERE tb_harga.IDIdentitas = tb_pesawat.IDIdentitas 
                    and tb_harga.IDDari = tb_dari.IDDari 
                    and tb_harga.IDtujuan = tb_tujuan.IDTujuan 
                    and tb_harga.IDKelas = kelas_penerbangan.IDKelas
                    and tb_pesawat.IDMaskapai = $_SESSION[IDMaskapai]
                    ");
                    
                    while ($harga = mysqli_fetch_array($qry)){
                  ?>
                <tr>
                  <?php
                      $no++;
                      echo "
                      <td><center>$no</center></td>
                      <td>$harga[jenis_pesawat]</td>
                      <td>$harga[kelas]</td>
                      <td>$harga[la]</td>
                      <td>$harga[lt]</td>
                      <td>$harga[harga]</td>
                      <td>
                        <center>
                        <a href='media.php?page=harga_edit&IDHarga=$harga[IDHarga]' onclick='return qh();' class='tooltip-success' data-rel='tooltip' title='Ubah'>
                        <i class='fa fa-pencil text-success m-r-10'></i>
                        </a>
                          ||
                          <a href='media.php?page=harga_delete&IDHarga=$harga[IDHarga]' onclick='return qh();' class='tooltip-error' data-rel='tooltip' title='Delete'>
                              <span style='color:red'><i class='fa fa-trash'></i></span>
                          </a>
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

    <!------- Modal Tambah user ------>
    <div class="modal fade" id="modal-default" style="display: none;">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title" id="myModalLabel">Tambah harga</h4>
          </div>
          <div class="modal-body">
            <form action="?page=harga_save" role="form" name="modal_popup" onSubmit="return validasi()" enctype="multipart/form-data" method="POST">      
            <div class="input-group">
                <span class="input-group-addon"><i class="fa  fa-home"></i></span>
                <select name="IDIdentitas" class="form-control" required>
                  <option value=""> --------- jenis pesawat  --------- </option>
                  <?php 
                    $qry = mysqli_query($koneksi, "SELECT * FROM tb_pesawat WHERE IDMaskapai = '$_SESSION[IDMaskapai]'");
                    while ($data = mysqli_fetch_array($qry)) {
                      echo "<option value='$data[IDIdentitas]'> $data[jenis_pesawat] </option>";

                    }
                   ?>
                </select>
              </div>
              <br /> 
              <div class="input-group">
                <span class="input-group-addon"><i class="fa  fa-home"></i></span>
                <select name="IDKelas" class="form-control" required>
                  <option value=""> --------- Kelas  --------- </option>
                  <?php 
                    $qry = mysqli_query($koneksi, "SELECT * FROM kelas_penerbangan");
                    while ($data = mysqli_fetch_array($qry)) {
                      echo "<option value='$data[IDKelas]'> $data[kelas] </option>";

                    }
                   ?>
                </select>
              </div>
              <br />  
              <div class="input-group">
                <span class="input-group-addon"><i class="fa  fa-home"></i></span>
                <select name="IDDari" class="form-control" required>
                  <option value=""> --------- Lokasi keberangkatan  --------- </option>
                  <?php 
                    $qry = mysqli_query($koneksi, "SELECT * FROM tb_dari");
                    while ($data = mysqli_fetch_array($qry)) {
                      echo "<option value='$data[IDDari]'> $data[lokasi] </option>";

                    }
                   ?>
                </select>
              </div>
              <br /> 
              <div class="input-group">
                <span class="input-group-addon"><i class="fa  fa-home"></i></span>
                <select name="IDTujuan" class="form-control" required>
                  <option value=""> --------- Lokasi Tujuan  --------- </option>
                  <?php 
                    $qry = mysqli_query($koneksi, "SELECT * FROM tb_tujuan");
                    while ($data = mysqli_fetch_array($qry)) {
                      echo "<option value='$data[IDTujuan]'> $data[lokasi] </option>";

                    }
                   ?>
                </select>
              </div>
              <br />  
             <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="number" name="harga" class="form-control" placeholder="harga" required />
              </div>
              <br />
              <div class="modal-footer">
                <button class="btn btn-primary" type="submit"> Save</button>
                <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true"> Cancel</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


