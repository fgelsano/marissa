<?php include 'header.php' ?>
	<div id="home">
		<section class="bato-main-banner" style="background-image: url('<?php echo get_field('header_background') ?>')">
			<div class="banner-overlay"></div>
			<div class="container">
				<div class="banner-content">
					<p><?php echo get_field('banner_text_1')?></p>
					<h2><?php echo get_field('banner_text_2')?></h2>
					<div class="flex">
						<div class="flex-inner">
							<div class="border-white1"></div>
						</div>
						<div class="flex-inner flex">
							<p><?php echo get_field('banner_text_3')?></p>
						</div>
					</div>
					<div class="banner-button flex">
						<div class="flex-inner">
							<a class = "scroll-animate" href="#explore">EXPLORE</a>
						</div>
						<div class="flex-inner">
							<a data-toggle="modal" data-target="#contact" href="#">GET IN TOUCH</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id = "explore" class="content-1">
			<div class="container">
				<div class="flex text-center">
					<div class="flex-inner">
						<div class="flex-image">
							<img src="<?php echo get_field('salon_image') ?>">
						</div>
						<h2>Salon</h2>
						<a href="/salon/" class="btn btn0-info">Explore</a>
					</div>
					<div class="flex-inner">
						<div class="flex-image">
							<img src="<?php echo get_field('boutique_image') ?>">
						</div>
						<h2>Boutique</h2>
						<a href="/botique" class="btn btn0-info">Explore</a>
					</div>
					<div class="flex-inner">
						<div class="flex-image">
							<img src="<?php echo get_field('catering_image') ?>">
						</div>
						<h2>Catering</h2>
						<a href="/catering" class="btn btn0-info">Explore</a>
					</div>
				</div>
			</div>
		</section>
		<section class="content-2" style="background-image: url('<?php echo get_field('aboutus_background')?>')">
			<div class="container">
				<div class="content-2-inner">
					<h2>About <span>Us</span>.</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					<a href="<?php echo home_url() ?>/about" class="btn btn-info">READ MORE</a>
				</div>
			</div>
		</section>	
		<section class="content3">
			<div class="container">
				<div class="content3-inner">
					<h2>Our Gallery</h2>
					<div class = "flex-row">
						<?php 
							$salon = new WP_Query(array(
								'post_type' => 'service',
								'posts_per_page' => '5',
								'order'		=> 'DESC'
							));
						?>
						<?php if($salon->have_posts()): ?>
							<?php while($salon->have_posts()): ?>
								<?php $salon->the_post(); ?>
								
								<div class="flex-col">
									<a href = "<?php the_permalink() ?>" >
									<?php if(has_post_thumbnail()): ?>
										<div class="flex-col-content" style="background-image: url('<?php the_post_thumbnail_url() ?>')">
										<?php else: ?>
										<div class = "flex-col-content" style="background-image: url('http://www.marissa.com.ph/wp-content/uploads/2018/07/pexels-photo-265920.jpeg')">
										<?php endif ?>
										<div class = "overlaypic"></div>
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
		<div id="home" class="gallery">
		<section class="content4">
			<div class="container">
				<div class="content4-inner">
					<h2>Best of our Work</h2>
					<div class="flex-row">
						<?php 
							$salon = new WP_Query(array(
								'post_type' => 'service',
								'posts_per_page' => '6',
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
		<section class="content5" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/Home/valentines-day-3126280_1280.jpg')">
			<div class="overlay"></div>
			<div class="container">
				<div class="content5-inner">
					<div class="content5-inner1">
						<form>
						<h2>MAKE AN APPOINTMENT</h2>
						<div class="flex">
							<div class="flex-inner">
								<input type="type" name="" placeholder="FULLNAME">
							</div>
							
						</div>
						<div class="flex">
							<div class="flex-inner">
								<input type="text" name="contact" placeholder="CONTACT NUMBER" maxlength="12">
							</div>
							
						</div>
						<div class="flex">
							<div class="flex-inner">
<!-- 								<input type="type" name="" placeholder="ABOUT"> -->
								<select name = "">
									<option>ABOUT</option>
									<option>SALON</option>
									<option>BOUTIQUE</option>
									<option>CATERING</option>
								</select>
							</div>
							
						</div>
						<div class="flex">
							<div class="flex-inner">
								<input type="type" name="" placeholder="DATE">
							</div>
							
						</div>
						<div class="flex">
							<div class="flex-inner">
								<textarea rows = "3" placeholder = "MESSAGE(OPTIONAL)"></textarea>
							</div>
							
						</div>
						<div class="flex">
							
							<div class="flex-inner">
								<input type="submit" class = "btn btn-info "value="BOOK NOW">
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</section>	
		<section class="google-maps">
			<div class="maps-overlay"></div>
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1387.5581035271714!2d124.7490384848355!3d10.373276362105484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTDCsDIyJzI0LjciTiAxMjTCsDQ0JzU3LjYiRQ!5e0!3m2!1sen!2sph!4v1524197634261" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="contact-content">
				<div class="contact-form">
					<div class="contact-flex">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						<form id = "homecontact">
							<div class="form-group">
								<input type="text" name="name" class="form-control" placeholder="NAME" required>
							</div>
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="EMAIL" required>
							</div>
							<div class="form-group">
								<input type="text" name="contact" class="form-control" placeholder="MOBILE NO." required maxlength = "11">
							</div>
							<div class="form-group">
								<textarea class="form-control" name = "message" placeholder="MESSAGE" required></textarea>
							</div>
							<div class="submit">
								<input  type="submit" class="btn btn-info" value="SUBMIT">
							</div>
							<p class = "alert alert-success" id = "showmessage" style = "display:none;">
								
							</p>	
						</form>
					</div>
					<div class="contact-flex">
						<h2>Contact Information</h2>
						<div class="contact-info-flex-inner">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/gmaps.png">
							<p><?php echo get_field('location')?></p>
						</div>
						<div class="contact-info-flex-inner">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/email.png">
							<p><?php echo get_field('email')?></p>
						</div>
						<div class="contact-info-flex-inner">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/skype.png">
							<p><?php echo get_field('skype')?></p>
						</div>
						<div class="contact-info-flex-inner">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/phone.png">
							<p><?php echo get_field('contact_number')?></p>
						</div>

						<div class="info-links">
							<span class="fa fa-instagram"></span>
							<span class="fa fa-skype"></span>
							<span class="fa fa-linkedin"></span>
							<span class="fa fa-google-plus"></span>
							<span class="fa fa-facebook"></span>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
<?php include 'footer.php' ?>