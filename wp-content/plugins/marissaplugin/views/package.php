<div class="slick-content-gal">
<div class="gal-flex">
        <div class="gal-flex-inner" style="background-image: url('<?php echo $data->feat_image ?>');">
            <!-- <img src="assets/images/catering/humba-300x225.jpg" width="100%"> -->
        </div>
        <div class="gal-flex-inner">
            <!-- <h2>Humba</h2> -->
            <h2><?php echo $data->package_name ?></h2>
            <p><?php echo $data->descript ?></p>
            <div class="arrow"></div>
        </div>
    </div>
    <?php $num = 1; ?>
    
        <?php foreach($photos as $photo):?>
            <?php if($num == 1): ?>
                <div class="gal-flex">
            <?php endif ?>
            <div class="gal-flex-inner" style="background-image: url('<?php echo $photo->image_path?>');">
                <div class="overlay"></div>
                <div class="info">
                    <h2><?php echo $photo->image_name?></h2>
                    <!-- <h2>PORK HUMBA</h2> -->
                </div>
                
            </div>
            <?php if($num == 3): ?>
                    </div>
                    <?php 
                        $num = 0;
                    ?>
            <?php endif ?>
            <?php 
                $num++;
            ?>
        <?php endforeach ?>
    
    
</div>