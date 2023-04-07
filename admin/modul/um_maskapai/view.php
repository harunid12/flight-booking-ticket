<section class="content-header">
      <h1>
        maskapai
        <small>Data User maskapai</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="?page=maskapai">User maskapai</a></li>
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
              <h3 class="box-title">Data user maskapai</h3>
              <a href="#" type="button" style="margin-left: 81%" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-default">
                <span><i class='fa fa-plus'></i> Tambah User maskapai</span>
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="10">No</th>
                  <th width="150">Maskapai</th>
                  <th width="150">Nama User</th>
                  <th width="100">username</th>
                  <th width="10">Opsi</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    $qry = mysqli_query($koneksi, "SELECT user_maskapai.*, maskapai.nama_maskapai as NM 
                        FROM user_maskapai, maskapai 
                        WHERE user_maskapai.IDMaskapai = maskapai.IDMaskapai");
                    while ($user = mysqli_fetch_array($qry)){
                  ?>
                <tr>
                  <?php
                      $no++;
                      echo "
                      <td><center>$no</center></td>
                      <td>$user[NM]</td>
                      <td>$user[nama]</td>
                      <td>$user[username]</td>
                      <td>
                        <center>
                          <a href='media.php?page=um_delete&IDUserMaskapai=$user[IDUserMaskapai]' onclick='return qh();' class='tooltip-error' data-rel='tooltip' title='Delete'>
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
              <h4 class="modal-title" id="myModalLabel">Tambah maskapai</h4>
          </div>
          <div class="modal-body">
            <form action="?page=um_save" role="form" name="modal_popup" onSubmit="return validasi()" enctype="multipart/form-data" method="POST">  
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
                <input type="text" name="nama" class="form-control" placeholder="Nama user" required />
              </div>
              <br />
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                <input type="text" name="username" class="form-control" placeholder="username" required />
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
                      <h4 class="modal-title">Edit Data maskapai</h4>
                  </div>
                  <div class="modal-body">
                      <div class="fetched-data"></div>
                  </div>
              </div>
          </div>
        </div>


