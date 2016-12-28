<?php get_header();?>
<?php
	$projectPosts = new WP_Query( 
		array(
			'post_type' => 'project',
			'posts_per_page' => 1,
			'orderby' => 'most_recent'
		));
	?>

<section id="products" class="container">
	<h2 class="heading">
	<span>Products</span>
	</h2>
	<div class="row">
		
		<?php $count = 0; while ($projectPosts->have_posts()) : $projectPosts->the_post();?>
		<?php if ($count != 0) {
			break;
		} ?>
		<div class="col-md-12" style="max-height: 350px; overflow-y: hidden;">
			<?php the_post_thumbnail( "full",array('class' => 'img-responsive') ); ?>
		</div>
		<?php $count++; ?>
		<?php endwhile; ?>
		
	</div>
	<ul class="nav nav-tabs nav-justified nav-custom">		
				<li class="active"><a data-toggle="tab" href="#all">All</a></li>
	    <?php $count = 0; $categories = get_terms(array('taxonomy'=>'project-category', 'number'=> 3)); ?>
	        <?php foreach ($categories as $category) : ?>
	            <li><a data-toggle="tab" href="#menu<?php echo $count; ?>"><?php echo $category->name; ?></a></li>
	            <?php $count++; ?>
	    <?php endforeach; ?>
	</ul>
	<div class="tab-content">
		<div id="all" class="tab-pane fade in active">
			<div class="row">
			<?php 
					$recentProjectPosts = new WP_Query( 
						array(
							'post_type' => 'project',
							'orderby' => 'most_recent'
						));
			 ?>
			<?php $count=0;  while ($recentProjectPosts->have_posts()) : $recentProjectPosts->the_post();?>
				<?php
			        if ($count%2 == 0) {
		                $flag = "col-even";
			        } else { 
		        	 	$flag = "col-odd";
			        }
			  	?>						
				<div class="col-md-6 <?php echo $flag ?>" >
					<div style="height: 170px; overflow-y: hidden;">
						<a href="<?php the_permalink();?>"><?php the_post_thumbnail( "full",array('class' => 'img-responsive') ); ?></a>	
					</div>								
				</div>
				<?php  $count++; ?>
			<?php endwhile; ?>				
			</div>
		</div>
		<?php $count = 0; $categories = get_categories(array('taxonomy'=>'project-category')); ?>

	        <?php foreach ($categories as $category) : ?>
				<div id="menu<?php echo $count; ?>" class="tab-pane fade">
					<div class="row">
						<?php 
					        $args = array(
							    // 'cat' => $category->term_id,
							    'post_type' => 'project',
							    'orderby' => 'most_recent',
							    'tax_query' => array(
							            array(
							                'taxonomy' => 'project-category',
							                'field' => 'term_id',
							                'terms' => $category->term_id,
							            )
							        )
							);
							$query = new WP_Query( $args );							
						?>

						<?php $countpost=0;  while ($query->have_posts()) : $query->the_post();?>		
							<?php
					        if ($countpost%2 == 0) {
					                $flag = "col-even";
						        } else { 
					        	 	$flag = "col-odd";
						        }
						  	?>								
							<div class="col-md-6 <?php echo $flag ?>" >
								<div style="height: 170px; overflow-y: hidden;">
									<a href="<?php the_permalink();?>"><?php the_post_thumbnail( "full",array('class' => 'img-responsive') ); ?></a>	
								</div>								
							</div>
							<?php  $countpost++; ?>
						<?php endwhile; ?>			
				  	</div>
				</div>		  	
	            <?php $count++; ?>
	    <?php endforeach; ?>	
	</div>
	<hr>
</section>
<?php get_footer(); ?>