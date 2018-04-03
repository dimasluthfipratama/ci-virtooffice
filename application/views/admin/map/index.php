
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Setting
        <small>MAPS</small>
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
              <h3 class="box-title">Maps</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php foreach($data_map as $row ): ?>
            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo site_url('map/prosesedit')?>">
              <div class="box-body">
              <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">judul</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="judul" value="<?php echo $row->judul;?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">subjudul</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="subjudul" value="<?php echo $row->subjudul;?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">why1a</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="why1a" value="<?php echo $row->why1a;?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">why1b</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="why1b" value="<?php echo $row->why1b;?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">why2a</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="why2a" value="<?php echo $row->why2a;?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">why2b</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="why2b" value="<?php echo $row->why2b;?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">why3a</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="why3a" value="<?php echo $row->why3a;?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">why3b</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="why3b" value="<?php echo $row->why3b;?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">why4a</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="why4a" value="<?php echo $row->why4a;?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">why4b</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="why4b" value="<?php echo $row->why4b;?>">
                    </div>
                  </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">URL Maps</label>
                  <div class="col-sm-10">
                  <textarea name="map" class="textarea" placeholder="<?php echo $row->map; ?> <style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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
