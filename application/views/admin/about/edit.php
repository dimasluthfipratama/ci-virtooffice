
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        About
        <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">About</li>
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
                              <h3 class="box-title">Page About</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <?php foreach($data_about as $row ): ?>
                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo site_url('about/prosesedit')?>">
                              <div class="box-body">
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Judul</label>
                                    <div class="col-sm-10">
                                      <input type="hidden" class="form-control" id="id_section_about" name="id_section_about" readonly="" value="<?php echo $row->id_section_about; ?>">
                                      <input type="text" class="form-control" name="judul" id="judul"  value="<?php echo $row->judul; ?>">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Sub Judul</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="subjudul" id="subjudul"  value="<?php echo $row->subjudul; ?>">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Icon 1</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="icon1" id="icon1"  value="<?php echo $row->icon1; ?>">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Icon 2</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="icon2" id="icon2"  value="<?php echo $row->icon2; ?>">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Icon 3</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="icon3" id="icon3"  value="<?php echo $row->icon3; ?>">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Description</label>
                                    <div class="col-sm-10">
                                      <textarea name="deskripsi" class="textarea" placeholder="<?php echo $row->deskripsi; ?> <style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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
