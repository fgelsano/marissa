<section class="content4">
    <div class="container">
        <div class="content4-inner">
            <h2><?php echo $data[0]->gallery_name ?></h2>
            <?php 
                $count = 0;
            ?>
            
            <?php foreach($gallery as $images): ?>
                <?php
                    if($count == 0){ ?>
                        <div class="flex">
                    <?php }
                    $count++;
                ?>
                <div class="flex-inner" style="background-image: url('<?php echo $images->image_path ?>')">
                    <div class="show-flex-info">
                        <h2>
                            <?php echo $images->image_name ?>
                            <div class="show-flex-white1"></div>
                            <div class="show-flex-white2"></div>
                        </h2>
                        <div class="show-flex-arrow"></div>
                    </div>
                </div>

                
                <?php if($count == 3):?>
                    </div>
                <?php $count = 0;?>
                <?php endif ?>
            <?php endforeach ?>
        </div>
    </div>
</section>