
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Faq
        <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Faq</li>
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
                              <h3 class="box-title">Page Faq</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <?php foreach($detail_faq as $row ): ?>
                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo site_url('faq/prosesedit')?>">
                              <div class="box-body">
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Question</label>
                                    <div class="col-sm-10">
                                      <input type="hidden" class="form-control" id="id_faq" name="id_faq" readonly="" value="<?php echo $row->id_faq; ?>">
                                      <input type="text" class="form-control" name="soal" id="soal"  value="<?php echo $row->soal; ?>">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Answer</label>
                                    <div class="col-sm-10">
                                      <textarea name="jawaban" class="textarea" placeholder="<?php echo $row->jawaban; ?>" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>

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
