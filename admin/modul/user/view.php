    <section class="content-header">
      <h1>
        User
        <small>Data User</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="?page=user">User</a></li>
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
              <h3 class="box-title">Data User</h3>
              <a href="#" type="button" style="margin-left: 81%" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-default">
                <span><i class='fa fa-plus'></i> Tambah User</span>
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="10">No</th>
                  <th width="150">Nama User</th>
                  <th width="120">Username</th>
                  <th width="120">Level</th>
                  <th width="10">Opsi</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    $qry = mysqli_query($koneksi, "SELECT * FROM user Order by IDUser Asc");
                    while ($user = mysqli_fetch_array($qry)){
                  ?>
                <tr>
                  <?php
                      $no++;
                      echo "
                      <td><center>$no</center></td>
                      <td>$user[nama]</td>
                      <td>$user[username]</td>
                      <td>
                      "
                      ?>
                      <?php if($user['level'] == 1){
                        echo "Super Admin";
                      }elseif ($user['level'] ==2){
                        echo "Pimpinan";
                      }
                      ?>
                      <?php 
                      echo "
                      </td>
                      <td>
                        <center>
                          <a href='media.php?page=user_delete&IDUser=$user[IDUser]' onclick='return qh();' class='tooltip-error' data-rel='tooltip' title='Delete'>
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
              <h4 class="modal-title" id="myModalLabel">Tambah User</h4>
          </div>
          <div class="modal-body">
            <form action="?page=user_save" role="form" name="modal_popup" onSubmit="return validasi()" enctype="multipart/form-data" method="POST">      
             <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" name="nama" class="form-control" placeholder="Nama User" required />
              </div>
              <br />
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-info-circle"></i></span>
                <input type="text" name="username" class="form-control" placeholder="Username" required />
              </div>
              <br />
              <div class="form-group">
                  <select class="form-control" name="level" required >
                    <option value=""> --------- Pilih Level User --------- </option>
                    <option value="1"> Super Admin</option>
                    <option value="2"> Pimpinan</option>
                  </select>
              </div>
              <div class="modal-footer">
                <button class="btn btn-primary" type="submit"> Save</button>
                <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true"> Cancel</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!------- Akhir Modal Tambah user ------>

    <!-- Modal Edit user -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Edit Data user</h4>
                  </div>
                  <div class="modal-body">
                      <div class="fetched-data"></div>
                  </div>
              </div>
          </div>
        </div>
      <!-- Modal Edit Pelanggan -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#myModal').on('show.bs.modal', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'modul/user/edit.php',
                data :  'rowid='+ rowid,
                success : function(data){
                $('.fetched-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
</script>