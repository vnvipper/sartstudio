<?php get_header();?>
		<section id="products" class="container">
			<h2 class="heading">
			<span>Products</span>
			</h2>
			<div class="row">
				<div class="col-md-12">
					<div id="ongoingCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#ongoingCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#ongoingCarousel" data-slide-to="1"></li>
							<li data-target="#ongoingCarousel" data-slide-to="2"></li>
							<li data-target="#ongoingCarousel" data-slide-to="3"></li>
						</ol>
						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img  src="<?php bloginfo('template_url') ?>/images/pro.jpg" alt="Chania" class="img-responsive">
							</div>
							<div class="item">
								<img src="<?php bloginfo('template_url') ?>/images/pro.jpg" alt="Chania" class="img-responsive">
							</div>
							
							<div class="item">
								<img src="<?php bloginfo('template_url') ?>/images/pro.jpg" alt="Flower" class="img-responsive">
							</div>
							<div class="item">
								<img src="<?php bloginfo('template_url') ?>/images/pro.jpg" alt="Flower" class="img-responsive">
							</div>
						</div>
						<!-- Left and right controls -->
						<a class="left carousel-control" href="#ongoingCarousel" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#ongoingCarousel" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</section>
		<section id="recent-work" class="container">
			<h2 class="heading">
			<span>Recent words </span>
			</h2>
			<div class="row">
				<div class="col-md-12">
					<div id="recentCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#recentCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#recentCarousel" data-slide-to="1"></li>
							<li data-target="#recentCarousel" data-slide-to="2"></li>
							<li data-target="#recentCarousel" data-slide-to="3"></li>
						</ol>
						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img  src="<?php bloginfo('template_url') ?>/images/pro.jpg" alt="Chania" class="img-responsive">
							</div>
							<div class="item">
								<img src="<?php bloginfo('template_url') ?>/images/pro.jpg" alt="Chania" class="img-responsive">
							</div>
							
							<div class="item">
								<img src="<?php bloginfo('template_url') ?>/images/pro.jpg" alt="Flower" class="img-responsive">
							</div>
							<div class="item">
								<img src="<?php bloginfo('template_url') ?>/images/pro.jpg" alt="Flower" class="img-responsive">
							</div>
						</div>
						<!-- Left and right controls -->
						<a class="left carousel-control" href="#recentCarousel" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#recentCarousel" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
			<hr>
		</section>
		
<?php get_footer(); ?>