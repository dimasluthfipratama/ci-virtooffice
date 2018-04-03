
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page
        <small>layanan_detail</small>
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
                          <div class="box">
                            <div class="box-header">
                              <h3 class="box-title">Data layanan_detail</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                              <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Image</th>
                                  <th>Icon1</th>
                                  <th>Icon2</th>
                                  <th>Judul</th>
                                  <th>Isi</th>
                                  <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no=1;
                                foreach($detail_layanan as $row ): ?>
                                <tr>
                                  <td><?php echo $no++;?></td>
                                  <td>
                                    <img src="<?php echo base_url('upload/'.$row->gambar);?>" style="width:300px;" ><br>
                                        <a class="btn btn-mini" href="<?php echo site_url('layanan_detail/editgambar/'.$row->id_layanan_detail);?>" data-toggle="modal"><i class="fa fa-pencil"></i>
                                          Edit Image
                                        </a>
                                  </td>

                                  <td>
                                    <img src="<?php echo base_url('upload/'.$row->icon1);?>" style="width:100px;" ><br>
                                        <a class="btn btn-mini" href="<?php echo site_url('layanan_detail/editicon1/'.$row->id_layanan_detail);?>" data-toggle="modal"><i class="fa fa-pencil"></i>
                                          Edit Image
                                        </a>
                                  </td>
                                  <td>
                                    <img src="<?php echo base_url('upload/'.$row->icon2);?>" style="width:100px;" ><br>
                                        <a class="btn btn-mini" href="<?php echo site_url('layanan_detail/editicon2/'.$row->id_layanan_detail);?>" data-toggle="modal"><i class="fa fa-pencil"></i>
                                          Edit Image
                                        </a>
                                  </td>

                                  <td><?php echo $row->judul;?></td>
                                  <td><?php echo $row->deskripsi;?></td>
                                  <td>
                                      <a class="btn btn-mini" href="<?php echo site_url('layanan_detail/edit/'.$row->id_layanan_detail);?>" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a>
                                      <a class="btn btn-mini" href="<?php echo site_url('layanan_detail/proseshapus/'.$row->id_layanan_detail);?>"
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
