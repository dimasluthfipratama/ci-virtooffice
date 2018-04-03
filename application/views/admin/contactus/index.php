
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Contact Us
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Contact Us</li>
      </ol>
    </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
            <!-- Horizontal Form -->
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Page Contact Us</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <?php foreach($data_kontak as $row ): ?>

                <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo site_url('contact/prosesedit')?>">
                <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Judul</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="judul" value="<?php echo $row->judul;?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Isi</label>
                      <div class="col-sm-10">
                        <textarea name="isi" class="textarea" placeholder="<?php echo $row->isi;?>" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>

                      </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-info pull-right">Edit</button>
                </div>
                <!-- /.box-footer -->
              </form>
            </div>
            <!-- /.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>
        <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
