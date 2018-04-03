
<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php base_url('admin');?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>V</b>O</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b> VIRTO</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
                <li>
                  <a target="_blank" href="<?php echo base_url('onepage');?>">
                    <span>View Website</span>
                  </a>
                </li>
              </ul>
            </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="<?php echo base_url('admin');?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li class="treeview">

            <a href="#">
              <i class="fa fa-star-o "></i> <span>Section</span>
              <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
            </a>

            <ul class="treeview-menu">

              <li class="treeview">
              <a href="<?php echo base_url('admin/about');?>">
              <i class="fa fa-building-o"></i> <span>About us</span>
              </a>
              </li>
             
              <li class="treeview">

            <a href="#">
              <i class="fa fa-book "></i> <span>Benefit</span>
              <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
            </a>

            <ul class="treeview-menu">

              <li class="treeview">
                <a href="<?php echo base_url('admin/section_benefit');?>">
                  <i class="fa fa-circle"></i> <span>Section Benefit</span>
                </a>
              </li>
              <li class="treeview">
              <a href="<?php echo base_url('admin/benefit');?>">
              <i class="fa fa-circle"></i> <span>Benefit</span>
              </a>
              </li>
              </ul>

              <li class="treeview">
              <a href="#">
              <i class="fa fa-circle "></i> <span>Event</span>
              <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
            </a>

            <ul class="treeview-menu">

              <li class="treeview">
                <a href="<?php echo base_url('admin/section_event');?>">
                  <i class="fa fa-circle"></i> <span>Section Event</span>
                </a>
              </li>
              <li class="treeview">
              <a href="<?php echo base_url('admin/event');?>">
              <i class="fa fa-circle"></i> <span>Event</span>
              </a>
              </li>
              </ul>
              <li class="treeview">
              <a href="#">
              <i class="fa fa-group "></i> <span>Testimonial</span>
              <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
            </a>

            <ul class="treeview-menu">

              <li class="treeview">
                <a href="<?php echo base_url('admin/section_testimoni');?>">
                  <i class="fa fa-circle"></i> <span>testimoni</span>
                </a>
              </li>
              <li class="treeview">
             <a href="<?php echo base_url('admin/testimonial');?>">
             <i class="fa fa-circle"></i> <span>Testimonial</span>
             </a>
              </li>

              </ul>

              
              <li class="treeview">
                <a href="<?php echo base_url('admin/section_galeri');?>">
                  <i class="fa fa-circle"></i> <span>Galeri</span>
                </a>
              </li>
              <li class="treeview">
                <a href="<?php echo base_url('admin/section_kontak');?>">
                  <i class="fa fa-circle"></i> <span>Kontak</span>
                </a>
              </li>
              <li class="treeview">
                <a href="<?php echo base_url('admin/section_quote');?>">
                  <i class="fa fa-circle"></i> <span>Quote</span>
                </a>
              </li>
              <li class="treeview">
                <a href="<?php echo base_url('admin/section_services');?>">
                  <i class="fa fa-circle"></i> <span>Services</span>
                </a>
              </li>
              
                </ul>
              </li>

        <li class="treeview">
          <a href="<?php echo base_url('admin/slider');?>">
            <i class="fa fa-laptop  "></i> <span>Slider</span>
          </a>
        </li>
        
        
        <li class="treeview">
          <a href="<?php echo base_url('admin/layanan');?>">
            <i class="fa fa-building-o"></i> <span>Layanan</span>
          </a>
        </li>
        
        
        
          <li class="treeview">
            <a href="#">
              <i class="fa fa-star-o "></i> <span>Galery</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
        <ul class="treeview-menu">
        <li class="treeview">
          <a href="<?php echo base_url('admin/galery');?>">
            <i class="fa fa-circle"></i> <span>List Galery</span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url('admin/catagories');?>">
            <i class="fa fa-circle"></i> <span>List Catagories</span>
          </a>
        </li>
        </ul>
        </li>
        
        <li class="treeview">
          <a href="<?php echo base_url('admin/aplikasi');?>">
            <i class="fa fa-picture-o"></i> <span>Aplikasi</span>
          </a>
        </li>
      <li class="treeview">
          <a href="<?php echo base_url('admin/newslatter');?>">
            <i class="fa fa-picture-o"></i> <span>Newsletter</span>
          </a>
        </li>      

          <li class="treeview">
            <a href="#">
              <i class="fa fa-cogs "></i> <span>Setting</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>


          <ul class="treeview-menu">
            
            <li class="treeview">
              <a href="<?php echo base_url('admin/kontak');?>">
                <i class="fa fa-circle  "></i> <span>Kontak</span>
              </a>
            </li>

            <li class="treeview">
              <a href="<?php echo base_url('admin/seo');?>">
                <i class="fa fa-circle  "></i> <span>SEO</span>
              </a>
            </li>

            <li class="treeview">
              <a href="<?php echo base_url('admin/map');?>">
                <i class="fa fa-circle  "></i> <span>Map</span>
              </a>
            </li>
              <li class="treeview">
                <a href="<?php echo base_url('admin/sosmed');?>">
                  <i class="fa fa-circle  "></i> <span>Sosial Media</span>
                </a>
              </li>
                <li class="treeview">
                  <a href="<?php echo base_url('admin/user');?>">
                    <i class="fa fa-circle  "></i> <span>User</span>
                  </a>
                </li>
          </ul>
        </li>
          <li class="treeview">
            <a href="<?php echo base_url('login/logout');?>">
              <i class="fa fa-sign-out"></i> <span>Logout</span>
            </a>
          </li>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
