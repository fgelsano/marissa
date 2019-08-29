<div class="input-field">
    <a href="" id = "img-upload" >Add Images</a>
</div>
<div id = "galimages" class="gallery-images">
    <?php if(count($photos) > 0): ?>
        <?php foreach($photos as $photo): ?>
            <div class="gal-content">
                <div class="gal-inner">
                    <img src="<?php echo $photo->image_path ?>" alt="">
                    <div class="desc">
                    <input type="text" name = "marissa_names[]" placeholder = "Image Name" value = "<?php echo $photo->image_name ?>" >
                    <input type="hidden" name = "marissa_url[]" value = "<?php echo $photo->image_path ?>" >
                    <input type = "hidden" name = "savedata[]" value = "<?php echo $photo->image_path ?>" > 
                    </div>
                    <a href="" data = "<?php echo $photo->id ?>" class = "photo-delete">Remove</a>
                </div>  
            </div>
        <?php endforeach ?>

    <?php endif ?>
</div>