
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page
        <small>Services</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Services</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">

                                  <div class="col-md-12">
                                  <div class="box">
                                    <div class="box-header">
                                      <h3 class="box-title">Data Services</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                      <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                          <th>No</th>
                                          <th>Title 1</th>
                                          <th>Title 2</th>
                                          <th>Description</th>
                                          <th>Services 1</th>
                                          <th>Services Text 1</th>
                                          <th>Services 2</th>
                                          <th>Services Text 2</th>
                                          <th>Services 3</th>
                                          <th>Services Text 3</th>
                                          <th>
                                          </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $no=1;
                                        foreach($data_services as $row ): ?>
                                        <tr>
                                          <td><?php echo $no++;?></td>
                                          <td><?php echo $row->judul1;?></td>
                                          <td><?php echo $row->judul2;?></td>
                                          <td>
                                            <?php $isi=$row->text;
                                            $isi=character_limiter($isi,100);?>
                                            <?php echo $isi;?>
                                          </td>
                                          <td><?php echo $row->services1;?></td>
                                          <td>
                                            <?php $isi=$row->servicestext1;
                                            $isi=character_limiter($isi,100);?>
                                            <?php echo $isi;?>
                                          </td>
                                          <td><?php echo $row->services2;?></td>
                                          <td>
                                            <?php $isi=$row->servicestext2;
                                            $isi=character_limiter($isi,100);?>
                                            <?php echo $isi;?>
                                          </td>
                                          <td><?php echo $row->services3;?></td>
                                          <td>
                                            <?php $isi=$row->servicestext3;
                                            $isi=character_limiter($isi,100);?>
                                            <?php echo $isi;?>
                                          </td>
                                          <td>
                                              <a class="btn btn-mini" href="<?php echo site_url('services/edit/'.$row->id_services);?>" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a>
                                              
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
