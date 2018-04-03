
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        slider
        <small>Add</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">slider</li>
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
                              <h3 class="box-title">Page slider</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo site_url('slider/prosestambah')?>">
                              <div class="box-body">
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
                                    <div class="col-sm-10">
                                    <label><?php echo $error;?></label>
                                    <input type="file" name="userfile" id="userfile">
                                      <p class="help-block">The suggested image resolution is 1920 x 828</p>
                                    </div>
                              </div>
                              <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="layer1" id="layer1" placeholder="Input Title">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">SubTitle</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="layer2" id="layer2" placeholder="Input Sub Title">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Button1</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="tombol1" id="tombol1" placeholder="Input Button">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Button2</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="tombol2" id="tombol2" placeholder="Input Button">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">URL1</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="url1" id="url1" placeholder="Input URL">
                                    </div>
                                  </div>
                                   <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">URL2</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="url2" id="url2" placeholder="Input URL">
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
