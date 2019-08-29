<?php include 'header.php' ?>
	<section class="about-main-banner" style="background-image: url('<?php echo get_field('about_background_image') ?>')">
		<div class="banner-overlay"></div>
		<div class="container">
			<div class="about-banner-content">
				<h2>About <span>Us</span>.</h2>
			</div>
		</div>
	</section>

	<section class="about-tab">
		<div class="container">
			<div class="tab-info-link">
				<a href="" class="active btn btn-info ">OUR STORY</a>
				<a href="" class="btn btn-info">REVIEWS</a>
				<a href="" class="btn btn-info">PRODUCTS</a>
			</div>
			<?php echo get_field('about_history')?>
			<div class="founder">
				<h2 class="btn btn-info">THE FOUNDERS</h2>
			</div>
			<div class="founder-image">
				<div class="founder-image-content">
					<img src="<?php echo get_field('husband_image') ?>">
					<p><?php echo get_field('husband_name') ?></p>
				</div>
				<div class="founder-image-content">
					<img src="<?php echo get_field('wife_image') ?>">
					<p><?php echo get_field('wife_name') ?></p>
				</div>
			</div>
		</div>
	</section>

<?php include 'footer.php' ?>