
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page
        <small>Faq</small>
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
                          <div class="box">
                            <div class="box-header">
                              <h3 class="box-title">FAQ</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                              <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Question</th>
                                  <th>Answer</th>
                                  <th>
                                  <a href="<?php echo site_url('faq/tambah');?>" class="btn btn-mini btn-block btn-inverse">
                                      <i class="fa fa-plus  "></i> Add
                                  </a>
                                  </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no=1;
                                foreach($data_faq as $row ): ?>
                                <tr>
                                  <td><?php echo $no++;?></td>
                                  <td><?php echo $row->soal;?></td>
                                  <td><?php echo $row->jawaban;?></td>
                                  <td>
                                      <a class="btn btn-mini" href="<?php echo site_url('faq/edit/'.$row->id_faq);?>" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a>
                                      <a class="btn btn-mini" href="<?php echo site_url('faq/proseshapus/'.$row->id_faq);?>"
                                         onclick="return confirm('Anda yakin?')"> <i class="fa fa-remove"></i> Delete</a>

                                  </td>
                                </tr>
                                <?php endforeach; ?>

                                </tbody>
                              </table>
                            </div>
                            <!-- /.box-body -->
                          </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
