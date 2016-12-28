<?php 
	$recentProjectPosts = new WP_Query( array(
	    	'post_type' => 'project',
	        'posts_per_page' => 7 ,
	        'orderby' => 'most_recent'
	    ));
 ?>

<section id="recent-work" class="container">
			<h2 class="heading">
			<span>Recent works </span>
			</h2>
			<div class="row">
				<div class="col-md-12">
					<div id="recentCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
						<!-- Indicators -->
						<ol class="carousel-indicators">
						<?php $count=0;  while ($recentProjectPosts->have_posts()) : $recentProjectPosts->the_post();?>
							<?php
						        if ($count == 0) {
						                $actived = 'active';
						        } else { $actived = ''; }
						  	?>						
							<li data-target="#recentCarousel" data-slide-to="<?php echo $count ?>" class="<?php echo $actived ?>"></li>
							<?php  $count++; ?>
						<?php endwhile; ?>
						</ol>
						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
						<?php $count=0;  while ($recentProjectPosts->have_posts()) : $recentProjectPosts->the_post();?>
							<?php
						        if ($count == 0) {
						                $actived = 'active';
						        } else { $actived = ''; }
						  	?>						
							<div class="item <?php echo $actived ?>" style="max-height: 350px; overflow-y: hidden;">
								<a href="<?php the_permalink();?>">
									<?php the_post_thumbnail( "full",array('class' => 'img-responsive') ); ?>
								</a>		
							</div>
							<?php  $count++; ?>
						<?php endwhile; ?>				
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