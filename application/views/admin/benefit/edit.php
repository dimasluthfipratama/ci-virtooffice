
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        benefit
        <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">benefit</li>
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
                              <h3 class="box-title">Page benefit</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <?php foreach($detail_benefit as $row ): ?>
                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo site_url('benefit/prosesedit')?>">
                              <div class="box-body">
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                                    <div class="col-sm-10">
                                      <input type="hidden" class="form-control" id="id_benefit" name="id_benefit" readonly="" value="<?php echo $row->id_benefit; ?>">
                                      <input type="text" class="form-control" name="judul" id="judul"  value="<?php echo $row->judul; ?>">
                                    </div>

                                  </div>
                                 
                                  
                                  
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Description</label>
                                    <div class="col-sm-10">
                                      <textarea name="deskripsi" class="textarea" placeholder="<?php echo $row->deskripsi; ?> <style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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
