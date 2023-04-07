<section class="content-header">
      <h1>
        Mahasiswa
        <small>Data Mahasiswa</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="?page=mahasiswa">Mahasiswa</a></li>
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
              <h3 class="box-title">Data Mahasiswa</h3>
              <a href="#" type="button" style="margin-left: 81%" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-default">
                <span><i class='fa fa-plus'></i> Tambah Mahasiswa</span>
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="10">No</th>
                  <th width="150">Nama Mahasiswa</th>
                  <th>Nim</th>
                  <th width="100">Jenis Kelamin</th>
                  <th width="120">Tanggal Lahir</th>
                  <th width="75">Agama</th>
                  <th width="100">Alamat</th>
                  <th width="10">Opsi</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    $qry = mysqli_query($koneksi, "SELECT * FROM mahasiswa Order by id Asc");
                    while ($mhs = mysqli_fetch_array($qry)){
                  ?>
                <tr>
                  <?php
                    $tgl = getTglIndo($mhs['tgl_lahir']);
                      $no++;
                      echo "
                      <td><center>$no</center></td>
                      <td>$mhs[nama]</td>
                      <td>$mhs[nim]</td>
                      <td>$mhs[jenis_kelamin]</td>
                      <td>$tgl</td>
                      <td>$mhs[agama]</td>
                      <td>$mhs[alamat]</td>
                      <td>
                        <center>
                        <a href='media.php?page=mahasiswa_edit&id=$mhs[id]' onclick='return qh();' class='tooltip-success' data-rel='tooltip' title='Ubah'>
                        <i class='fa fa-pencil text-success m-r-10'></i>
                        </a>
                          ||
                          <a href='media.php?page=mahasiswa_delete&id=$mhs[id]' onclick='return qh();' class='tooltip-error' data-rel='tooltip' title='Delete'>
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
              <h4 class="modal-title" id="myModalLabel">Tambah Mahasiswa</h4>
          </div>
          <div class="modal-body">
            <form action="?page=mahasiswa_save" role="form" name="modal_popup" onSubmit="return validasi()" enctype="multipart/form-data" method="POST">      
             <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" name="nama" class="form-control" placeholder="Nama Mahasiswa" required />
              </div>
              <br />
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                <input type="number" name="nim" class="form-control" placeholder="NIM" required />
              </div>
              <br />
              <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select class="form-control" name="jenis_kelamin" required />
                    <option value=""> --------- Jenis Kelamin --------- </option>
                    <option value="laki-laki">laki-laki</option>
                    <option value="perempuan">perempuan</option>
                  </select>
                </div>
              <br />
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="tgl_lahir" class="form-control pull-right" id="datepicker" placeholder="Tanggal Lahir" required />
                </div>
              <br />
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-road"></i></span>
                <input type="text" name="agama" class="form-control" placeholder="Agama" required  />
              </div>
              <br />
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                <input type="text" name="alamat" class="form-control" placeholder="alamat" required />
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
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Edit Data Mahasiswa</h4>
                  </div>
                  <div class="modal-body">
                      <div class="fetched-data"></div>
                  </div>
              </div>
          </div>
        </div>


