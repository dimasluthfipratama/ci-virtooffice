
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page
        <small>Project</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Project</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">

                          <div class="col-md-12">
                          <div class="box">
                            <div class="box-header">
                              <h3 class="box-title">Data Project</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                              <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Images</th>
                                  <th>Title</th>
                                  <th>Description</th>
                                  <th>
                                  <a href="<?php echo site_url('project/tambah');?>" class="btn btn-mini btn-block btn-inverse">
                                      <i class="fa fa-plus  "></i> Add
                                  </a>
                                  </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no=1;
                                foreach($data_projects as $row ): ?>
                                <tr>
                                  <td><?php echo $no++;?></td>
                                  <td>
                                    <img src="<?php echo base_url('upload/'.$row->gambar);?>" style="height:100px;" ><br>
                                        <a class="btn btn-mini" href="<?php echo site_url('project/editgambar/'.$row->id_projects);?>" data-toggle="modal"><i class="fa fa-pencil"></i>
                                          Edit Image
                                        </a>
                                  </td>
                                  <td><?php echo $row->judul;?></td>
                                  <td>
                                    <?php $isi=$row->isi;
                                    $isi=character_limiter($isi,100);?>
                                    <?php echo $isi;?>
                                  </td>
                                  <td>
                                      <a class="btn btn-mini" href="<?php echo site_url('project/edit/'.$row->id_projects);?>" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a>
                                      <a class="btn btn-mini" href="<?php echo site_url('project/proseshapus/'.$row->id_projects);?>"
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
