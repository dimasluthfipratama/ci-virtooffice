<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<!-- Document Meta
============================================= -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--IE Compatibility Meta-->
<?php foreach($data_seo as $row ): ?>
<meta name="author" content="Bali Dreamcatchers" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="<?php echo $row->description;?>"/>
<meta name="keywords" content="<?php echo $row->keyword;?>"/>
<link href="assets/images/favicon/fav.ico" rel="icon">
<title><?php echo $row->tittle;?></title>
<?php echo $row->anylitic;?>
<?php echo $row->webmaster;?>
<?php endforeach;?>
<!-- Fonts
============================================= -->
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CRaleway:100,200,300,400,500,600,700,800%7CDroid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

<!-- Stylesheets
============================================= -->
<link href="<?php echo base_url('assets/css/external.css');?>" rel="stylesheet">
<!-- Extrnal CSS -->
<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
<!-- Boostrap Core CSS -->
<link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">
<!-- Style CSS -->
<!-- RS5.0 Main Stylesheet -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/revolution/css/settings.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/revolution/css/layers.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/revolution/css/navigation.css');?>"> 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
<!-- Magnific Popup core CSS file -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css');?>">

<!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!-- Magnific Popup core JS file -->
<script src="<?php echo base_url('assets/js/jquery.magnific-popup.js');?>"></script>
<!-- Document Title
    ============================================= -->
</head>
<body>
<header id="navbar-spy" class="full-header header-7">
    <nav id="primary-menu" class="navbar navbar-fixed-top style-1">
        <div id="top-bar" class="top-bar hidden-xs">
            <div class="container">
                <div class="row outer">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="top-bar-inner">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 hidden-xs">
                                    <ul class="list-inline top-contact">
                                    <?php foreach($data_setting as $row ): ?>
                                        <li>
                                            <p>Phone:
                                                <span><?php echo $row->telepon;?></span>
                                            </p>
                                        </li>
                                        <li>
                                            <p>Email:
                                                <span><?php echo $row->email;?></span>
                                            </p>
                                        </li>
                                    <?php endforeach;?>
                                    </ul>
                                </div>
                                <!-- .col-md-6 end -->
                                <div class="col-xs-12 col-sm-6 col-md-6 text-right">
                                    <ul class="list-inline top-widget">
                                        <li class="top-social">
                                        <?php foreach($data_sosmed as $row ): ?>
                                            <a href="<?php echo $row->facebook;?>"><i class="fa fa-facebook"></i></a>
                                            <a href="<?php echo $row->instagram;?>"><i class="fa fa-instagram"></i></a>
                                            <a href="<?php echo $row->pinterest;?>"><i class="fa fa-pinterest"></i></a>
                                        <?php endforeach;?>
                                        </li>
                                        <li>
                        </li>
                                    </ul>
                                </div>
                                <!-- .col-md-6 end -->
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container outer">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="logo" href="<?php echo base_url();?>">
                    <?php foreach($data_setting2 as $row ): ?>
                        <img src="<?php echo base_url('upload/'.$row->logo);?>" alt="Logo Bali Dreamcatchers">
                    <?php endforeach;?>
                    </a>
                </div>
                
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="has-dropdown">
                            <a href="<?php echo base_url();?>" class="dropdown-toggle">Home</a>
                        </li>
                        <!-- li end -->
                        <li class="has-dropdown">
                            <a href="<?php echo base_url();?>" class="dropdown-toggle">about us</a>
                        </li> 
                        <!-- li end -->
                        <li class="has-dropdown">
                            <a href="<?php echo base_url();?>" class="dropdown-toggle">product</a>
                        </li>
                        <!-- li end -->
                        <li class="has-dropdown">
                            <a href="<?php echo base_url();?>" class="dropdown-toggle">contact us</a>
                        </li>
                                        
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </div>
    </nav>
</header>

<!-- Page Title
============================================= -->
<section class="bg-overlay bg-overlay-gradient pb-0">
    <div class="bg-section" >
        <?php foreach($data_gambar as $row ): ?>
        <img src="<?php echo base_url('upload/'.$row->galery);?>" alt="Background"/>
        <?php endforeach;?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="page-title title-1 text-center">
                    <div>
                    <?php foreach($detail_product as $row ): ?>
                        <h2><?php echo $row->judul2;?></h2>
                    </div>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url();?>">Home</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>">Product</a>
                        </li>
                    </ol>
                </div>
                <!-- .page-title end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>

<!-- Shop
============================================= -->
<section class="shop">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 shop-content">
                
                <!-- Product Image -->
                <div class="product-img product-feature-img mb-50">
                    <img src="<?php echo base_url('upload/'.$row->galery);?>" alt="product"/>
                </div>
                <!-- .product-img end -->
                
                <!-- Product Content -->
                <div class="product-content">
                    <div class="product-title text-center-xs">
                        <h3><?php echo $row->judul2;?></h3>
                    </div>
                    <!-- .product-img end -->
                    
                    
                    <div class="product-desc text-center-xs">
                        <p><?php echo $row->deskripsi;?></p>
                    </div>
                    <!-- .product-desc end -->
                    
                    <hr class="mt-50 mb-30">
                    <div class="product-action">
                        <div class="product-cta text-right text-center-xs">
                            <a class="btn btn-primary"  href="#" data-toggle="modal" data-target="#model-quote" id="modelquote">Request a Inquiry</a>
                        </div>
                    </div>
                    <!-- Modal -->
                            <div class="modal fade model-quote" id="model-quote" tabindex="-1" role="dialog" aria-labelledby="modelquote">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                            <div class="model-icon">
                                                <i class="lnr lnr-apartment"></i>
                                            </div>
                                            <div class="model-divider">
                                                <div class="model-title">
                                                    <p>Don’t Hesitate To ask</p>
                                                    <h6>Request a quote</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .model-header end -->
                                        <div class="modal-body">
                                            <form enctype="multipart/form-data" action="<?php echo site_url('email/emailSend')?>" method="post">
                                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Your Name" required/>
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required/>
                                                <input type="text" class="form-control" name="judul" id="judul" value="Inquiry : <?php echo $row->judul2;?>" required/>
                                                <textarea class="form-control" name="isi"  id="isi" placeholder="Quote Details" rows="2" required></textarea>
                                                <button type="submit" class="btn btn-primary btn-black btn-block">Submit Inquiry</button>
                                                <!--Alert Message-->
                                                <div id="pop-quote-result" class="mt-xs">
                                                </div>
                                            </form>
                                        </div>
                                        <!-- .model-body end -->
                                    </div>
                                </div>
                            </div>
            <?php endforeach;?>
                            <!-- .model-quote end -->
                    <!-- .product-action end -->
                    <hr class="mt-30 mb-30">
                </div>
                <!-- .product-content -->
                
                
                <!-- Related Project -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="widget-related-product">
                            <div class="widget-title">
                                <h4>Another product</h4>
                            </div>
                            <div class="widget-content">
                                <div class="row">
                                    <!-- product #1 -->
                                    <?php foreach($produkbaru->result() as $row ): ?>
                                    <div class="col-xs-12 col-sm-4 col-md-4 product-item clearfix">
                                        <div class="product-img">
                                            <img src="<?php echo base_url('upload/'.$row->galery);?>" alt="product">
                                            <div class="product-hover">
                                                <div class="product-cart">
                                                    <a class="btn btn-secondary btn-block" href="<?php echo base_url('pages/product/'.$row->url);?>">Check Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .product-img end -->
                                        <div class="product-bio">
                                            <h4>
                                                <a href="<?php echo base_url('pages/product/'.$row->url);?>"><?php echo $row->judul2;?></a>
                                            </h4>
                                        </div>
                                        <!-- .product-bio end -->
                                    </div>
                                    <!-- .product-item clearfix end -->
                                    <?php endforeach;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .product-related end -->
            </div>
            <!-- .shop-content end -->
            </div>
            <!-- .col-md-3 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<?php foreach($data_setting3 as $row ): ?>
<footer class="footer-1">
    <!-- Contact Bar
    ============================================= -->
    <div class="container footer-widgtes">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="widgets-contact">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4 widget">
                            <div class="widget-contact-icon pull-left">
                                <i class="lnr lnr-map"></i>
                            </div>
                            <div class="widget-contact-info">
                                <p class="text-capitalize text-white">visit us</p>
                                <p class="text-capitalize font-heading"><?php echo $row->alamat;?></p>
                            </div>
                        </div>
                        <!-- .widget end -->
                        <div class="col-xs-12 col-sm-12 col-md-4 widget">
                            <div class="widget-contact-icon pull-left">
                                <i class="lnr lnr-envelope"></i>
                            </div>
                            <div class="widget-contact-info">
                                <p class="text-capitalize text-white">email us</p>
                                <p class="text-capitalize font-heading"><?php echo $row->email;?></p>
                            </div>
                        </div>
                        <!-- .widget end -->
                        <div class="col-xs-12 col-sm-12 col-md-4 widget">
                            <div class="widget-contact-icon pull-left">
                                <i class="lnr lnr-phone"></i>
                            </div>
                            <div class="widget-contact-info">
                                <p class="text-capitalize text-white">call us</p>
                                <p class="text-capitalize font-heading"><?php echo $row->telepon;?></p>
                            </div>
                        </div>
                        <!-- .widget end -->
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .widget-contact end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
    <?php endforeach;?>
    
    <!-- Widget Section
    ============================================= -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 widgets-links">
                <div class="col-xs-12 col-sm-12 col-md-6 widget-about text-center-xs mb-30-xs">
                <?php foreach($data_footer as $row ): ?>
                    <div class="widget-about-logo pull-left pull-none-xs">
                        <img src="<?php echo base_url('upload/'.$row->logo);?>" alt="logo"/>
                    </div>
                    <div class="widget-about-info">
                        <h5 class="text-capitalize text-white"><?php echo $row->judul;?></h5>
                        <p class="mb-0"><?php echo $row->isi;?></p>
                    </div>
                    <?php endforeach;?>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 widget-navigation text-center-xs mb-30-xs">
                    <h5 class="text-capitalize text-white">navigation</h5>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <ul class="list-unstyled text-capitalize">
                                <li>
                                    <a href="<?php echo base_url();?>"> Home</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>"> About Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <ul class="list-unstyled text-capitalize">
                                <li>
                                    <a href="<?php echo base_url();?>"> Product</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>"> Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 widget-navigation text-center-xs mb-30-xs">
                    <h5 class="text-capitalize text-white">Follow Us On Social Media</h5>
                    <div class="row">

                    <?php foreach($data_sosmed2 as $row ): ?>
                    <div class="widget-social-icon pull-none-xs">
                        <a href="<?php echo $row->facebook;?>">
                            <i class="fa fa-facebook"></i><i class="fa fa-facebook"></i>
                        </a>
                        <a href="<?php echo $row->instagram;?>">
                            <i class="fa fa-instagram"></i><i class="fa fa-instagram"></i>
                        </a>
                        <a href="<?php echo $row->pinterest;?>">
                            <i class="fa fa-pinterest"></i><i class="fa fa-pinterest"></i>
                        </a>
                    </div>
                    <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyrights
    ============================================= -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 copyrights text-center">
                <p class="text-capitalize">© 2017 Bali Dreamcatchers. all rights reserved</p>
                <p class="text-capitalize">Create by
                    <a href="http://LehalehaMedia.com">LehalehaMedia.com</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- Footer Scripts
============================================= -->
<script src="<?php echo base_url('assets/js/jquery-2.1.1.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/plugins.js?v=1.0.0');?>"></script>
<script src="<?php echo base_url('assets/js/functions.js?v=1.2.0');?>"></script>
<!-- RS5.0 Core JS Files -->
<script type="text/javascript" src="<?php echo base_url('assets/revolution/js/jquery.themepunch.tools.min.js?rev=5.0');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0');?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/revolution/js/extensions/revolution.extension.video.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/revolution/js/extensions/revolution.extension.slideanims.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/revolution/js/extensions/revolution.extension.actions.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/revolution/js/extensions/revolution.extension.kenburn.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/revolution/js/extensions/revolution.extension.navigation.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/revolution/js/extensions/revolution.extension.migration.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/revolution/js/extensions/revolution.extension.parallax.min.js');?>"></script>
<script type="text/javascript"> 
jQuery(document).ready(function() { 
   jQuery("#slider1").revolution({
      sliderType:"standard",
      sliderLayout:"auto",
      delay:6000,
      disableProgressBar:"on",
      spinner:"off",
      navigation: {
        keyboardNavigation:"off",
        keyboard_direction: "horizontal",
        mouseScrollNavigation:"off",
        onHoverStop:"off",
        arrows: {
            style:"arrow",
            enable:true,
            hide_onmobile:true,
            hide_onleave:false,
            tmp:'',
            left: {
                h_align:"left",
                v_align:"bottom",
                h_offset:110,
                v_offset:50
            },
            right: {
                h_align:"left",
                v_align:"bottom",
                h_offset:150,
                v_offset:50
            }
        }
    }, 
      gridwidth:1230,
      gridheight:800 ,
      
    }); 
}); 
</script>
<script type="text/javascript"> 
$(document).ready(function() {
    $('.popup-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function(item) {
                return item.el.attr('title') + '<small>' + item.el.attr('description');
            }
        }
    });
});
</script>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
</body>
</html>