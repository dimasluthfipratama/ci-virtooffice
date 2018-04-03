
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Setting
        <small>Website</small>
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
            <h3 class="box-title">Website</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <?php foreach($data_setting as $row ): ?>
            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo site_url('setting/prosesedit')?>">
            <div class="box-body">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label"></label>
              <div class="col-sm-10">
                <input type="hidden" class="form-control" id="id_setting" name="id_setting" readonly="" value="<?php echo $row->id_setting; ?>">
              </div>
            </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Phone</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" id="telepon" name="telepon" value="<?php echo $row->telepon;?>">
                </div>
              </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control"  id="email" name="email" value="<?php echo $row->email;?>">
                  </div>
                </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Address</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $row->alamat;?>">
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

      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
