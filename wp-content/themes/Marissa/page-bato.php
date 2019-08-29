<?php include 'header.php' ?>
	<section class="bato-main-banner" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/batobranch/mannequin-2594613_1280.jpg')">
		<div class="banner-overlay"></div>
		<div class="container">
			<div class="banner-content">
				<h2>Marissa</h2>
				<h2>Beauty Shop</h2>
				<div class="border-white"></div>
				<div class="branch-content">
					<h2>BATO BRANCH</h2>
				</div>
				<p><?php echo get_field('address') ?></p>
				<div class="flex-info-p">
					<p><?php echo get_field('schedule_days') ?></p>
					<p>(<?php echo get_field('schedule_time') ?>)</p>
				</div>
			</div>
		</div>
	</section>

	<section class="botique">
		<div class="container">
			<div class="botique-content-1">
				<div class="botique-header-label">
					<div class="botique-flex">
						<div class="botique-flex-1">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-3.png">
						</div>
						<div class="botique-flex-1">
							<h2>Botique</h2>
						</div>
						<div class="botique-flex-1">
							<div class="border-box"></div>
						</div>	
					</div>
					<div class="feat-attire">
						<div class="botique-flex-2">
							<div class="botique-inner-flex">
								<h2>FEATURED <span>Attire's</span></h2>
								
								<?php 
									global $wpdb;
									$marissa = $wpdb->base_prefix . "marissa_image_gallery";
									$photosgallery = $wpdb->get_results("SELECT * FROM `$marissa` WHERE gallery_id = 'gal2'");
									$num = 0;
									
								?>
								<?php foreach($photosgallery as $photo): ?>
									<?php if($num == 0): ?>
										<div class="inner-flex-content">
									<?php endif ?>
										<div class="inner-flex-1">
											<img src="<?php echo get_template_directory_uri() ?>/assets/images/batobranch/mannequin-2566559_1280.jpg">
											<div class="show-flex-info">
												<h2>
													Image
													<div class="show-flex-white1"></div>
													<div class="show-flex-white2"></div>
												</h2>
												<div class="show-flex-arrow"></div>
											</div>
										</div>
									<?php 
										$num++;		
									?>
									<?php if($num == 2):?>
										</div>
										
									<?php endif ?>
									<?php 
										if($num==2){
											$num=0;
										}
									?>
								<?php endforeach ?>
	
							</div>
							<div class="botique-inner-flex">
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/batobranch/pexels-photo-404171.jpeg">
								<div class="show-flex-info">
									<h2>
										Image
										<div class="show-flex-white1"></div>
										<div class="show-flex-white2"></div>
									</h2>
									<div class="show-flex-arrow"></div>
								</div>
							</div>
						</div>
						<div class="botique-flex-2">
							<div class="botique-inner-flex-1">
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/batobranch/pexels-photo-54296.jpeg">
								<div class="show-flex-info">
									<h2>
										Image
										<div class="show-flex-white1"></div>
										<div class="show-flex-white2"></div>
									</h2>
									<div class="show-flex-arrow"></div>
								</div>
							</div>
							<div class="botique-inner-flex-1">
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/batobranch/pexels-photo-697057.jpeg">
								<div class="show-flex-info">
									<h2>
										Image
										<div class="show-flex-white1"></div>
										<div class="show-flex-white2"></div>
									</h2>
									<div class="show-flex-arrow"></div>
								</div>
							</div>
							<div class="botique-inner-flex-1">
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/batobranch/pexels-photo-169196.jpeg">
								<div class="show-flex-info">
									<h2>
										Image
										<div class="show-flex-white1"></div>
										<div class="show-flex-white2"></div>
									</h2>
									<div class="show-flex-arrow"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</section>

	<section class="flower-shop" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/batobranch/pexels-photo-906150.jpeg')">
		<div class="flower-content">
			<div class="container">
				<div class="botique-content-1">
					<div class="botique-header-label">
						<div class="botique-flex">
							<div class="botique-flex-1">
								<div class="border-box"></div>
							</div>
							<div class="botique-flex-1">
								<h2>Flower Shop</h2>
							</div>
						</div>
						<div class="feat-attire">
							<div class="botique-flex-2">
								<div class="botique-inner-flex">
									<img src="<?php echo get_template_directory_uri() ?>/assets/images/batobranch/pexels-photo-353259.jpeg">
									<div class="show-flex-info">
										<h2>
											Image
											<div class="show-flex-white1"></div>
											<div class="show-flex-white2"></div>
										</h2>
										<div class="show-flex-arrow"></div>
									</div>
								</div>
								<div class="botique-inner-flex">
									<h2>BEST <span>Seller</span></h2>
									<div class="inner-flex-content">
										<div class="inner-flex-1">
											<img src="<?php echo get_template_directory_uri() ?>/assets/images/batobranch/pexels-photo-326285.jpeg">
											<div class="show-flex-info">
												<h2>
													Image
													<div class="show-flex-white1"></div>
													<div class="show-flex-white2"></div>
												</h2>
												<div class="show-flex-arrow"></div>
											</div>
										</div>
										<div class="inner-flex-1">
											<img src="<?php echo get_template_directory_uri() ?>/assets/images/batobranch/pexels-photo-88647.jpeg">
											<div class="show-flex-info">
												<h2>
													Image
													<div class="show-flex-white1"></div>
													<div class="show-flex-white2"></div>
												</h2>
												<div class="show-flex-arrow"></div>
											</div>
										</div>
									</div>
									<div class="inner-flex-content">
										<div class="inner-flex-1">
											<img src="<?php echo get_template_directory_uri() ?>/assets/images/batobranch/pexels-photo-347141.jpeg">
											<div class="show-flex-info">
												<h2>
													Image
													<div class="show-flex-white1"></div>
													<div class="show-flex-white2"></div>
												</h2>
												<div class="show-flex-arrow"></div>
											</div>
										</div>
										<div class="inner-flex-1">
											<img src="<?php echo get_template_directory_uri() ?>/assets/images/batobranch/city-corner-out-going-pm-ta-woman-157929.jpeg">
											<div class="show-flex-info">
												<h2>
													Image
													<div class="show-flex-white1"></div>
													<div class="show-flex-white2"></div>
												</h2>
												<div class="show-flex-arrow"></div>
											</div>
										</div>
									</div>	
								</div>
								
							</div>
							<div class="botique-flex-2">
								<div class="botique-inner-flex-1">
									<img src="<?php echo get_template_directory_uri() ?>/assets/images/batobranch/pexels-photo-326285.jpeg">
									<div class="show-flex-info">
										<h2>
											Image
											<div class="show-flex-white1"></div>
											<div class="show-flex-white2"></div>
										</h2>
										<div class="show-flex-arrow"></div>
									</div>
								</div>
								<div class="botique-inner-flex-1">
									<img src="<?php echo get_template_directory_uri() ?>/assets/images/batobranch/city-corner-out-going-pm-ta-woman-157929.jpeg">
									<div class="show-flex-info">
										<h2>
											Image
											<div class="show-flex-white1"></div>
											<div class="show-flex-white2"></div>
										</h2>
										<div class="show-flex-arrow"></div>
									</div>
								</div>
								<div class="botique-inner-flex-1">
									<img src="<?php echo get_template_directory_uri() ?>/assets/images/batobranch/pexels-photo-88647.jpeg">
									<div class="show-flex-info">
										<h2>
											Image
											<div class="show-flex-white1"></div>
											<div class="show-flex-white2"></div>
										</h2>
										<div class="show-flex-arrow"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="google-maps">
		<div class="maps-overlay"></div>
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15701.160862503379!2d123.92457234999998!3d10.318643199999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a99910883fe161%3A0xb62241cf0adb0c82!2sCasal&#39;s+Village!5e0!3m2!1sen!2sph!4v1522824524615" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="contact-content">
			<div class="contact-form">
				<div class="contact-flex">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					<form>
						<div class="form-group">
							<input type="text" name="" class="form-control" placeholder="NAME">
						</div>
						<div class="form-group">
							<input type="text" name="" class="form-control" placeholder="EMAIL">
						</div>
						<div class="form-group">
							<input type="text" name="" class="form-control" placeholder="MOBILE NO.">
						</div>
						<div class="form-group">
							<textarea class="form-control" placeholder="MESSAGE"></textarea>
						</div>
						<div class="submit">
							<input type="submit" class="btn btn-info" value="SUBMIT">
						</div>
					</form>
				</div>
				<div class="contact-flex">
					<h2>Contact Information</h2>
					<div class="contact-info-flex-inner">
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/gmaps.png">
						<p>23 Avenue de Hilongos 6524 Philippines</p>
					</div>
					<div class="contact-info-flex-inner">
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/email.png">
						<p>email@gmail.com</p>
					</div>
					<div class="contact-info-flex-inner">
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/skype.png">
						<p>dah.ghoul</p>
					</div>
					<div class="contact-info-flex-inner">
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/phone.png">
						<p>0912 - 345 - 6789</p>
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
<?php include 'footer.php' ?>