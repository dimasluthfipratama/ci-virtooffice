
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page
        <small>Products</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Products</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">

                                  <div class="col-md-12">
                                  <div class="box">
                                    <div class="box-header">
                                      <h3 class="box-title">Data Products</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                      <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                          <th>No</th>
                                          <th>Image</th>
                                          <th>Title 1</th>
                                          <th>Title 2</th>
                                          <th>Description</th>
                                          <th>
                                          <a href="<?php echo site_url('product/tambah');?>" class="btn btn-mini btn-block btn-inverse">
                                              <i class="fa fa-plus  "></i> Add
                                          </a>
                                          </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $no=1;
                                        foreach($data_product as $row ): ?>
                                        <tr>
                                          <td><?php echo $no++;?></td>
                                          <td>
                                              <img src="<?php echo base_url('upload/'.$row->galery);?>" style="width:250px;" ><br>
                                              <a class="btn btn-mini" href="<?php echo site_url('product/editgambar/'.$row->id_product);?>" data-toggle="modal"><i class="fa fa-pencil"></i> Edit Image</a>
                                          </td>
                                          <td><?php echo $row->judul1;?></td>
                                          <td><?php echo $row->judul2;?></td>
                                          <td>
                                            <?php $isi=$row->deskripsi;
                                            $isi=character_limiter($isi,100);?>
                                            <?php echo $isi;?>
                                          </td>
                                          <td>
                                              <a class="btn btn-mini" href="<?php echo site_url('product/edit/'.$row->id_product);?>" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a>
                                              <a class="btn btn-mini" href="<?php echo site_url('product/proseshapus/'.$row->id_product);?>"
                                                 onclick="return confirm('Are You Sure ?')"> <i class="fa fa-remove"></i> Delete</a>

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
