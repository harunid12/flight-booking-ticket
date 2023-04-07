<section class="content-header">
      <h1>
         bank
        <small>Data  bank</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="?page=bank"> bank</a></li>
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
              <h3 class="box-title">Data  bank</h3>
              <a href="#" type="button" style="margin-left: 81%" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-default">
                <span><i class='fa fa-plus'></i> Tambah  bank</span>
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="10">No</th>
                  <th width="150">Maskapai </th>
                  <th width="150">An Rekening </th>
                  <th width="150">No Rek </th>
                  <th width="100" class="text-center">Opsi</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    $qry = mysqli_query($koneksi, "SELECT akun_bank.*, maskapai.nama_maskapai 
                    FROM akun_bank, maskapai 
                    WHERE akun_bank.IDMaskapai = maskapai.IDMaskapai");
                    while ($mskp = mysqli_fetch_array($qry)){
                  ?>
                <tr>
                  <?php
                      $no++;
                      echo "
                      <td><center>$no</center></td>
                      <td>$mskp[nama_maskapai]</td>
                      <td>$mskp[an_bank]</td>
                      <td>$mskp[no_rek]</td>
                      <td>
                        <center>
                        <a href='media.php?page=bank_edit&IDAkun=$mskp[IDAkun]' onclick='return qh();' class='tooltip-success' data-rel='tooltip' title='Ubah'>
                        <i class='fa fa-pencil text-success m-r-10'></i>
                        </a>
                          ||
                          <a href='media.php?page=bank_delete&IDAkun=$mskp[IDAkun]' onclick='return qh();' class='tooltip-error' data-rel='tooltip' title='Delete'>
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
            <form action="?page=bank_save" role="form" name="modal_popup" onSubmit="return validasi()" enctype="multipart/form-data" method="POST">      
            <div class="input-group">
                <span class="input-group-addon"><i class="fa  fa-home"></i></span>
                <select name="IDMaskapai" class="form-control" required>
                  <option value=""> --------- Maskapai --------- </option>
                  <?php 
                    $qry = mysqli_query($koneksi, "SELECT * FROM maskapai");
                    while ($data = mysqli_fetch_array($qry)) {
                      echo "<option value='$data[IDMaskapai]'> $data[nama_maskapai] </option>";

                    }
                   ?>
                </select>
              </div>
              <br />
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" name="an_bank" class="form-control" placeholder="Atas Nama" required />
              </div>
              <br />
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-plane"></i></span>
                <input type="text" name="no_rek" class="form-control" placeholder="NO Rek" required />
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
    


