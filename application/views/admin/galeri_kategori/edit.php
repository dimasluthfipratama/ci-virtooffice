
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        galeri_kategori
        <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">galeri_kategori</li>
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
                              <h3 class="box-title">Page galeri_kategori</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <?php foreach($detail_galeri_kategori as $row ): ?>
                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo site_url('galeri_kategori/prosesedit')?>">
                              <div class="box-body">
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Kode</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="id_galeri_kategori" name="id_galeri_kategori" readonly="" value="<?php echo $row->id_galeri_kategori; ?>">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Judul galeri_kategori</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="judul" id="judul"  value="<?php echo $row->judul; ?>">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">URL</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="url" id="url"  value="<?php echo $row->url; ?>">
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
