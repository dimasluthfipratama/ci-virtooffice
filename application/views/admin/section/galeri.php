
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Section
        <small>galeri</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Section</li>
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
              <h3 class="box-title">galeri</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php foreach($data_section_galeri as $row ): ?>
            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo site_url('section_galeri/prosesedit')?>">
              <div class="box-body">
              <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">judul</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="judul" value="<?php echo $row->judul;?>">
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
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
