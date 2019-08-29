<?php include 'header.php' ?>

	<div id="catering">
		<section class="main-banner" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/catering/eating-601578_1280.jpg')">
			<div class="overlay"></div>
			<div class="container">
				<div class="main-content">
					<h2>Our</h2>
					<h2>Gallery</h2>
				</div>
				<div class="content-image">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/catering/icon-3.png">
				</div>
			</div>
		</section>	
	</div>
	<div id="home" class="gallery">
		<section class="content4">
			<div class="container">
				<div class="content4-inner">
					<h2>Salon Gallery</h2>
					<div class="flex-row">
						<?php 
							$salon = new WP_Query(array(
								'post_type' => 'service',
								'meta_value'=> 'salon',
								'order'		=> 'DESC'
							));
						?>
						<?php if($salon->have_posts()): ?>
							<?php while($salon->have_posts()): ?>
								<?php $salon->the_post(); ?>
								<div class="flex-col">
									<a href="<?php the_permalink() ?>">
										<?php if(has_post_thumbnail()): ?>
										<div class="show-col-info" style="background-image: url('<?php the_post_thumbnail_url() ?>')">
										<?php else: ?>
										<div class="show-col-info" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/Home/pexels-photo-54296.jpeg')">
										<?php endif ?>

											<h2>
												<?php the_title() ?>
												<div class="show-flex-white1"></div>
												<div class="show-flex-white2"></div>
											</h2>
										</div>
									</a>
								</div>

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
			</div>
		</section>
		<section class="content4">
			<div class="container">
				<div class="content4-inner">
					<h2>Boutique Gallery</h2>
					<div class="flex-row">
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
								<div class="flex-col">
									<a href="<?php the_permalink() ?>">
										<?php if(has_post_thumbnail()): ?>
										<div class="show-col-info" style="background-image: url('<?php the_post_thumbnail_url() ?>')">
										<?php else: ?>
										<div class="show-col-info" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/Home/pexels-photo-54296.jpeg')">
										<?php endif ?>

											<h2>
												<?php the_title() ?>
												<div class="show-flex-white1"></div>
												<div class="show-flex-white2"></div>
											</h2>
										</div>
									</a>
								</div>

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
			</div>
		</section>
		<section class="content4">
			<div class="container">
				<div class="content4-inner">
					<h2>Catering Gallery</h2>
					<div class="flex-row">
						<?php 
							$salon = new WP_Query(array(
								'post_type' => 'service',
								'meta_value'=> 'catering',
								'order'		=> 'DESC'
							));
						?>
						<?php if($salon->have_posts()): ?>
							<?php while($salon->have_posts()): ?>
								<?php $salon->the_post(); ?>
								<div class="flex-col">
									<a href="<?php the_permalink() ?>">
										<?php if(has_post_thumbnail()): ?>
										<div class="show-col-info" style="background-image: url('<?php the_post_thumbnail_url() ?>')">
										<?php else: ?>
										<div class="show-col-info" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/Home/pexels-photo-54296.jpeg')">
										<?php endif ?>

											<h2>
												<?php the_title() ?>
												<div class="show-flex-white1"></div>
												<div class="show-flex-white2"></div>
											</h2>
										</div>
									</a>
								</div>

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
			</div>
		</section>
	</div>

<?php include 'footer.php' ?>