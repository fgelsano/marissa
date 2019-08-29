<?php 
    $nds_add_meta_nonce = wp_create_nonce( 'save_datagallery' ); 
?>

<div id = "marissa-plugin">
    <div class="marissa-body">
        <form action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post">
            <p>Add Gallery</p>
            <input type="hidden" name="action" value = "save_datagallery">
            <input type="hidden" name="nds_add_user_meta_nonce" value = "<?php echo $nds_add_meta_nonce ?>">
            <div class="input-field">
                <input type="submit" value = "SAVE">
            </div>
            <div class="input-field">
                <label for="">Gallery Name</label>
                <input type="text" name = "gal_name">
            </div>
            <div class="input-field">
                <label for="">Gallery</label>
                <a href="" id = "img-upload" >Add Images</a>
            </div>

            <div id = "galimages" class="gallery-images">
                <h2>Images</h2>
            </div>
            <div class="input-field">
                <input type="submit" name = "marssa_submit_form" value = "SAVE">
            </div>
        </form>
    </div>
</div>

