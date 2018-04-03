
<!-- Call To Action #1
============================================= -->
<section id="cta-1" class="cta pb-0">
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="cta-1 bg-theme">
				<div class="row">
					<!-- .col-md-2 end -->
				    <?php foreach($data_section_kontak as $row ): ?>	
					<div class="col-xs-12 col-sm-12 col-md-7 text-center-xs">
						<div class="cta-desc">
							<p><?php echo $row->subjudul;?></p>
							<h5><?php echo $row->judul;?></h5>
						</div>
					</div>
					<?php endforeach;?>	
					<!-- .col-md-7 end -->
					<div class="col-xs-12 col-sm-12 col-md-2 pull-right pull-none-xs">
						<div class="cta-action">
							<a class="btn btn-secondary" href="https://api.whatsapp.com/send?phone=6281230265000" >HUBUNGI KAMI</a>
							
							<!-- .model-quote end -->
						</div>
					</div>
					<!-- .col-md-2 end -->
				</div>
			</div>
			<!-- .cta-1 end -->
		</div>
		<!-- .col-md-12 end -->
	</div>
	<!-- .row end -->
</div>
<!-- .container end -->
</section>
<!-- #cta-1 end -->
<footer id="footer" class="footer-1">
<!-- Contact Bar
============================================= -->
<div class="container footer-widgtes">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="widgets-contact">
				<?php foreach($data_setting2 as $row ): ?>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-4 widget">
						<div class="widget-contact-icon pull-left">
							<i class="lnr lnr-map"></i>
						</div>
						<div class="widget-contact-info">
							<p class="text-capitalize text-white">Kunjungi Kami</p>
							<p class="text-capitalize font-heading"><br><?php echo $row->alamat;?></p>
						</div>
					</div>
					<!-- .widget end -->
					<div class="col-xs-12 col-sm-12 col-md-4 widget">
						<div class="widget-contact-icon pull-left">
							<i class="lnr lnr-envelope"></i>
						</div>
						<div class="widget-contact-info">
							<p class="text-capitalize text-white">Email Kami</p>
							<p class="text-capitalize font-heading"><br><?php echo $row->email;?></p>
						</div>
					</div>
					<!-- .widget end -->
					<div class="col-xs-12 col-sm-12 col-md-4 widget">
						<div class="widget-contact-icon pull-left">
							<i class="lnr lnr-phone"></i>
						</div>
						<div class="widget-contact-info">
							<p class="text-capitalize text-white">Hubungi Kami</p>
							<p class="text-capitalize font-heading"><br><?php echo $row->tlp;?></p>
						</div>
					</div>
					<!-- .widget end -->
				</div>
				<?php endforeach;?>	
				<!-- .row end -->
			</div>
			<!-- .widget-contact end -->
		</div>
		<!-- .col-md-12 end -->
	</div>
	<!-- .row end -->
</div>
<!-- .container end -->

<!-- Widget Section
============================================= -->
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 widgets-links">
			<div class="col-xs-12 col-sm-12 col-md-12 widget-about text-center-xs mb-30-xs">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-3">
						<ul class="list-unstyled text-capitalize">
						<h5 class="text-capitalize text-white">Layanan</h5>
							<li>
								<a href="#"> Serviced Office</a>
							</li>
							<li>
								<a href="#"> Virtual Office</a>
							</li>
							<li>
								<a href="#"> Meeting Room</a>
							</li>
							<li>
								<a href="#"> Coworking Space</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3">
						<ul class="list-unstyled text-capitalize">
						<h5 class="text-capitalize text-white">Tentang Kami</h5>
							<li>
								<a href="#"> Virto Office</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3">
						<ul class="list-unstyled text-capitalize">
						<h5 class="text-capitalize text-white">Hubungi Kami</h5>
							<li>
								<a href="#"> Ajukan Pertanyaan</a>
							</li>
							<li>
								<a href="#"> Layanan Pelanggan</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3">
						<ul class="list-unstyled text-capitalize">
						<h5 class="text-capitalize text-white">Unduh Aplikasi Kami</h5>
							<li>
								<a href="#"> Cari Sewa Kantor</a>
							</li>
							<li>
								<a href="#"> Booking Meeting</a>
							</li>
							<li>
								<a href="#"> Info Layanan</a>
							</li>
							<li>
								<a href="#"> Info Event</a>
							</li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<!-- Social bar
============================================= -->
<div class="widget-social">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6 mb-30-xs mb-30-sm">
				<div class="widget-social-info pull-left text-capitalize pull-none-xs mb-15-xs">
					<p class="mb-0">Ikuti <br>
						Social Media Kami</p>
				</div>
				<?php foreach($data_sosmed as $row ): ?>
				<div class="widget-social-icon pull-right text-right pull-none-xs">
					<a href="<?php echo $row->facebook;?>">
						<i class="fa fa-facebook"></i><i class="fa fa-facebook"></i>
					</a>
					<a href="<?php echo $row->linked;?>">
						<i class="fa fa-linkedin"></i><i class="fa fa-linkedin"></i>
					</a>
					<a href="<?php echo $row->instagram;?>">
						<i class="fa fa-instagram"></i><i class="fa fa-instagram"></i>
					</a>
				</div>
				<?php endforeach;?>	
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="widget-newsletter-info pull-left text-capitalize pull-none-xs mb-15-xs">
					<p class="mb-0">subsribe<br>
						on our newsletter</p>
				</div>
				<div class="widget-newsletter-form pull-right text-right">
					
					<!-- Mailchimp Form 
					=============================================-->
					<form class="mailchimp">
						<div class="subscribe-alert">
						</div>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Type Your Email Account">
							<span class="input-group-btn">
							<button class="btn text-capitalize" type="button">join</button>
							</span>
						</div>
						<!-- /input-group -->
					</form>
					<!--Mailchimp Form End-->
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
			<p class="text-capitalize">© 2018 Virto Office</p>
			<p class="text-capitalize">Create by
				<a href="http://lehalehamedia.com">LehalehaMedia.com</a>
			</p>
		</div>
	</div>
</div>
</footer>

<script src="assets/js/jquery-2.1.1.min.js"></script>
<script src="assets/js/plugins.js?v=1.0.0"></script>
<script src="assets/js/functions.js?v=1.2.0"></script>
<!-- RS5.0 Core JS Files -->
<script type="text/javascript" src="assets/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
<script type="text/javascript" src="assets/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>

<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
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
  gridheight:600 ,
  
}); 
}); 
</script>

<script>
// Select all links with hashes
$('a[href*="#"]')
// Remove links that don't actually link to anything
.not('[href="#"]')
.not('[href="#0"]')
.click(function(event) {
// On-page links
if (
  location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
  && 
  location.hostname == this.hostname
) {
  // Figure out element to scroll to
  var target = $(this.hash);
  target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
  // Does a scroll target exist?
  if (target.length) {
	// Only prevent default if animation is actually gonna happen
	event.preventDefault();
	$('html, body').animate({
	  scrollTop: target.offset().top
	}, 1000, function() {
	  // Callback after animation
	  // Must change focus!
	  var $target = $(target);
	  $target.focus();
	  if ($target.is(":focus")) { // Checking if the target was focused
		return false;
	  } else {
		$target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
		$target.focus(); // Set focus again
	  };
	});
  }
}
});
</script>
<!-- MailMunch for Virto Office -->
<!-- Paste this code right before the </head> tag on every page of your site. -->
<script src="//a.mailmunch.co/app/v1/site.js" id="mailmunch-script" data-mailmunch-site-id="464668" async="async"></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5a61a4cf4b401e45400c378c/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
                                    

</body>
</html>