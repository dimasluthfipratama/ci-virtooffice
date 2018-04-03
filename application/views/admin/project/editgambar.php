
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Projects
        <small>Edit Data</small>
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
                            <?php foreach($detail_project2 as $row ): ?>
                            <form role="form">
                                <div class="box-body">
                                    <div class="form-group">
                                          <label for="inputEmail3" class="col-sm-2 control-label"></label>
                                          <div class="col-sm-10">
                                          <img src="<?php echo base_url('upload/'.$row->gambar);?>" style="width:250px;" >
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <?php endforeach; ?>
                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo site_url('project/proseseditgambar')?>">
                              <div class="box-body">

                                <?php foreach($detail_project as $row ): ?>
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
                                    <div class="col-sm-10">
                                    <input type="hidden" class="form-control" id="id_services" name="id_projects" readonly="" value="<?php echo $row->id_projects; ?>">
                                      <input type="file" name="userfile" id="userfile">
                                      <p class="help-block">The suggested image resolution is 400 x 600</p>
                                    </div>
                                  </div>
                              </div>
                              <!-- /.box-body -->
                              <div class="box-footer">
                                <button type="submit" class="btn btn-info pull-right">Edit</button>
                              </div>
                              <!-- /.box-footer -->
                            </form>
                            <?php endforeach; ?>
                          </div>
                          <!-- /.box -->
      </div>
    </section>
  </div>
