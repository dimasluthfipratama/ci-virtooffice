
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Services
        <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Services</li>
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
                              <h3 class="box-title">Page Services</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <?php foreach($detail_services as $row ): ?>
                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo site_url('services/prosesedit')?>">
                              <div class="box-body">
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Title 1</label>
                                    <div class="col-sm-10">
                                      <input type="hidden" class="form-control" id="id_services" name="id_services" readonly="" value="<?php echo $row->id_services; ?>">
                                      <input type="text" class="form-control" name="judul1" id="judul1"  value="<?php echo $row->judul1; ?>">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Title 2</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="judul2" id="judul2"  value="<?php echo $row->judul2; ?>">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Description</label>
                                    <div class="col-sm-10">
                                      <textarea name="text" class="textarea" placeholder="<?php echo $row->text; ?>" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Services 1</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="services1" id="services1"  value="<?php echo $row->services1; ?>">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Services Text 1</label>
                                    <div class="col-sm-10">
                                      <textarea name="servicestext1" class="textarea" placeholder="<?php echo $row->servicestext1; ?>" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Services 2</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="services2" id="services2"  value="<?php echo $row->services2; ?>">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Services Text 2</label>
                                    <div class="col-sm-10">
                                      <textarea name="servicestext2" class="textarea" placeholder="<?php echo $row->servicestext2; ?>" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Services 3</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="services3" id="services3"  value="<?php echo $row->services3; ?>">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Services Text 3</label>
                                    <div class="col-sm-10">
                                      <textarea name="servicestext3" class="textarea" placeholder="<?php echo $row->servicestext3; ?>" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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
