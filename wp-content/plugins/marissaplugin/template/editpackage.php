<form action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method = "POST">
    <input type="hidden" name = "action" value = "edit_datapackage">
    <div id = "marissa-plugin">
        <div class="marissa-body">
            <p>Edit Package</p>
            <input type="hidden" name = "id" value = "<?php echo $data[0]->id ?>" >
            <div class="input-field">
                <input type="submit" class = "btn btn-primary" value = "SAVE">
            </div>
            <div class="input-field">
                <label for="">Package Name</label>
                <input type="text" name = "pack_name" value = "<?php echo $data[0]->package_name ?>">
            </div>
            <div class="input-field">
                <label for="">Package Description</label>
                <textarea name="description" id="" rows="6"><?php echo $data[0]->descript ?></textarea>
            </div>
            <div class="input-field">
                <label for="">Featured Image: (Image URL)</label>
                <input type="text" name = "feat" value = "<?php echo $data[0]->feat_image ?>">
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
                <input type="submit" class = "btn btn-success" value = "SAVE">
            </div>
        </div>
    </div>
</form>

