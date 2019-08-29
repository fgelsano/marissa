<?php include 'header.php' ?>
	<section class="main-banner" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/salon.jpg')">
		<div class="banner-overlay"></div>
		<div class="container">
			<div class="banner-content">
				<div class="content-text">
					<h2>
						<span>O</span>
						<span>ur</span>
					</h2>
					<h2>
						<span>S</span>
						<span>alon</span>
						<span>.</span>
					</h2>
					
				</div>
				<div class="content-image">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-2.png">
				</div>
			</div>
		</div>
	</section>
	<section class="content-1">
		<div class="content-inner-1">
			<div class="content-flex" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/girl.jpg')">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/girl.jpg">
				<div class="content-inner-bg"></div>
			</div>
			<div class="content-flex">
				<h2>Hair Rebonding</h2>
				<div class="content-prod">
					<p>Loreal Extenso</p>
					<p>- 2,500 to 3,500     [Depend on Length]</p>
				</div>
				<div class="content-prod">
					<p>Loreal Low-End</p>
					<p>- 1,800 to 2,500     [Depend on Length]</p>
				</div>
				<div class="content-prod">
					<p>AGLO / Brazillian Rebond</p>
					<p>- 1,000 to 2,000     [Depend on Length]</p>
				</div>
				<div class="content-prod">
					<p>Bremond Rebond</p>
					<p>- 1,000 to 1,500     [Depend on Length]</p>
				</div>
				<div class="testimonials">
					<h1>Testimonials</h1>
				</div>
				<div class="testimonials-content">
					<div class="content-info">
						<div class="flex-info">
							<div class="flex-info-1">
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/girl.jpg">
							</div>
							<div class="flex-info-1">
								<p>"Nice Kaau, Wa masonug akong buhok"</p>
							</div>		
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
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
	</div>
<?php include 'footer.php' ?>

	