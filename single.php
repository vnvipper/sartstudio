<?php get_header(); ?>
<section id="post-container" class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="post-thumb">
				<?php the_post_thumbnail( "full",array('class' => 'img-responsive') ); ?>
			</div>
			<div class="post-content">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php echo get_the_date(); ?>
				<?php the_content(); ?>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="col-md-8">
			<!-- <div class="img">
			<?php echo  types_render_field( "wpcf-vi-img", array( "size"=>"full", "separator" => "</div><div class='img'>") ); ?>
		</div> -->
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php
			global $post, $wpdb;
			
			$images = get_post_meta($post->ID, 'wpcf-vi-img', false);
		?>
		<div id="wrapper">
			<div id="columns">
				<?php foreach ($images as $image): ?>
				<?php
					$attachment_id = $wpdb->get_var($wpdb->prepare(
					"SELECT ID FROM $wpdb->posts WHERE guid = %s",
					$image
					));
					$alt = get_post_meta($attachment_id, '_wp_attachment_image_alt', true);
				?>
				
				<div class="pin">
					<img src="<?php echo $image ?>" alt="<?php echo $alt ?>" class="img-responsive"/>		
				</div>				
				<?php endforeach; ?>
			</div>
		</div>
		
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>
</section>
<?php get_footer(); ?>