
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Galery
        <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Galery</li>
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
                              <h3 class="box-title">Page Galery</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <?php foreach($detail_galery as $row ): ?>
                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo site_url('galery/prosesedit')?>">
                              <div class="box-body">
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                                    <div class="col-sm-10">
                                      <input type="hidden" class="form-control" id="id_galeri" name="id_galeri" readonly="" value="<?php echo $row->id_galeri; ?>">
                                      <input type="text" class="form-control" name="judul" id="judul"  value="<?php echo $row->judul; ?>">
                                    </div>

                                  </div>
                                  <div class="box-body">
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Sub Title</label>
                                    <div class="col-sm-10">
                                      <input type="hidden" class="form-control" id="id_galeri" name="id_galeri" readonly="" value="<?php echo $row->id_galeri; ?>">
                                      <input type="text" class="form-control" name="subjudul" id="subjudul"  value="<?php echo $row->subjudul; ?>">
                                    </div>
                                    
                                  </div>
                                  
                                  <?php endforeach; ?>
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Category</label>
                                    <div class="col-sm-10">
                                      <select name="id_galeri_kategori" class="form-control">
                                          <option >Select Project Category</option>
                                          <?php foreach($data_galeri_kategori as $row ): ?>
                                          <option value="<?php echo $row->id_galeri_kategori;?>" > <?php echo $row->judul;?></option>
                                          <?php endforeach; ?>
                                      </select>
                                    </div>
                                  </div>
   
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
