<?php include 'header.php' ?>
	<div id="catering">
		<section class="main-banner" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/catering/eating-601578_1280.jpg')">
			<div class="overlay"></div>
			<div class="container">
				<div class="main-content">
					<h2>Events</h2>
					<h2>.</h2>
				</div>
				<div class="content-image">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/catering/icon-3.png">
				</div>
			</div>
		</section>
	</div>
	<div id ="events">
		<section class="eventssection">
			<div class="container">
				<div class="event-content">
					<div class="event-banner">
						<div class="content-image">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/calendar.png">
						</div>
						<h2>Events</h2>
						
					</div>
					<div class="event-prior events-list">
						<div class="label">
							<p>UPCOMING EVENTS</p>
						</div>
						<div class="event-prior-list">
							<?php 
								$upevents = new Wp_Query(array(
									'post_type' => 'post_events',
									'orderby'   => 'schedule_date'
								));
							?>
							<?php while($upevents->have_posts()): $upevents->the_post(); ?>
							<?php 
								date_default_timezone_set('Asia/Manila');
								$x = date('Ymd');
								$date1 = strtotime($x);
								$date2 = strtotime(get_field('schedule_date'));
							?>
							<?php if($date2 >= $date1): ?>
							<div class="events">
								<div class="events-img">
									<?php if(get_field('events_picture') != ""):?>
									<img src="<?php echo get_field('events_picture')?>">
									<?php else:?>
									<img src="<?php echo get_template_directory_uri() ?>/assets/images/Home/woman-flowers-holidays-girl-6270.jpg">
									<?php endif ?>
									
								</div>
								<div class="events-info">
									<h2><?php the_title() ?></h2>
									<p><?php echo get_field('schedule_time')?></p>
									<?php echo get_field('description')?>
								</div>
								<div class="events-date">
									<div class="date-info">
										<?php $date = date_create(get_field('schedule_date'))?>
										<h2><?php echo strtoupper($date->format('M')) . " " . $date->format('j')?></h2>
										<h2><?php echo $date->format('Y')?></h2>
									</div>
								</div>
							</div>	
							<?php endif ?>
							<?php endwhile ?>
						</div>
					</div>
					<div class="events-all events-list">
						<div class="label">
							<p>PAST EVENTS</p>
						</div>
						<div class="event-prior-list">
							<?php 
								$upevents = new Wp_Query(array(
									'post_type' => 'post_events',
									'orderby'   => 'schedule_date'
								));
							?>
							<?php while($upevents->have_posts()): $upevents->the_post(); ?>
							<?php 
								date_default_timezone_set('Asia/Manila');
								$x = date('Ymd');
								$date1 = strtotime($x);
								$date2 = strtotime(get_field('schedule_date'));
							?>
							<?php if($date2 <= $date1): ?>
							<div class="events">
								<div class="events-img">
									<?php if(get_field('events_picture') != ""):?>
									<img src="<?php echo get_field('events_picture')?>">
									<?php else:?>
									<img src="<?php echo get_template_directory_uri() ?>/assets/images/Home/woman-flowers-holidays-girl-6270.jpg">
									<?php endif ?>
									
								</div>
								<div class="events-info">
									<h2><?php the_title() ?></h2>
									<p><?php echo get_field('schedule_time')?></p>
									<?php echo get_field('description')?>
								</div>
								<div class="events-date">
									<div class="date-info">
										<?php $date = date_create(get_field('schedule_date'))?>
										<h2><?php echo strtoupper($date->format('M')) . " " . $date->format('j')?></h2>
										<h2><?php echo $date->format('Y')?></h2>
									</div>
								</div>
							</div>
							<?php endif ?>
							<?php endwhile ?>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>		
<?php include 'footer.php' ?>