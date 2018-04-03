<!-- Hero Section
============================================= -->
<section id="hero" class="hero">
	
	<!-- START REVOLUTION SLIDER 5.0 -->
	<div class="rev_slider_wrapper">
	<div id="slider1" class="rev_slider"  data-version="5.0">
		<ul>
			
		<?php foreach($data_slider as $row ): ?>
			<!-- slide 1 -->
			<li data-transition="turnoff-vertical" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" style="background-color: rgba(34, 34, 34, 0.3);">
				<!-- MAIN IMAGE -->
				<img src="upload/<?php echo $row->gambar;?>"  alt=""  width="1920" height="1280">
				<!-- LAYER NR. 1 -->
				<div class="tp-caption" 
					data-x="center" data-hoffset="0" 
					data-y="center" data-voffset="-100" 
					data-whitespace="nowrap"
					data-width="none"
					data-height="none"
					data-transform_idle="o:1;"
					data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
					data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
					data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
					data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
					data-start="500" 
					data-splitin="none" 
					data-splitout="none" 
					data-responsive_offset="on"
					data-fontsize="['25','25','15','15']"
					data-lineheight="['45','45','25','25']"
					data-fontweight="['600','500','600','300']"
					data-color="#2f2f2f" style="font-family: raleway">
					<?php echo $row->layer1;?>
				</div>
				
				<!-- LAYER NR. 2 -->
				<div class="tp-caption text-uppercase" 
					data-x="center" data-hoffset="0" 
					data-y="center" data-voffset="-30" 
					data-whitespace="nowrap"
					data-width="none"
					data-height="none"
					data-transform_idle="o:1;"
					data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
					data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
					data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
					data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
					data-start="750" 
					data-splitin="none" 
					data-splitout="none" 
					data-responsive_offset="on"
					data-fontsize="['30','17','15','15']"
					data-lineheight="['55','45','25','25']"
					data-fontweight="['700','500','600','300']"
					data-color="#2f2f2f" style="font-family: montserrat; text-align:center "
					>
					<h1 style="color:#2f2f2f; font-size:35px"><?php echo $row->layer2;?></h1>
				</div>
				
				<!-- LAYER NR. 3 -->
				<div class="tp-caption" 
					id="slide-163-layer-6" 
					data-x="center" data-hoffset="0" 
					data-y="center" data-voffset="90" 
					data-width="none"
					data-height="none"
					data-whitespace="nowrap"
					data-transform_idle="o:1;"
					data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power3.easeOut;"
					data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
					data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
					data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
					data-mask_out="x:inherit;y:inherit;" 
					data-start="1250" 
					data-splitin="none" 
					data-splitout="none" 
					data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""}]'
					data-basealign="slide" 
					data-responsive_offset="on" 
					data-responsive="off">
					<a class="btn btn-primary mr-sm" href="<?php echo $row->url1;?>"><?php echo $row->tombol1;?></a>
					<a class="btn btn-primary btn-white" href="<?php echo $row->url2;?>"><?php echo $row->tombol2;?></a>
				</div>
			</li>
		<?php endforeach;?>
			
		</ul>
	</div>
	<!-- END REVOLUTION SLIDER -->
</div>
<!-- END OF SLIDER WRAPPER -->
</section>
<!-- #hero end -->


<!-- Service Block #4
============================================= -->
<section id="layanan" class="service service-4 bg-gray">
	<div class="container">
		<div class="row">
			
				<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
						<div class="heading heading-2 text-center">
							
						<?php foreach($data_section_services as $row ): ?>
							<div>
								<h2><?php echo $row->judul;?></h2>
							</div>
							<p class="mb-0 mt-md"><?php echo $row->subjudul;?>.</p>
						<?php endforeach;?>
						</div>
						<!-- .heading end -->
					</div>
					<!-- .col-md-6 end -->
					
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="row">
					<!-- Service Block #1 -->
					<?php foreach($data_services as $row ): ?>
					<div class="col-xs-12 col-sm-3 col-md-3 service-block">
						<div class="service-img">
							<img src="<?php echo base_url('upload/'.$row->gambar);?>" width="270" height="auto" alt="<?php echo $row->judul;?>"/>
						</div>
						<div class="service-content">
							<div class="service-desc">
								<h4><?php echo $row->judul;?></h4>
								<p><?php echo $row->deskripsi;?></p>
								<a class="read-more" href="<?php echo $row->url;?>"><i class="fa fa-plus"></i>
									<span>Selengkapnya</span>
								</a>
							</div>
						</div>
					</div>					
					<?php endforeach;?>
					<!-- .col-md-4 end -->
					
					
				</div>
			</div>
			<!-- .col-md-12 end -->
		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
</section>

<!-- Shortcode #10
============================================= -->
<section id="shortcode-10" class="shortcode-10">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
				<div class="heading heading-2 text-center">
					<div>
					<?php foreach($data_section_benefit as $row ): ?>
						<h2><?php echo $row->judul;?></h2>
					<?php endforeach;?>
					</div>
				</div>
				<!-- .heading end -->
			</div>
			<!-- .col-md-8 end -->
			
		</div>
		<!-- .row End -->
		<div class="row text-center">
			<?php foreach($data_benefit as $row ): ?>
			<div class="col-xs-12 col-sm-3 col-md-15 feature feature-1">
				<div class="feature-icon">
					<img src="<?php echo base_url('upload/'.$row->gambar);?>" width="100" height="auto"  />
				</div>
				<h4 class="text-uppercase font-16"><?php echo $row->judul;?></h4>
				<p><?php echo $row->deskripsi;?></p>
			</div>
			<?php endforeach;?>
		</div>
		<!-- .row end -->
	</div>
	<!-- .container End -->
</section>
<!-- #shortcode end-->


<!-- Call To Action #3
============================================= -->
<section id="cta-3" class="cta cta-3 bg-overlay bg-overlay-theme text-center">
	<div class="bg-section" >
		<img src="assets/images/call/2.jpg" alt="Background"/>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
			<?php foreach($data_section_quote as $row ): ?>
				<h2><?php echo $row->judul;?></h2>
				<p><?php echo $row->deskripsi;?></p>
			<?php endforeach;?>
			<a href="https://api.whatsapp.com/send?phone=6281230265000"><img src="upload/tombol-wa.png" /></a>
			</div>
			<!-- .col-md-8 end -->
		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
</section>
<!-- #cta-3 end -->

<!-- Contact #1
============================================= -->
<section id="kontak" class="contact">
	<div class="container">
		<div class="row">
		<?php foreach($data_section_map as $row ): ?>
		<div class="col-xs-12 col-sm-12 col-md-12 mb-0-sm">
			<div class="heading heading-2 text-center">
				<div>
					<p class="mb-0"><?php echo $row->subjudul;?></p>
					<h2><?php echo $row->judul;?></h2>
				</div>
			</div>
			<!-- .heading end -->
		</div>
			<!-- .col-md-12 end -->
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-4 widgets-contact mb-60-xs">
						<div class="widget">
							<div class="widget-contact-icon pull-left">
								<i class="fa fa-map-o"></i>
							</div>
							<div class="widget-contact-info">
								<p class="text-capitalize"><?php echo $row->why1a;?></p>
								<p class="text-capitalize font-heading"><?php echo $row->why1b;?></p>
							</div>
						</div>
						<!-- .widget end -->
						<div class="clearfix">
						</div>
						<div class="widget">
							<div class="widget-contact-icon pull-left">
								<i class="fa fa-plane"></i>
							</div>
							<div class="widget-contact-info">
								<p class="text-capitalize "><?php echo $row->why2a;?></p>
								<p class="text-capitalize font-heading"><?php echo $row->why2b;?></p>
							</div>
						</div>
						<!-- .widget end -->
						<div class="clearfix">
						</div>
						<div class="widget">
							<div class="widget-contact-icon pull-left">
								<i class="fa fa-clock-o"></i>
							</div>
							<div class="widget-contact-info">
								<p class="text-capitalize"><?php echo $row->why3a;?></p>
								<p class="text-capitalize font-heading"><?php echo $row->why3b;?></p>
							</div>
						</div>
						<!-- .widget end -->
						<div class="clearfix">
						</div>
						<div class="widget">
							<div class="widget-contact-icon pull-left">
								<i class="fa fa-car"></i>
							</div>
							<div class="widget-contact-info">
								<p class="text-capitalize"><?php echo $row->why4a;?></p>
								<p class="text-capitalize font-heading"><?php echo $row->why4b;?></p>
							</div>
						</div>
					</div>
					<!-- .col-md-4 end -->
					<div class="col-xs-12 col-sm-12 col-md-8">
						<div class="row">
							<iframe src="<?php echo $row->map;?>" width="800" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
							
						</div>
					</div>
					<!-- .col-md-8 end -->
				</div>
				<!-- .row end -->
			</div>
			<!-- .col-md-12 end -->
			<?php endforeach;?>
		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
</section>


<!-- Event
============================================= -->
<section class="bg-gray" id="event">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
				<div class="heading heading-3 text-center">
					<div>
					<?php foreach($data_section_event as $row ): ?>
						<p class="mb-0"><?php echo $row->subjudul;?></p>
						<h2><?php echo $row->judul;?></h2>
					<?php endforeach;?>
					</div>
				</div>
				<!-- .heading end -->
			</div>
			<!-- .col-md-8 end -->
		</div>
		<!-- .row end -->
		<div class="row">
			
			<!-- Entry Article #4 -->
			<?php foreach($data_event as $row ): ?>
			<div class="col-xs-12 col-sm-6 col-md-4 entry">
				<div class="entry-img">
					<a class="img-popup" href="<?php echo base_url('upload/'.$row->gambar);?>">
						<img src="<?php echo base_url('upload/'.$row->gambar);?>" alt="title"/>
					</a>
				</div>
				<!-- .entry-img end -->
				<div class="entry-meta clearfix">
					<ul class="pull-left">
						<li class="entry-format">
							<i class="fa fa-calendar"></i>
						</li>
						<li class="entry-date">
							<span><?php echo $row->bulan;?></span>
							<?php echo $row->tanggal;?> </li>
					</ul>
					<ul class="pull-right text-right">
						<li class="entry-cat">Tema:
							<span>
							<a href="#"><?php echo $row->tema;?></a>
							</span>
						</li>
					</ul>
				</div>
				<!-- .entry-content end -->
			</div>
			<!-- .entry end -->
			<?php endforeach;?>
			
		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
</section>

<!-- Projects Section
============================================= -->
<section id="galeri" class="projects-fullwidth projects-4col pb-0">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="heading heading-3 text-center mb-0">
					<div>
						<?php foreach($data_section_galeri as $row ): ?>
						<p class="mb-0"></p>
						<h2><?php echo $row->judul;?></h2>
						<?php endforeach;?>
					</div>
				</div>
				<!-- .heading end -->
			</div>
			<!-- .col-md-12 end -->
		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
	<div class="container-fluid">
		<div class="row">
			<!-- Projects Filter
			============================================= -->
			<div class="col-xs-12 col-sm-12 col-md-12 projects-filter">
				<ul class="list-inline">
					<li>
						<a class="active-filter" href="#" data-filter="*">Semua</a>
					</li>
					<?php foreach($data_galeri_kategori as $row ): ?>
					<li>
						<a href="#" data-filter=".<?php echo $row->id_galeri_kategori;?>"><?php echo $row->judul;?></a>
					</li>
					<?php endforeach;?>
				</ul>
			</div>
			<!-- .projects-filter end -->
		</div>
		<!-- .row end -->
		
		<!-- Projects Item
		============================================= -->
		<div id="projects-all" class="row">
			
			<!-- Project Item #1 -->
			<?php foreach($data_galeri as $row ): ?>
			<div class="col-xs-12 col-sm-6 col-md-3 project-item <?php echo $row->id_galeri_kategori;?>">
				<div class="project-img">
					<img src="<?php echo base_url('upload/'.$row->gambar);?>" width="350" height="auto" />
					<div class="project-hover">
						<div class="project-meta">
							<h6><?php echo $row->subjudul;?></h6>
							<h4>
								<a href="#"><?php echo $row->judul;?></a>
							</h4>
						</div>
						<div class="project-zoom">
							<a class="img-popup" href="<?php echo base_url('upload/'.$row->gambar);?>" title="<?php echo $row->judul;?>"><i class="fa fa-plus"></i></a>
						</div>
					</div>
					<!-- .project-hover end -->
				</div>
				<!-- .project-img end -->
				
			</div>
			<!-- .project-item end -->
			<?php endforeach;?>			
			
		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
</section>

<!-- Testimonials #1
============================================= -->
<section id="testimonials" class="testimonial testimonial-1 bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="heading heading-3 text-center">
					<div>
					<?php foreach($data_section_testimoni as $row ): ?>
						<p class="mb-0"><?php echo $row->subjudul;?></p>
						<h2><?php echo $row->judul;?></h2>
					<?php endforeach;?>			
					</div>
				</div>
				<!-- .heading end -->
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div id="testimonial-oc" class="testimonial-carousel">
					
				<?php foreach($data_testimoni as $row ): ?>
					<!-- testimonial item #1 -->
					<div class="testimonial-item">
						<div class="testimonial-content">
							<div class="testimonial-img">
								<i class="fa fa-quote-left"></i>
								<img src="<?php echo base_url('upload/'.$row->gambar);?>" alt="virto office"/>
							</div>
							<p><?php echo $row->testimoni;?></p>
						</div>
						<div class="testimonial-divider">
						</div>
						<div class="testimonial-meta">
							<strong><?php echo $row->nama;?></strong>, <?php echo $row->jabatan;?>
						</div>
					</div>
					<!-- .testimonial-item end -->
				<?php endforeach;?>			
					
				</div>
			</div>
			<!-- .col-md-12 end -->
			
		</div>
		<!-- .row end -->
		
	</div>
	<!-- .container end -->
	
</section>
<!-- #testimonials end -->

<!-- Heading #6
============================================= -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="row">
				<?php foreach($data_aplikasi as $row ): ?>	
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="heading heading-6 mb-0">
							<div class="heading-bg heading-left">
								<p ><img src="<?php echo base_url('upload/'.$row->gambar);?>"></p>
							</div>
						</div>
						<!-- .heading end -->
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<br><br><br><h5><b><?php echo $row->judul;?></h5>
						<p><?php echo $row->deskripsi;?></p>
						<a href="<?php echo $row->playstore;?>"><img src="upload/hp-gp.png"></a>
						<a href="<?php echo $row->appstore;?>"><img src="upload/hp-as.png"></a>
					</div>
				<?php endforeach;?>			
				</div>
			</div>
			<!-- .col-md-12 end -->
		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
</section>

<!-- Shortcode #9 
============================================= -->
<section id="clients" class="shortcode-9">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="heading heading-2 text-center">
					<div class="heading-bg">
						<p class="mb-0">They Always Trust Us</p>
						<h2>Our Clients</h2>
					</div>
				</div>
				<!-- .heading end -->
			</div>
			<!-- .col-md-12 end -->
		</div>
		<!-- .row end -->
		<div class="row">
			
			<!-- Client Item -->
			<div class="col-xs-2 col-sm-4 col-md-2">
				<div class="brand">
					<img class="img-responsive center-block" src="assets/images/clients/2.png" alt="brand">
				</div>
			</div>
			<!-- .col-md-2 end -->
			
			<!-- Client Item -->
			<div class="col-xs-2 col-sm-4 col-md-2">
				<div class="brand">
					<img class="img-responsive center-block" src="assets/images/clients/3.jpg" alt="brand">
				</div>
			</div>
			<!-- .col-md-2 end -->
			
			<!-- Client Item -->
			<div class="col-xs-2 col-sm-4 col-md-2">
				<div class="brand">
					<img class="img-responsive center-block" src="assets/images/clients/4.jpg" alt="brand">
				</div>
			</div>
			<!-- .col-md-2 end -->
			
			<!-- Client Item -->
			<div class="col-xs-2 col-sm-4 col-md-2">
				<div class="brand">
					<img class="img-responsive center-block" src="assets/images/clients/5.png" alt="brand">
				</div>
			</div>
			<!-- .col-md-2 end -->
			
			<!-- Client Item -->
			<div class="col-xs-2 col-sm-4 col-md-2">
				<div class="brand last">
					<img class="img-responsive center-block" src="assets/images/clients/6.png" alt="brand">
				</div>
			</div>
			<!-- .col-md-2 end -->

			<!-- Client Item -->
			<div class="col-xs-2 col-sm-4 col-md-2">
				<div class="brand last">
					<img class="img-responsive center-block" src="assets/images/clients/7.jpg" alt="brand">
				</div>
			</div>
			<!-- .col-md-2 end -->

			<!-- Client Item -->
			<div class="col-xs-2 col-sm-4 col-md-2">
				<div class="brand last">
					<img class="img-responsive center-block" src="assets/images/clients/8.jpg" alt="brand">
				</div>
			</div>
			<!-- .col-md-2 end -->

			<!-- Client Item -->
			<div class="col-xs-2 col-sm-4 col-md-2">
				<div class="brand last">
					<img class="img-responsive center-block" src="assets/images/clients/9.png" alt="brand">
				</div>
			</div>
			<!-- .col-md-2 end -->

			<!-- Client Item -->
			<div class="col-xs-2 col-sm-4 col-md-2">
				<div class="brand last">
					<img class="img-responsive center-block" src="assets/images/clients/10.jpg" alt="brand">
				</div>
			</div>
			<!-- .col-md-2 end -->

			<!-- Client Item -->
			<div class="col-xs-2 col-sm-4 col-md-2">
				<div class="brand last">
					<img class="img-responsive center-block" src="assets/images/clients/11.png" alt="brand">
				</div>
			</div>
			<!-- .col-md-2 end -->

			<!-- Client Item -->
			<div class="col-xs-2 col-sm-4 col-md-2">
				<div class="brand last">
					<img class="img-responsive center-block" src="assets/images/clients/12.jpg" alt="brand">
				</div>
			</div>
			<!-- .col-md-2 end -->

			<!-- Client Item -->
			<div class="col-xs-2 col-sm-4 col-md-2">
				<div class="brand last">
					<img class="img-responsive center-block" src="assets/images/clients/13.png" alt="brand">
				</div>
			</div>
			<!-- .col-md-2 end -->
		</div>
		<!-- .row End -->
	</div>
	<!-- .container end -->
</section>