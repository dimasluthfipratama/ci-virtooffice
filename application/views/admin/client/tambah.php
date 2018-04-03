
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Client
        <small>Add Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Client</li>
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
                              <h3 class="box-title">Page Client</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo site_url('client/prosestambah')?>">
                              <div class="box-body">
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
                                    <div class="col-sm-10">
                                    <label><?php echo $error;?></label>
                                    <input type="file" name="userfile" id="userfile">
                                      <p class="help-block">The suggested image resolution is 170 x 123</p>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Link</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="url" id="url" placeholder="Masukkan Link">
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
