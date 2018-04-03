
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page
        <small>Newslatter</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Newslatter</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">

                          <div class="col-md-12">
                          <div class="box">
                            <div class="box-header">
                              <h3 class="box-title">Data Newslatter </h3> 
                              
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                              <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Email newslatter</th>
                                  
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no=1;
                                foreach($data_newslatter as $row ): ?>
                                <tr>
                                  <td><?php echo $no++;?></td>
                                  <td><?php echo $row->email;?></td>
                                  
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
