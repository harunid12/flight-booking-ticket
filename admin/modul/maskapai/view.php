<section class="content-header">
      <h1>
         maskapai
        <small>Data  maskapai</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="?page=maskapai"> maskapai</a></li>
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
              <h3 class="box-title">Data  maskapai</h3>
              <a href="#" type="button" style="margin-left: 81%" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-default">
                <span><i class='fa fa-plus'></i> Tambah  maskapai</span>
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="10">No</th>
                  <th width="150">Nama maskapai </th>
                  <th width="150">Icon </th>
                  <th width="100" class="text-center">Opsi</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    $qry = mysqli_query($koneksi, "SELECT * FROM maskapai Order by nama_maskapai Asc");
                    while ($mskp = mysqli_fetch_array($qry)){
                  ?>
                <tr>
                  <?php
                      $no++;
                      echo "
                      <td><center>$no</center></td>
                      <td>$mskp[nama_maskapai]</td>
                      <td align='center'><img src='../images/icon_maskapai/$mskp[icon]' width='70' height='70'></td>
                      <td>
                        <center>
                        <a href='media.php?page=maskapai_edit&IDMaskapai=$mskp[IDMaskapai]' onclick='return qh();' class='tooltip-success' data-rel='tooltip' title='Ubah'>
                        <i class='fa fa-pencil text-success m-r-10'></i>
                        </a>
                          ||
                          <a href='media.php?page=maskapai_delete&IDMaskapai=$mskp[IDMaskapai]' onclick='return qh();' class='tooltip-error' data-rel='tooltip' title='Delete'>
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
              <h4 class="modal-title" id="myModalLabel">Tambah </h4>
          </div>
          <div class="modal-body">
            <form action="?page=maskapai_save" role="form" name="modal_popup" onSubmit="return validasi()" enctype="multipart/form-data" method="POST">      
             <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-plane"></i></span>
                <input type="text" name="nama_maskapai" class="form-control" placeholder="Nama Maskapai" required />
              </div>
              <br />
              <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-camera"></i></span>
                  <input type="file" id="foto" name="icon"  class="form-control" >
                </div>
                 <p style="color: red;">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
              <div class="modal-footer">
                <button class="btn btn-primary" type="submit"> Save</button>
                <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true"> Cancel</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    


