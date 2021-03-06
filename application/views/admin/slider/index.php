
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page
        <small>Slider</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">slider</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">

                          <div class="col-md-12">
                          <div class="box">
                            <div class="box-header">
                              <h3 class="box-title">Data Slider</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                              <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Image</th>
                                  <th>Judul1</th>
                                  <th>Subjudul</th>
                                  <th>Tombol1</th>
                                  <th>Tombol2</th>
                                  <th>
                                  <a href="<?php echo site_url('slider/tambah');?>" class="btn btn-mini btn-block btn-inverse">
                                      <i class="fa fa-plus  "></i> Add
                                  </a>
                                  </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no=1;
                                foreach($data_slider as $row ): ?>
                                <tr>
                                  <td><?php echo $no++;?></td>
                                  <td>
                                    <img src="<?php echo base_url('upload/'.$row->gambar);?>" style="width:400px;" ><br>
                                    <a class="btn btn-mini" href="<?php echo site_url('slider/editgambar/'.$row->id_slider);?>" data-toggle="modal"><i class="fa fa-pencil"></i> Edit Image</a>
                                        
                                  </td>
                                  <td><?php echo $row->layer1;?></td>
                                  <td><?php echo $row->layer2;?></td>
                                  <td><?php echo $row->tombol1;?></td>
                                  <td><?php echo $row->tombol2;?></td>
                                  <td>
                                      <a class="btn btn-mini" href="<?php echo site_url('slider/edit/'.$row->id_slider);?>" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a>
                                      <a class="btn btn-mini" href="<?php echo site_url('slider/proseshapus/'.$row->id_slider);?>"
                                         onclick="return confirm('Anda yakin?')"> <i class="fa fa-remove"></i> Delete</a>

                                  </td>
                                </tr>
                                <?php endforeach; ?>

                                </tbody>
                              </table>
                            </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
