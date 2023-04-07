<section class="content-header">
      <h1>
        pesawat
        <small>Data pesawat</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="?page=pesawat">pesawat</a></li>
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
              <h3 class="box-title">Data pesawat</h3>
              <a href="#" type="button" style="margin-left: 81%" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-default">
                <span><i class='fa fa-plus'></i> Tambah pesawat</span>
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="10">No</th>
                  <th width="150">Jenis Pesawat</th>
                  <th width="100">Seri Pesawat</th>
                  <th width="100">Tata Kursi</th>
                  <th width="100">Jarak Kursi</th>
                  <th width="10">Opsi</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    $qry = mysqli_query($koneksi, "SELECT * FROM tb_pesawat
                    WHERE  IDMaskapai = $_SESSION[IDMaskapai]");
                    while ($idps = mysqli_fetch_array($qry)){
                  ?>
                <tr>
                  <?php
                      $no++;
                      echo "
                      <td><center>$no</center></td>
                      <td>$idps[jenis_pesawat]</td>
                      <td>$idps[seri_pesawat]</td>
                      <td>$idps[tata_kursi]</td>
                      <td>$idps[jarak_kursi]</td>
                      <td>
                        <center>
                        <a href='media.php?page=pesawat_edit&IDIdentitas=$idps[IDIdentitas]' onclick='return qh();' class='tooltip-success' data-rel='tooltip' title='Ubah'>
                        <i class='fa fa-pencil text-success m-r-10'></i>
                        </a>
                          ||
                          <a href='media.php?page=pesawat_delete&IDIdentitas=$idps[IDIdentitas]' onclick='return qh();' class='tooltip-error' data-rel='tooltip' title='Delete'>
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
              <h4 class="modal-title" id="myModalLabel">Tambah pesawat</h4>
          </div>
          <div class="modal-body">
            <form action="?page=pesawat_save" role="form" name="modal_popup" onSubmit="return validasi()" enctype="multipart/form-data" method="POST">       
             <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" name="jenis_pesawat" class="form-control" placeholder="jenis pesawat" required />
              </div>
              <br />
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" name="seri_pesawat" class="form-control" placeholder="seri pesawat" required />
              </div>
              <br />
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" name="tata_kursi" class="form-control" placeholder="Tata-kursi" required />
              </div>
              <br />
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" name="jarak_kursi" class="form-control" placeholder="Jarak Kursi" required />
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
                      <h4 class="modal-title">Edit Data pesawat</h4>
                  </div>
                  <div class="modal-body">
                      <div class="fetched-data"></div>
                  </div>
              </div>
          </div>
        </div>


