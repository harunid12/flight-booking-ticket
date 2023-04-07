<section class="content-header">
      <h1>
        Lokasi Tujuan
        <small>Data Lokasi Tujuan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="?page=tujuan">Lokasi Tujuan</a></li>
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
              <h3 class="box-title">Data Lokasi Tujuan</h3>
              <a href="#" type="button" style="margin-left: 81%" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-default">
                <span><i class='fa fa-plus'></i> Tambah Lokasi Tujuan</span>
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="10">No</th>
                  <th width="150">Nama Lokasi</th>
                  <th width="150">Nama Bandara</th>
                  <th width="100">Alias</th>
                  <th width="10">Opsi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $qry = mysqli_query($koneksi, "SELECT tb_tujuan.*, tb_bandara.nama_bandara as NB 
                          FROM tb_tujuan, tb_bandara 
                          WHERE tb_tujuan.IDBandara = tb_bandara.IDBandara");
                    while ($tj = mysqli_fetch_array($qry)){
                  ?>
                <tr>
                  <?php
                      $no++;
                      echo "
                      <td><center>$no</center></td>
                      <td>$tj[lokasi]</td>
                      <td>$tj[NB]</td>
                      <td>$tj[alias]</td>
                      <td>
                        <center>
                        <a href='media.php?page=tujuan_edit&IDTujuan=$tj[IDTujuan]' onclick='return qh();' class='tooltip-success' data-rel='tooltip' title='Ubah'>
                        <i class='fa fa-pencil text-success m-r-10'></i>
                        </a>
                          ||
                          <a href='media.php?page=tujuan_delete&IDTujuan=$tj[IDTujuan]' onclick='return qh();' class='tooltip-error' data-rel='tooltip' title='Delete'>
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
              <h4 class="modal-title" id="myModalLabel">Tambah Lokasi</h4>
          </div>
          <div class="modal-body">
            <form action="?page=tujuan_save" role="form" name="modal_popup" onSubmit="return validasi()" enctype="multipart/form-data" method="POST">      
             <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" name="lokasi" class="form-control" placeholder="Lokasi" required />
              </div>
              <br />
              <div class="input-group">
                <span class="input-group-addon"><i class="fa  fa-home"></i></span>
                <select name="IDBandara" class="form-control" required>
                  <option value=""> --------- Bandara --------- </option>
                  <?php 
                    $qry = mysqli_query($koneksi, "SELECT * FROM tb_bandara");
                    while ($data = mysqli_fetch_array($qry)) {
                      echo "<option value='$data[IDBandara]'> $data[nama_bandara] </option>";

                    }
                   ?>
                </select>
              </div>
              <br />
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" name="alias" class="form-control" placeholder="Nama lain" required />
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


