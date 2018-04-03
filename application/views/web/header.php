<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<!-- Document Meta
============================================= -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--IE Compatibility Meta-->
<?php foreach($data_seo as $row ): ?>
<meta name="author" content="Virto Office" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="<?php echo $row->description;?>">
<meta name="keyword" content="<?php echo $row->keyword;?>">
<link href="upload/logo virto.png" rel="icon">

<!-- Fonts
============================================= -->
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CRaleway:100,200,300,400,500,600,700,800%7CDroid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

<!-- Stylesheets
============================================= -->
<link href="assets/css/external.css" rel="stylesheet">
<!-- Extrnal CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<!-- Boostrap Core CSS -->
<link href="assets/css/style.css" rel="stylesheet">
<!-- Style CSS -->
<script src="https://use.fontawesome.com/a8e12b6f29.js"></script>
<link rel="stylesheet" type="text/css" href="assets/revolution/css/settings.css">
<link rel="stylesheet" type="text/css" href="assets/revolution/css/layers.css">
<link rel="stylesheet" type="text/css" href="assets/revolution/css/navigation.css"> 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->

<!-- Document Title
    ============================================= -->
<title><?php echo $row->title;?></title>
<?php endforeach;?>
</head>

<body>
<header id="navbar-spy" class="full-header header-8">
	<nav id="primary-menu" class="navbar navbar-fixed-top style-1">
		<div id="top-bar" class="top-bar">
			<div class="container">
				<div class="row outer">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="top-bar-inner">
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-4">
									<div class="navbar-header">
										<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										</button>
										<a class="logo" href="<?php echo base_url();?>">
											<img src="assets/images/logo/logo-light.png" alt="Virto Office">
										</a>
									</div>
								</div>
                    <?php foreach($data_setting as $row ): ?>
								<!-- .col-md-6 end -->
								<div class="col-xs-12 col-sm-12 col-md-8 top-bar-contact hidden-xs hidden-sm">
									<ul class="list-inline pull-right">
										<li class="col-md-12 widget">
											<div class="widget-contact-icon pull-left">
												<i class="fa fa-whatsapp"></i>
											</div>
											<div class="widget-contact-info">
												<p class="text-capitalize">Whatsapp</p>
												<a href="http://api.whatsapp.com/send?phone=6281230265000" ><p class="font-heading"><?php echo $row->hp;?></p></a>
											</div>
										</li>
										<!-- .widget end -->
										<li class="col-md-6 widget">
											<div class="widget-contact-icon pull-left">
												<i class="lnr lnr-phone"></i>
											</div>
											<div class="widget-contact-info">
												<p class="text-capitalize">hubungi kami</p>
												<p class="text-capitalize font-heading"><?php echo $row->tlp;?></p>
											</div>
										</li>
										<!-- .widget end -->
									</ul>
								</div>
                    <?php endforeach;?>
								<!-- .col-md-6 end -->
							</div>
						</div>
					</div>
					<!-- .col-md-12 -->
				</div>
			</div>
		</div>
		<div class="row">
			<div class="container outer-2">
				<!-- Brand and toggle get grouped for better mobile display -->
				
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-left">
						<li class="has-dropdown active">
							<a href="#hero" data-toggle="dropdown" class="dropdown-toggle">Beranda</a>
						</li>
						<!-- li end -->
						<li class="has-dropdown">
							<a href="#layanan" data-toggle="dropdown" class="dropdown-toggle">Layanan</a>
						</li>
						<!-- li end -->
						<li class="has-dropdown pull-left">
							<a href="#kontak" data-toggle="dropdown" class="dropdown-toggle">Kontak</a>
						</li>
						<!-- li end -->
						<li class="has-dropdown pull-left">
							<a href="#galeri" data-toggle="dropdown" class="dropdown-toggle">Galeri</a>
						</li>
						<!-- li end -->
						<li class="has-dropdown">
							<a href="http://sewakantorsurabaya.com/blog" class="dropdown-toggle">Artikel</a>
						</li>
						<!-- li end -->
					</ul>
						<!-- .module-search-->
					</div>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</div>
	</nav>
</header>