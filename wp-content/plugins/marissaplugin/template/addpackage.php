<form action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method = "POST">
    <input type="hidden" name = "action" value = "save_datapackage">
    <div id = "marissa-plugin">
        <div class="marissa-body">
            <p>Add Package</p>
            <div class="input-field">
                <input type="submit" class = "btn btn-primary" value = "SAVE">
            </div>
            <div class="input-field">
                <label for="">Package Name</label>
                <input type="text" name = "pack_name">
            </div>
            <div class="input-field">
                <label for="">Package Description</label>
                <textarea name="description" id="" rows="6"></textarea>
            </div>
            <div class="input-field">
                <label for="">Featured Image: (Image URL)</label>
                <input type="text" name = "feat">
            </div>
            <div class="input-field">
                <label for="">Gallery</label>
                <a href="" id = "img-upload" >Add Images</a>
            </div>
            <div id = "galimages" class="gallery-images">
                <h2>Images</h2>
            </div>
            <div class="input-field">
                <input type="submit" class = "btn btn-success" value = "SAVE">
            </div>
        </div>
    </div>
</form>

