
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Footer
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Footer</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <div class="col-md-12">
                          <!-- Horizontal Form -->
                            <!-- /.box-header -->
                            <!-- form start -->
                            <?php foreach($data_footer as $row ): ?>
                            <div class="col-md-4">
                            <div class="box">
                            <div class="box-body">
                              <form role="form" class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo site_url('footer/proseseditgambar')?>">
                              <div class="box-body">
                                <div class="form-group">
                                  <div class="col-sm-10">
                                    <img src="<?php echo base_url('upload/'.$row->logo);?>" style="width:50px;" >
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">Upload Image</label>
                                  <div class="col-sm-10">
                                  <label><?php echo $error;?></label>
                                  <input type="file" name="userfile" id="userfile">
                                    <p class="help-block">The suggested image resolution is 50 x 50</p>
                                  </div>
                                </div>
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-10">
                                      <button type="submit" class="btn btn-info ">Edit Image</button>
                                    </div>
                                  </div>
                              </div>
                              </form>
                            </div>
                          </div>
                            </div>
                            <div class="col-md-8">
                            <div class="box">
                            <div class="box-body">
                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo site_url('footer/prosesedit')?>">
                              <div class="box-body">
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="judul" id="judul" value="<?php echo $row->judul;?>">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Descriptions</label>
                                    <div class="col-sm-10">
                                      <textarea name="deskripsi" class="textarea" placeholder="<?php echo $row->deskripsi;?>" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>

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
                          </div>
                          </div>
                        </div>
                          <!-- /.box -->
      </div>
    </section>
  </div>
