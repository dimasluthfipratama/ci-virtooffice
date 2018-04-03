
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Setting
        <small>Logo</small>
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
            <h3 class="box-title">Logo</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <?php foreach($data_logo as $row ): ?>
          <form class="form-horizontal">
          <div class="box-body">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label"></label>
              <div class="col-sm-10">
                <img src="<?php echo base_url('upload/'.$row->logo);?>" style="width:300px;" >
              </div>
            </div>
            </div>
            </form>
            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo site_url('logo/prosesedit')?>">
            <div class="box-body">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                <label><?php echo $error;?></label>
                <input type="hidden" class="form-control" id="id_setting" name="id_setting" readonly="" value="<?php echo $row->id_setting; ?>">
                <input type="file" name="userfile" id="userfile">
                  <p class="help-block">Resolusi gambar yang di ajurkan 264 x 51</p>
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
