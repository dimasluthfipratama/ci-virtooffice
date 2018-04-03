
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Setting
        <small>Sosial Media</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Setting</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">

          <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Username</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php foreach($data_sosmed as $row ): ?>
            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo site_url('sosmed/prosesedit')?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Facebook</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="facebook" value="<?php echo $row->facebook;?>">
                  </div>
                </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Instagram</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="instagram" value="<?php echo $row->instagram;?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Linkedln</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="linked" value="<?php echo $row->linked;?>">
                    </div>
                  </div>
              </div>
              <?php endforeach; ?>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-rinstagramht">Edit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
