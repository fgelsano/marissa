<?php include 'header.php' ?>
	<section id = "boutique" class="about-main-banner" style="background-image: url('<?php echo get_field('banner_image') ?>')">
		<div class="banner-overlay"></div>
		<div class="container">
			<div class="about-banner-content">
				<h2>B<span>outique</span>.</h2>
			</div>
		</div>
	</section>
	<section class="boutique-2">
		<div class="container">
			<div class="boutique-content">
				<p><?php echo get_field('saying') ?></p>
				
			</div>
		<div class="boutique-coontent-img">
			<img src="<?php echo get_field('image') ?>">
		</div>
		</div>
	</section>
	<section class="boutique-3">
		<div class="container">
			<h2 class="btn btn-info">OUR GALLERY</h2>
			<div class="boutique-3-content-1">
				<div class="content-slick">
					<?php 
							$salon = new WP_Query(array(
								'post_type' => 'service',
								'meta_value'=> 'boutique',
								'order'		=> 'DESC'
							));
						?>
						<?php if($salon->have_posts()): ?>
							<?php while($salon->have_posts()): ?>
								<?php $salon->the_post(); ?>
								<a href = "<?php the_permalink() ?>">
									<div class="slick-content-1">
										<img src="<?php the_post_thumbnail_url() ?>" style = "max-height:300px;height:250px;">
									</div>
								</a>

							<?php endwhile ?>
							<?php 
									wp_reset_postdata();
									?>
						<?php else: ?>
							<h2>
								No Services at the Momment.
									</h2>
						<?php endif ?>
					
				</div>
			</div>
			<div class="boutique-3-content-2">
				<?php 
							$salon = new WP_Query(array(
								'post_type' => 'service',
								'meta_value'=> 'package',
								'order'		=> 'DESC'
							));
							$num = 0;
						?>
						<?php if($salon->have_posts()): ?>
							<?php while($salon->have_posts()): ?>
								<?php 
									$salon->the_post();
									$num++;
								?>
								<?php if($num % 2 == 1): ?>
									<div class="bou-content-flex">
										<div class="bou-content-flex-inner">
											<p><?php the_content() ?></p>
										</div>
										<div class="bou-content-flex-inner" style="background-image: url('<?php the_post_thumbnail_url() ?>');">
											<div class="overlay"></div>
											<div class="arrow"></div>
											<div class="bou-content-flex-inner-info">
												<h2><?php the_title() ?></h2>
												<a href="<?php the_permalink() ?>" class="btn btn-info">View Detail</a>
											</div>
										</div>
									</div>
								<?php else:?>
									<div class="bou-content-flex">
										<div class="bou-content-flex-inner" style="background-image: url('<?php the_post_thumbnail_url() ?>');">
										</div>
										<div class="bou-content-flex-inner">
											<div class="arrow"></div>
											<p><?php the_content() ?></p>
										</div>
									</div>
								<?php endif ?>
								
							<?php endwhile ?>
							<?php 
									wp_reset_postdata();
									?>
						<?php else: ?>
							<h2>
								No Services at the Momment.
									</h2>
						<?php endif ?>
				
				
				
			</div>
		</div>
	</section>				
<?php include 'footer.php' ?>