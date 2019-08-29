<?php include 'header.php' ?>
	<div id="catering">
		<section class="main-banner" style="height:150px;background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/catering/eating-601578_1280.jpg')">
			
		</section>	
	</div>
    <br>
<?php 
	$postid = get_the_id();
?>
    <div class="container">
        <div class="blog-row">
            <div class="blog-col blog-col-1">
            <section class="service-main">
                <div class="container">
                    <div class="content-row">
                        <?php while(have_posts()): ?>
                            <?php the_post(); ?>

                            <div class="service-thumbnail">
                            <?php if(has_post_thumbnail()): ?>
                                <img src="<?php the_post_thumbnail_url() ?>" alt="">

                            <?php else: ?>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/catering/eating-601578_1280.jpg" alt="">
                            <?php endif ?>
                            </div>
                            <br>
                            <h2><?php the_title() ?> - <?php echo get_post_meta(get_the_id(),'services',true) ?></h2>
                            <br>
                            <p><?php the_content(); ?></p>
                        <?php endwhile ?>
                    </div>
                </div>
            </section>
            <div id="home" class="gallery">
                <section class="content4">
                    <div class="container">
                        <div class="content4-inner">
                            <div class="flex-row">
                                <?php 
                                    global $wpdb;
                                    $id = get_the_id();
                                    $db = $wpdb->base_prefix . "marissa_image_gallery";

                                    $data = $wpdb->get_results("SELECT * FROM `$db` WHERE gallery_id = '$id'");
                                ?>
                                    <?php foreach($data as $value): ?>
                                    <div class="flex-col">
                                            <div class="show-col-info" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/Home/pexels-photo-54296.jpeg')">
                                                <h2>
                                                    Image
                                                    <div class="show-flex-white1"></div>
                                                    <div class="show-flex-white2"></div>
                                                </h2>
                                            </div>
                                    </div>
                                    <?php endforeach?>
                                
                                
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            </div>
            <div class="blog-col blog-col-2">
				<h3>
					Recent Posts
				</h3>
                <div class="recent-service">
                    <?php 
                        $latepost = new WP_Query(array(
                            'post_type' => 'service',
                            'meta_value' => 'Salon',
							'order' => 'DESC'
                        ));
                    ?>
                    <?php if($latepost->have_posts()): ?>
                        <?php while($latepost->have_posts()): ?>
                                <?php 
                                    $latepost->the_post();
                                ?>
					<?php if(get_the_id() != $postid): ?>

                                <a href="<?php the_permalink() ?>">
                                    <img src="<?php the_post_thumbnail_url() ?>" width = "100%" alt="">
                                    <p><?php the_title() ?></p>
                                </a>
                                <br>
					<?php endif ?>
                        <?php endwhile ?>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
<?php include 'footer.php' ?>