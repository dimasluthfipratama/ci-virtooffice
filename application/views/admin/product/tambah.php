
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Products
        <small>Add Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Products</li>
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
                              <h3 class="box-title">Page Products</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo site_url('product/prosestambah')?>">
                              <div class="box-body">
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
                                    <div class="col-sm-10">
                                    <label><?php echo $error;?></label>
                                    <input type="file" name="userfile" id="userfile">
                                      <p class="help-block">The suggested image resolution is 1000 x 750</p>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Title 1</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="judul1" id="judul1" placeholder="Input Title">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Title 2</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="judul2" id="judul2" placeholder="Input Title">
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
                                    <label for="inputEmail3" class="col-sm-2 control-label">Url</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="url" id="url" placeholder="Input URL Without Space">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Descriptions</label>
                                    <div class="col-sm-10">
                                      <textarea name="deskripsi" class="textarea" placeholder="Input Your Product Descriptions" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>

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
