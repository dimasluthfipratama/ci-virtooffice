
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Projects
        <small>Add Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Projects</li>
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
                              <h3 class="box-title">Page Projects</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo site_url('project/prosestambah')?>">
                              <div class="box-body">
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Images</label>
                                    <div class="col-sm-10">
                                    <label><?php echo $error;?></label>
                                    <input type="file" name="userfile" id="userfile">
                                      <p class="help-block">The suggested image resolution is 400 x 600</p>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="judul" id="judul" placeholder="Input Title">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Category</label>
                                    <div class="col-sm-10">
                                      <select name="id_katagori" class="form-control">
                                          <option >Select Project Category</option>
                                          <?php foreach($data_katagori as $row ): ?>
                                          <option value="<?php echo $row->id_katagori;?>" > <?php echo $row->nama_katagori;?></option>
                                          <?php endforeach; ?>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Descriptions</label>
                                    <div class="col-sm-10">
                                      <textarea name="isi" class="textarea" placeholder="Input Your Project Descriptions" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>

                                    </div>
                                  </div>
                              </div>
                              <!-- /.box-body -->
                              <div class="box-footer">
                                <button type="submit" class="btn btn-info pull-right">Submit</button>
                              </div>
                              <!-- /.box-footer -->
                            </form>
                          </div>
                          <!-- /.box -->
      </div>
    </section>
  </div>
