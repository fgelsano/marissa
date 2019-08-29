<h2>Edit Gallery</h2>

<?php 
    $nds_add_meta_nonce = wp_create_nonce( 'save_datagallery' ); 
?>

<div id = "marissa-plugin">
    <div class="marissa-body">
        <form action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post">
            <input type="hidden" name="id" value = "<?php echo $_GET['id']?>">
            <input type="hidden" name="action" value = "edit_datagallery">
            <input type="hidden" name="nds_add_user_meta_nonce" value = "<?php echo $nds_add_meta_nonce ?>">
            <div class="input-field">
                <input type="submit" class = "btn btn-info" value = "UPDATE">
            </div>
            <div class="input-field">
                <label for="">Gallery Name</label>
                <input type="text" name = "gal_name" value = "<?php echo $data[0]->gallery_name ?>">
            </div>
            <div class="input-field">
                <label for="">Gallery</label>
                <a href="" id = "img-upload" >Add Images</a>
            </div>

            <div id = "galimages" class="gallery-images">
                <h2>Images</h2>
                <?php if(!empty($photos)):?>
                    <?php foreach($photos as $value):?>
                    <div class="gal-content">
                        <div class="image-content">
                            <img src="<?php echo $value->image_path?>">
                        </div>
                        <div class="input-content">
                            <label>Image Name</label>
                            <input type="text" name="img-name[]" value = "<?php echo $value->image_name ?>">
                            <input type="hidden" name="img-id[]" value = "<?php echo $value->id ?>">
                            <input type="hidden" name="img-url[]" value="<?php echo $value->image_path?>">
                            <a data = "<?php echo $value->id ?>" class = "photo-delete" href="">Delete</a>
                        </div>
                    </div>
                    <?php endforeach?>
                <?php endif ?>
                
            </div>
            <div class="input-field">
                <input type="submit" name = "marssa_submit_form" class = "btn btn-info" value = "UPDATE">
            </div>
        </form>
    </div>
</div>

