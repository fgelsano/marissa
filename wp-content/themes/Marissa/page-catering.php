<?php include 'header.php' ?>
	<div id="catering">
		<section class="main-banner" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/catering/eating-601578_1280.jpg')">
			<div class="overlay"></div>
			<div class="container">
				<div class="main-content">
					<h2><span>C</span>atering</h2>
					<h2>Services.</h2>
				</div>
				<div class="content-image">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/catering/icon-3.png">
				</div>
			</div>
		</section>
		<section class="content-1">
			<div class="container">
				<div class="content-flex">
					<div class="content-flex-inner">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						<h2>Utensils & Service <span>-----------------------------</span> <span>P10,000</span></h2>
						<h2>Decorate Aisle / Utensils & Service <span>-----------</span><span>P15,000</span></h2>
						<div class="label">
							<h3 class="btn btn-info">OUR MENU</h3>
							<div class="content-flex">
								<div class="content-flex-inner-1 text-center">
									<h1>MENU</h1>
									<h1>A</h1>
								</div>
								<div class="content-flex-inner-1">
									<h1>P180/pax</h1>
								</div>
							</div>
						</div>
					</div>
					<div class="content-flex-inner">
						<div class="flex-img">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/catering/chef.png">
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="gallery">
			<div class="container">
				<div class="slick-gal">
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
							<div class="slick-content-gal">
						<div class="gal-flex">
							<div class="gal-flex-inner" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/catering/humba-300x225.jpg');">
								<!-- <img src="assets/images/catering/humba-300x225.jpg" width="100%"> -->
							</div>
							<div class="gal-flex-inner">
								<h2>P<?php the_title() ?></h2>
								<p><?php the_content() ?></p>
								<div class="arrow"></div>
							</div>
						</div>
						<div class="gal-flex-row">
							<?php 
								global $wpdb;
								$id = get_the_id();
								$db = $wpdb->base_prefix . "marissa_image_gallery";
								$data = $wpdb->get_results("SELECT * FROM `$db` WHERE gallery_id = '$id'");
							?>
							<?php foreach($data as $value): ?>
                                  <div class="gal-col">
										<div class="gal-flex-inner-col" style="background-image: url('<?php echo $value->image_path ?>');">
											<div class="overlay"></div>
											<div class="info">
												<h2><?php echo $value->image_name ?></h2>
											</div>
										</div>
									</div>  
                            <?php endforeach?>
							
						</div>
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
		</section>	
	</div>
	
				
<?php include 'footer.php' ?>