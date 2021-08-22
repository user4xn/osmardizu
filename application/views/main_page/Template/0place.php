<div id="ads_field" class="container">
    <img src="https://cloud.mardizu.co.id/event_image/live_event-main240621.png" style="max-width:100%">
</div>

<script type="text/javascript">
	$(document).ready(function(){
	loadAds();
	function loadAds(){
		$.ajax({
			url: 'https://www.mardizu.co.id/dev/banner_ads',
			type: 'get',
			datatype: 'json',
			success: function(response){
				var resT = $.parseJSON(response);
				$('#ads_field').empty();
				$('#ads_field').append("<img src='data:image/jpeg;base64,"+resT.ads64+"' style='max-width:100%''>");
			},error: function(XMLHttpRequest, textStatus, errorThrown){
				console.log('error'+textStatus);
			}
		});
	}
	});
</script>


<div class="rev_slider_wrapper fullwidthbanner-container">
    <!-- the ID here will be used in the inline JavaScript below to initialize the slider -->
    <div id="rev_slider_1" class="rev_slider" data-version="5.4.5" style="display:none">
        <ul>
            <!-- *********************** -->
            <!-- Slides to be added here -->
            <!-- *********************** -->
            <li data-transition="random-static" data-delay="6000">
                <!-- Text Layer with Fade-In Transition -->
                <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                <div class="opacity-extra-medium bg-black position-relative z-index-1"></div>
                <img src="<?= base_url('assets/asset_main');?>/images/slider/slider-bg-1.jpg" alt="Sky" class="rev-slidebg">
                <!-- Start New layer -->
                <div class="tp-caption tp-resizeme z-index-1" data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['center']" data-lineheight="['60', '32', '32', '24']" data-visibility="['on', 'on', 'on', 'on']"
                    data-x="center" data-y="center" data-voffset="['-40']" data-fontsize="['60', '24', '22', '18']" data-color="['#FFF', '#FFF', '#000', '#000']"
                    style="z-index: 7;font-family: 'Catamaran', sans-serif; font-weight: 700; letter-spacing:2px; padding: 0 20px;">
                    We Love To Make Brands Grow
                </div>
                <!-- END LAYER -->
                <!-- Start New layer -->
                <div class="tp-caption tp-resizeme z-index-1" data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['center']" data-lineheight="['35']" data-visibility="['on', 'on', 'on', 'on']" data-x="center" data-y="center" data-voffset="['70']" data-fontsize="['25','25','50','50']" data-color="['#FFF']" style="z-index: 7;">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod,
                    <br> veritatis tempore nostrum id officia quaerat eum corrupti,
                    <br> ipsa aliquam velit.</div>
                <!-- END LAYER -->
                <a href="contact.html" class="tp-caption btn btn-main" data-x="['center']" data-y="['center']" data-whitespace="nowrap" data-visibility="['on', 'on', 'on', 'on']"
                    data-type="text" data-voffset="['190']" data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":2500,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['center']" data-basealign="slide">Contact Us</a>
            </li>
            <!-- MINIMUM SLIDE STRUCTURE -->
            <li data-transition="random-static" data-delay="6000">
                <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                <img alt="Ocean" class="rev-slidebg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" src="<?= base_url('assets/asset_main');?>/images/slider/slider-bg-2.jpg"
                    alt="Ocean" class="rev-slidebg">
                <!-- Start New layer -->
                <div class="tp-caption tp-resizeme z-index-1" data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['center']" data-lineheight="['70', '32', '32', '24']" data-visibility="['on', 'on', 'on', 'on']" data-x="center"
                    data-y="center" data-voffset="['-40']" data-fontsize="['60', '24', '22', '18']" data-color="['#FFF', '#FFF', '#000', '#000']"
                    style="z-index: 7;font-family: 'Catamaran', sans-serif; font-weight: 700; letter-spacing:2px; padding: 0 20px;">
                    Make A Masterpiece With Us
                </div>
                <!-- END LAYER -->
                <!-- Start New layer -->
                <div class="tp-caption tp-resizeme z-index-1" data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['center']" data-lineheight="['35']" data-visibility="['on', 'on', 'on', 'on']" data-x="center" data-y="center" data-voffset="['70']" data-fontsize="['25','25','50','50']" data-color="['#FFF']" style="z-index: 7;">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod,
                    <br> veritatis tempore nostrum id officia quaerat eum corrupti,
                    <br> ipsa aliquam velit.</div>
                <!-- END LAYER -->
                <a href="contact.html" class="tp-caption btn btn-main" data-x="['center']" data-y="['center']" data-whitespace="nowrap" data-visibility="['on', 'on', 'on', 'on']"
                    data-type="text" data-voffset="['190']" data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":2500,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['center']" data-basealign="slide">Hire Us</a>
            </li>
        </ul>
        <div class="tp-bannertimer  tp-bottom" style="height: 6px; background-color: rgba(0, 0, 0, 0.25);"></div>
    </div>
</div>

<!--
Start About Section
==================================== -->
<section class="about-2 section bg-gray" id="about">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-5">
				<h2>We have explored the digital landscape with passion for a long time</h2>
			</div>
			<div class="col-12 col-md-7">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae deleniti ipsa labore necessitatibus culpa veritatis quo accusantium, neque enim ea ad eaque iure, quas tempore velit, quibusdam dolor illo! Explicabo.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quisquam maiores iste soluta, nihil dolorem?</p>
			</div>
			
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->

<section class="services section-xs" id="services">
	<div class="container">
		<div class="row">
			<!-- Single Service Item -->
			<div class="col-md-4 col-sm-6" >
				<div class="service-block color-bg text-center">
					<div class="service-icon text-center">
						<i class="tf-ion-ios-copy-outline"></i>
					</div>
					<h3>WordPress Theme</h3>
					<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
				</div>
			</div>
			<!-- End Single Service Item -->
			
			<!-- Single Service Item -->
			<div class="col-md-4 col-sm-6" >
				<div class="service-block text-center">
					<div class="service-icon text-center">
						<i class="tf-ion-ios-alarm-outline"></i>
					</div>
					<h3>Responsive Design</h3>
					<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
				</div>
			</div>
			<!-- End Single Service Item -->
			
			<!-- Single Service Item -->
			<div class="col-md-4 col-sm-6 mx-auto"  >
				<div class="service-block color-bg text-center">
					<div class="service-icon text-center">
						<i class="tf-ion-ios-book-outline"></i>
					</div>
					<h3>Media & Advertisement</h3>
					<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
				</div>
			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->
			
			
			

<section class="about section-sm" id="about">
	<div class="container">
		<div class="row mb-5 justify-content-center">
			<div class="col-md-5">
				<img src="<?= base_url('assets/asset_main');?>/images/about/about-1.jpg" class="img-fluid rounded shadow w-100" alt="about-img">
			</div>
			<div class="col-md-5">
				<div class="content">
					<h2>Creativity is in our <br> blood</h2>
					<p>Curabitur felis nibh, imperdiet eu erat non, luctus cursus lectus. Donec maximus diam leo, sed fringilla nisl
						auctor eget. Donec dictum neque est, ac faucibus ex blandit a
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae quo minima ab aperiam molestiae natus
						repellendus neque culpa iure, nemo veritatis explicabo facilis, officia, saepe! Et corrupti odit, non deserunt.
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-5 order-md-1 order-2">
				<div class="content">
					<h2>We think out of the <br> Box</h2>
					<p>Curabitur felis nibh, imperdiet eu erat non, luctus cursus lectus. Donec maximus diam leo, sed fringilla nisl
						auctor eget. Donec dictum neque est, ac faucibus ex blandit a
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae quo minima ab aperiam molestiae natus
						repellendus neque culpa iure, nemo veritatis explicabo facilis, officia, saepe! Et corrupti odit, non deserunt.
				</div>
			</div>
			<div class="col-md-5 order-md-2 order-1">
				<img src="<?= base_url('assets/asset_main');?>/images/about/about-2.jpg" class="img-fluid rounded shadow w-100" alt="">
			</div>
		</div> <!-- End row -->
	</div> <!-- End container -->
</section> <!-- End section -->

<!--
Start About Section
==================================== -->
<section class="service-2 section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="title text-center">
          <h4>How We Works</h4>
          <h2>Our work process</h2>
          <span class="border"></span>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum reiciendis quasi itaque, obcaecati atque
            sit!</p>
        </div>
      </div>
      <div class="col-8 mx-auto">
        <div class="row">
          <div class="col-md-6 p-0">
            <div class="service-item text-center">
              <span class="count">1.</span>
              <i class="tf-ion-ios-briefcase-outline"></i>
              <h4>Project Analysis</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
            </div>
          </div>
          <div class="col-md-6 p-0">
            <div class="service-item text-center">
              <span class="count">2.</span>
              <i class="tf-ion-ios-alarm-outline"></i>
              <h4>Time Management</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
            </div>
          </div>
          <div class="col-md-6 p-0">
            <div class="service-item text-center">
              <span class="count">3.</span>
              <i class="tf-ion-ios-email-outline"></i>
              <h4>Mail Support</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
            </div>
          </div>
          <div class="col-md-6 p-0">
            <div class="service-item text-center">
              <span class="count">4.</span>
              <i class="tf-ion-ios-locked-outline"></i>
              <h4>Secure System</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<!-- End section -->

<!-- Start Portfolio Section
=========================================== -->
<section class="portfolio section" id="portfolio">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="title text-center">
					<h4>RECENT WORK</h4>
					<h2>WORK SHOWCASE.</h2>
					<span class="border"></span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum reiciendis quasi itaque, obcaecati atque sit!</p>
				</div>
			</div>
		</div>
		<div class="row" >
			<div class="col-lg-12">
				<!-- /section title -->
				<div class="portfolio-filter">
					<button class="active" type="button" data-filter="all">All</button>
					<button type="button" data-filter="photography">Photography</button>
					<button type="button" data-filter="ios">IOS App</button>
					<button type="button" data-filter="development">Development</button>
					<button type="button" data-filter="design">Design</button>
				</div>
			</div>
		</div> <!-- /end col-lg-12 -->
		<div class="row filtr-container">
			<div class="col-md-4 col-sm-6 p-0 filtr-item" data-category="design">
				<div class="portfolio-block">
					<img class="img-fluid" src="<?= base_url('assets/asset_main');?>/images/portfolio/portfolio-1.jpg" alt="">
					<div class="caption">
						<a class="search-icon" href="images/portfolio/portfolio-1.jpg" data-lightbox="image-1">
							<i class="tf-ion-ios-search-strong"></i>
						</a>
						<h4><a href="">AirBnB Postcard</a></h4>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 p-0 filtr-item" data-category="design, ios">
				<div class="portfolio-block ">
					<img class="img-fluid" src="<?= base_url('assets/asset_main');?>/images/portfolio/portfolio-2.jpg" alt="">
					<div class="caption">
						<a class="search-icon" href="images/portfolio/portfolio-1.jpg" data-lightbox="image-1">
							<i class="tf-ion-ios-search-strong"></i>
						</a>
						<h4><a href="">AirBnB Postcard</a></h4>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 p-0 filtr-item" data-category="photography, development">
				<div class="portfolio-block">
					<img class="img-fluid" src="<?= base_url('assets/asset_main');?>/images/portfolio/portfolio-3.jpg" alt="">
					<div class="caption">
						<a class="search-icon" href="images/portfolio/portfolio-1.jpg" data-lightbox="image-1">
							<i class="tf-ion-ios-search-strong"></i>
						</a>
						<h4><a href="">AirBnB Postcard</a></h4>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 p-0 filtr-item" data-category="photography, ios">
				<div class="portfolio-block">
					<img class="img-fluid" src="<?= base_url('assets/asset_main');?>/images/portfolio/portfolio-4.jpg" alt="">
					<div class="caption">
						<a class="search-icon" href="images/portfolio/portfolio-1.jpg" data-lightbox="image-1">
							<i class="tf-ion-ios-search-strong"></i>
						</a>
						<h4><a href="">AirBnB Postcard</a></h4>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 p-0 filtr-item" data-category="design">
				<div class="portfolio-block">
					<img class="img-fluid" src="<?= base_url('assets/asset_main');?>/images/portfolio/portfolio-5.jpg" alt="">
					<div class="caption">
						<a class="search-icon" href="images/portfolio/portfolio-1.jpg" data-lightbox="image-1">
							<i class="tf-ion-ios-search-strong"></i>
						</a>
						<h4><a href="">AirBnB Postcard</a></h4>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 p-0 filtr-item" data-category="design, development">
				<div class="portfolio-block">
					<img class="img-fluid" src="<?= base_url('assets/asset_main');?>/images/portfolio/portfolio-1.jpg" alt="">
					<div class="caption">
						<a class="search-icon" href="images/portfolio/portfolio-1.jpg" data-lightbox="image-1">
							<i class="tf-ion-ios-search-strong"></i>
						</a>
						<h4><a href="">Photography Website</a></h4>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- end row -->
</section>   <!-- End section -->
					
				
				
				
			

<!-- Start Our Team
=========================================== -->
<section class="team section bg-gray" id="team">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="title text-center">
					<h4>TEAM MEMBER</h4>
					<h2>Our Team.</h2>
					<span class="border"></span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum reiciendis quasi itaque, obcaecati atque sit!</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- team member -->
			<div class="col-lg-3 col-sm-6">
				<div class="team-member text-center">
					<div class="member-photo">
						<!-- member photo -->
						<img class="img-fluid" src="<?= base_url('assets/asset_main');?>/images/team/member-1.jpg" alt="team people">
						<!-- /member photo -->
					</div>
					<!-- member name & designation -->
					<div class="member-content">
						<h3>Shawshank Redemption</h3>
						<span>Head Of Marketing</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
						<ul class="list-inline">
							<li class="list-inline-item">
								<a href="#">
									<i class="tf-ion-social-facebook"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<i class="tf-ion-social-twitter"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<i class="tf-ion-social-google-outline"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<i class="tf-ion-social-dribbble"></i>
								</a>
							</li>
						</ul>
					</div>
					<!-- /member name & designation -->
				</div>
			</div>
			<!-- end team member -->

			<!-- team member -->
			<div class="col-lg-3 col-sm-6">
				<div class="team-member text-center">
					<div class="member-photo">
						<!-- member photo -->
						<img class="img-fluid" src="<?= base_url('assets/asset_main');?>/images/team/member-2.jpg" alt="team people">
						<!-- /member photo -->
					</div>
					<!-- member name & designation -->
					<div class="member-content">
						<h3>Luis Anthon</h3>
						<span>Web Developer</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
						<ul class="list-inline">
							<li class="list-inline-item">
								<a href="#">
									<i class="tf-ion-social-facebook"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<i class="tf-ion-social-twitter"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<i class="tf-ion-social-google-outline"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<i class="tf-ion-social-dribbble"></i>
								</a>
							</li>
						</ul>
					</div>
					<!-- /member name & designation -->
				</div>
			</div>
			<!-- end team member -->

			<!-- team member -->
			<div class="col-lg-3 col-sm-6">
				<div class="team-member text-center">
					<div class="member-photo">
						<!-- member photo -->
						<img class="img-fluid" src="<?= base_url('assets/asset_main');?>/images/team/member-3.jpg" alt="team people">
						<!-- /member photo -->

					</div>

					<!-- member name & designation -->
					<div class="member-content">
						<h3>Jonathon Andrew</h3>
						<span>Head Of Management</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
						<ul class="list-inline">
							<li class="list-inline-item">
								<a href="#">
									<i class="tf-ion-social-facebook"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<i class="tf-ion-social-twitter"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<i class="tf-ion-social-google-outline"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<i class="tf-ion-social-dribbble"></i>
								</a>
							</li>
						</ul>
					</div>
					<!-- /member name & designation -->
				</div>
			</div>
			<!-- end team member -->
			<!-- team member -->
			<div class="col-lg-3 col-sm-6">
				<div class="team-member text-center">
					<div class="member-photo">
						<!-- member photo -->
						<img class="img-fluid" src="<?= base_url('assets/asset_main');?>/images/team/member-4.jpg" alt="team people">
						<!-- /member photo -->
					</div>

					<!-- member name & designation -->
					<div class="member-content">
						<h3>Michael Jonson</h3>
						<span>Head Of Management</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
						<ul class="list-inline">
							<li class="list-inline-item">
								<a href="#">
									<i class="tf-ion-social-facebook"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<i class="tf-ion-social-twitter"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<i class="tf-ion-social-google-outline"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<i class="tf-ion-social-dribbble"></i>
								</a>
							</li>
						</ul>
					</div>
					<!-- /member name & designation -->
				</div>
			</div>
			<!-- end team member -->
		</div>
		<!-- End row -->
	</div>
	<!-- End container -->
</section>
<!-- End section -->

<!-- Start Pricing section
		=========================================== -->
<section class="pricing-table  section" id="pricing">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="title text-center">
					<h4>Easy Pricing</h4>
					<h2>Pricing.</h2>
					<span class="border"></span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum reiciendis quasi itaque, obcaecati atque sit!</p>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<!-- single pricing table -->
			<div class="col-md-4 col-sm-6">
				<div class="pricing-item">
					<!-- plan name & value -->
					<div class="price-title bg-pricing">
						<h3>Basic</h3>
						<strong class="value">$99</strong>
						<p>Perfect for single freelancers who work by themselves</p>
					</div>
					<!-- /plan name & value -->

					<!-- plan description -->
					<ul>
						<li>1GB Disk Space</li>
						<li>10 Email Account</li>
						<li>Script Installer</li>
						<li>1 GB Storage</li>
						<li>10 GB Bandwidth</li>
						<li>24/7 Tech Support</li>
					</ul>
					<!-- /plan description -->

					<!-- signup button -->
					<a class="btn btn-main" href="#">Signup</a>
					<!-- /signup button -->

				</div>
			</div>
			<!-- end single pricing table -->

			<!-- single pricing table -->
			<div class="col-md-4 col-sm-6">
				<div class="pricing-item">
					<!-- plan name & value -->
					<div class="price-title  bg-pricing">
						<h3>Advance</h3>
						<strong class="value">$199</strong>
						<p>Suitable for small businesses with up to 5 employees</p>
					</div>
					<!-- /plan name & value -->

					<!-- plan description -->
					<ul>
						<li>1GB Disk Space</li>
						<li>10 Email Account</li>
						<li>Script Installer</li>
						<li>1 GB Storage</li>
						<li>10 GB Bandwidth</li>
						<li>24/7 Tech Support</li>
					</ul>
					<!-- /plan description -->

					<!-- signup button -->
					<a class="btn btn-main" href="#">Signup</a>
					<!-- /signup button -->

				</div>
			</div>
			<!-- end single pricing table -->

			<!-- single pricing table -->
			<div class="col-md-4 col-sm-6 mx-auto">
				<div class="pricing-item ">
					<!-- plan name & value -->
					<div class="price-title bg-pricing">
						<h3>Professional</h3>
						<strong class="value">$299</strong>
						<p>Great for large businesses with more than 5 employees</p>
					</div>
					<!-- /plan name & value -->

					<!-- plan description -->
					<ul>
						<li>1GB Disk Space</li>
						<li>10 Email Account</li>
						<li>Script Installer</li>
						<li>1 GB Storage</li>
						<li>10 GB Bandwidth</li>
						<li>24/7 Tech Support</li>
					</ul>
					<!-- /plan description -->

					<!-- signup button -->
					<a class="btn btn-main" href="#">Signup</a>
					<!-- /signup button -->

				</div>
			</div>
			<!-- end single pricing table -->


		</div>
		<!-- End row -->
	</div>
	<!-- End container -->
</section>
<!-- End section -->

<!-- Start Testimonial
=========================================== -->

<section class="testimonial section" id="testimonial">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!-- testimonial wrapper -->
				<div class="testimonial-slider">
					<!-- testimonial single -->
					<div class="item text-center">
						<i class="tf-ion-quote"></i>
						<!-- client info -->
						<div class="client-details">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores,
								unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing
								elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
						</div>
						<!-- /client info -->
						<!-- client photo -->
						<div class="client-thumb">
							<img src="<?= base_url('assets/asset_main');?>/images/client-logo/clients-1.jpg" class="img-fluid" alt="">
						</div>
						<div class="client-meta">
							<h4>Matt Cutts</h4>
							<span>CEO , Company Name</span>
						</div>
						<!-- /client photo -->
					</div>
					<!-- /testimonial single -->

					<!-- testimonial single -->
					<div class="item text-center">
						<i class="tf-ion-quote"></i>
						<!-- client info -->
						<div class="client-details">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores,
								unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing
								elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
						</div>
						<!-- /client info -->
						<!-- client photo -->
						<div class="client-thumb">
							<img src="<?= base_url('assets/asset_main');?>/images/client-logo/clients-2.jpg" class="img-fluid" alt="">
						</div>
						<div class="client-meta">
							<h4>Elon Musk</h4>
							<span>CEO , Company Name</span>
						</div>
						<!-- /client photo -->
					</div>
					<!-- /testimonial single -->

					<!-- testimonial single -->
					<div class="item text-center">
						<i class="tf-ion-quote"></i>
						<!-- client info -->
						<div class="client-details">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores,
								unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing
								elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
						</div>
						<!-- /client info -->
						<!-- client photo -->
						<div class="client-thumb">
							<img src="<?= base_url('assets/asset_main');?>/images/client-logo/clients-1.jpg" class="img-fluid" alt="">
						</div>
						<div class="client-meta">
							<h4>Jonathon Ive</h4>
							<span>CEO , Company Name</span>
						</div>
						<!-- /client photo -->
					</div>
					<!-- /testimonial single -->
				</div>
			</div>
			<!-- end col lg 12 -->
		</div>
		<!-- End row -->
	</div>
	<!-- End container -->
</section>
<!-- End Section -->

<!--
Start Blog Section
=========================================== -->
<section class="blog section" id="blog">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="title text-center">
					<h4>Our untold story</h4>
					<h2>Blog.</h2>
					<span class="border"></span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum reiciendis quasi itaque, obcaecati atque sit!</p>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<!-- single blog post -->
			<article class="col-md-4 col-sm-6" >
				<div class="post-item">
					<div class="post-thumb">
					  	<img class="img-fluid shadow rounded" src="<?= base_url('assets/asset_main');?>/images/blog/post-1.jpg" alt="Generic placeholder image">
					</div>
			  		<div class="post-title">
				    	<h3 class="mt-0"><a href="">Ten things about Business</a></h3>
			  		</div>
			  		<div class="post-meta">
			  			<span>By</span> <a href="" class="">Jonathon Ive</a>
			  		</div>
			  		<div class="post-content">
					    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptatem accusantium dolorum, maxime eos blanditiis sint enim necessitatibus placeat dolor.</p>
			  		</div>
				    <a class="btn btn-main" href="#">Read more</a>
				</div>
			</article>
			<!-- /single blog post -->
			
			<!-- single blog post -->
				<article class="col-md-4 col-sm-6" >
					<div class="post-item">
						<div class="post-thumb">
						  	<img class="img-fluid shadow rounded" src="<?= base_url('assets/asset_main');?>/images/blog/post-2.jpg" alt="Generic placeholder image">
						</div>
				  		<div class="post-title">
					    	<h3 class="mt-0"><a href="">Something I need to tell you</a></h3>
				  		</div>
				  		<div class="post-meta">
				  			<ul class="list-inline">
				  				<li class="list-inline-item">
				  					<span>By</span> <a href="" class="">Jonathon Ive</a>		
				  				</li>
				  				<li class="list-inline-item">
				  					<span>By</span> <span> 15th December 2017</span>		
				  				</li>
							</ul>
				  		</div>
				  		<div class="post-content">
						    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptatem accusantium dolorum, maxime eos blanditiis sint enim necessitatibus placeat dolor.</p>
				  		</div>
					    <a class="btn btn-main" href="#">Read more</a>
					</div>
				</article>
			<!-- end single blog post -->
			<!-- single blog post -->
				<article class="col-md-4 col-sm-6" >
					<div class="post-item">
						<div class="post-thumb">
						  	<img class="img-fluid shadow rounded" src="<?= base_url('assets/asset_main');?>/images/blog/post-3.jpg" alt="Generic placeholder image">
						</div>
				  		<div class="post-title">
					    	<h3 class="mt-0"><a href="">Are you doing the Right Way?</a></h3>
				  		</div>
				  		<div class="post-meta">
				  			<ul class="list-inline">
				  				<li class="list-inline-item">
				  					<span>By</span> <a href="" class="">Jonathon Ive</a>		
				  				</li>
				  				<li class="list-inline-item">
				  					<span>By</span> <span> 15th December 2017</span>		
				  				</li>
							</ul>
				  		</div>
				  		<div class="post-content">
						    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptatem accusantium dolorum, maxime eos blanditiis sint enim necessitatibus placeat dolor.</p>
				  		</div>
					    <a class="btn btn-main" href="#">Read more</a>
					</div>
				</article>
			<!-- end single blog post -->
			
		</div> <!-- end row -->
	</div> <!-- end container -->
</section> <!-- end section -->
				

<!-- Srart Contact Us
		=========================================== -->		
<section class="contact-us section bg-gray" id="contact">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="title text-center">
					<h4>Drop us a note</h4>
					<h2>Contact Us.</h2>
					<span class="border"></span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum reiciendis quasi itaque, obcaecati atque sit!</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- Contact Details -->
			<div class="col-md-6">
				<div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="311" id="gmap_canvas" src="https://maps.google.com/maps?q=pt%20mardizu&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-a.com"></a><br><style>.mapouter{position:relative;text-align:right;height:311px;width:600px;}</style><a href="https://www.embedgooglemap.net">embed code google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:311px;width:600px;}</style></div></div>
			</div>
			<!-- / End Contact Details -->
				
			<!-- Contact Form -->
			<div class="contact-form col-md-6 " >
				<form id="contact-form" method="post" action="sendmail.php" role="form">
				
					<div class="form-group">
						<input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
					</div>
					
					<div class="form-group">
						<input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
					</div>
					
					<div class="form-group">
						<input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
					</div>
					
					<div class="form-group">
						<textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>	
					</div>
					
					<div id="success" class="success">
						Thank you. The Mailman is on His Way :)
					</div>
					
					<div id="error" class="error">
						Sorry, don't know what happened. Try later :(
					</div>
					
					<div id="cf-submit">
						<input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
					</div>						
					
				</form>
			</div>
			<!-- ./End Contact Form -->
		</div> <!-- end row -->
		<div class="row">
			<div class="col-md-4">
				<div class="address-block contact-meta-block">
					<i class="tf-ion-android-pin"></i>
					<h4>Our Location</h4>
					<p>
						14/05, Stockhome <br>
					Victori Palace , United States <br>
					
					</p>
					
				</div>
			</div>
			<div class="col-md-4">
				<div class="phone-block contact-meta-block">
					<i class="tf-ion-ios-telephone"></i>
					<h4>Call Us</h4>
					<p>
						Office: (03) 9283 2617 <br>
						Fax: +61 3827 3590
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="social-icons-block contact-meta-block">
					<i class="tf-ion-ios-contact"></i>
					<h4>We are social</h4>
					<ul class="list-inline social-icon">
						<li class="list-inline-item"><a href=""><i class="tf-ion-social-facebook"></i></a></li>
						<li class="list-inline-item"><a href=""><i class="tf-ion-social-twitter"></i></a></li>
						<li class="list-inline-item"><a href=""><i class="tf-ion-social-linkedin"></i></a></li>
						<li class="list-inline-item"><a href=""><i class="tf-ion-social-dribbble"></i></a></li>
						<li class="list-inline-item"><a href=""><i class="tf-ion-social-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		
	</div> <!-- end container -->
</section> <!-- end section -->