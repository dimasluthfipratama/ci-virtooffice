
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          layanan_detail
          <small>Add</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">layanan_detail</li>
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
                                <h3 class="box-title">Page layanan_detail</h3>
                              </div>
                              <!-- /.box-header -->
                              <!-- form start -->
                              <?php foreach($detail_layanan as $row ): ?>
                              <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo site_url('layanan_detail/prosesedit')?>">
                                <div class="box-body">
                                <div class="form-group">
                                  <label for="exampleInputEmail1"></label>
                                      <input type="hidden" class="form-control" id="id_layanan_detail" name="id_layanan_detail" readonly="" value="<?php echo $row->id_layanan_detail; ?>">
                                </div>
                                    <div class="form-group">
                                      <label for="inputEmail3" class="col-sm-2 control-label">Judul</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" name="judul" id="judul" value="<?php echo $row->judul;?>">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="inputEmail3" class="col-sm-2 control-label">Deskripsi</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" name="deskripsi" id="deskripsi" value="<?php echo $row->deskripsi;?>">
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
