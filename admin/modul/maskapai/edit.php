<section class="content-header">
      <h1>
        bandara
      </h1>
      <ol class="breadcrumb">
        <li><a href="?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="?page=bandara">Detail</a></li>
        <li class="active">here</li>
      </ol>
    </section>
<?php
  $data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * from maskapai where IDMaskapai='$_GET[IDMaskapai]'"));
?>
        <section class="content">
      <div class="row">
        <div class="col-md-3">
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Data  bandara</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <form action="?page=maskapai_update" method="POST" class="form-horizontal">
                      <input type="hidden" class="form-control" id="IDMaskapai" name="IDMaskapai" value="<?php echo $data['IDMaskapai']; ?>" />
                  <div class="form-group">
                      <label for="bandara" class="col-sm-2 control-label"> Nama Bandara</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" autocomplete="off" id="maskapai" name="nama_maskapai" placeholder="nama maskapai" value="<?php echo $data['nama_maskapai']; ?>">
                        </div>
                  </div>
                  <div class="form-group">
                        <label for="icon" class="col-sm-2 control-label">icon</label>
                        <div class="col-sm-6">
                          <input type="file" class="dropify" id="dropify" name="icon"  data-default-file="../images/icon_maskapai/<?php echo $data['icon']; ?>" />
                        </div>
                      </div> 
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                  </div>
                </form>
                <!-- /.post -->

                <!-- Post -->
                
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <!-- /.tab-pane -->
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <script>
  $(document).ready(function(){
    $('.dropify').dropify({
      messages: {
        default: 'Drag atau drop untuk memilih gambar',
        replace: 'Ganti',
        remove: 'Hapus',
        error: 'error'
      }
    });
  });

</script>