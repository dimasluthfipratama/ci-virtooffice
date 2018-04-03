
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        slider
        <small>Edit Data</small>
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
                            <?php foreach($detail_slider as $row ): ?>
                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo site_url('slider/prosesedit')?>">
                              <div class="box-body">
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                                    <div class="col-sm-10">
                                      <input type="hidden" class="form-control" id="id_slider" name="id_slider" readonly="" value="<?php echo $row->id_slider; ?>">
                                      <input type="text" class="form-control" name="layer1" id="layer1"  value="<?php echo $row->layer1; ?>">
                                    </div>
                                    </div>

                                  
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Sub Title</label>
                                    <div class="col-sm-10">
                                      <input type="hidden" class="form-control" id="id_slider" name="id_slider" readonly="" value="<?php echo $row->id_slider; ?>">
                                      <input type="text" class="form-control" name="layer2" id="layer2"  value="<?php echo $row->layer2; ?>">
                                    </div>
                                    </div>
                                    
                                  
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Button1</label>
                                    <div class="col-sm-10">
                                      <input type="hidden" class="form-control" id="id_slider" name="id_slider" readonly="" value="<?php echo $row->id_slider; ?>">
                                      <input type="text" class="form-control" name="tombol1" id="tombol1"  value="<?php echo $row->tombol1; ?>">
                                    </div>
                                    </div>

                                  
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Button2</label>
                                    <div class="col-sm-10">
                                      <input type="hidden" class="form-control" id="id_slider" name="id_slider" readonly="" value="<?php echo $row->id_slider; ?>">
                                      <input type="text" class="form-control" name="tombol2" id="tombol2"  value="<?php echo $row->tombol2; ?>">
                                    </div>
                                    </div>
                                    
                                  
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">URL1</label>
                                    <div class="col-sm-10">
                                      <input type="hidden" class="form-control" id="id_slider" name="id_slider" readonly="" value="<?php echo $row->id_slider; ?>">
                                      <input type="text" class="form-control" name="url1" id="url1"  value="<?php echo $row->url1; ?>">
                                    </div>
                                    </div>

                                 
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">URL2</label>
                                    <div class="col-sm-10">
                                      <input type="hidden" class="form-control" id="id_slider" name="id_slider" readonly="" value="<?php echo $row->id_slider; ?>">
                                      <input type="text" class="form-control" name="url2" id="url2"  value="<?php echo $row->url2; ?>">
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
    </section>
  </div>
