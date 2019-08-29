jQuery(document).ready(function(){
    jQuery('#img-upload').click(function(e){
         e.preventDefault();
         var upload = wp.media({
         title:'Choose Image', //Title for Media Box
         multiple:true //For limiting multiple image
         })
         .on('select', function(){
             var select = upload.state().get('selection');
             var data = setdata(select.toJSON());
            jQuery('#galimages').html(data + jQuery('#galimages').html());
         })
         .open();
    });

    function setdata(data)
    {
        var setEl = "";
        data.forEach(function(el) {
            
            var sample = `
            <div class="gal-content">
                <div class="gal-inner">
                    <img src="` + el.url + `" alt="" style = "width: 100%;
                    height: 200px;">
                    <div class="desc">
                    <input type="text" name = "marissa_names[]" placeholder = "Image Name">
                    <input type="hidden" name = "marissa_url[]" value = "`+ el.url + `" >
                    </div>
                    <a href="" class = "photo-remove" >Remove</a>
                </div>  
            </div>
            `
            setEl += sample;
        });

        return setEl;
        
    }

    jQuery('.gal-delete').click(function(e){
        var link = jQuery(this);
        e.preventDefault();
        var ID = jQuery(this).attr("data");
        jQuery.post(params.ajaxurl,
            {
                action: "delete_datagallery",
                id:ID
            },
            function(data){
                link.parents("tr").hide();
            }
        )
    });
    jQuery('.photo-delete').click(function(e){
        var photo = jQuery(this);
        e.preventDefault();
        var ID = jQuery(this).attr("data");
        jQuery.post(params.ajaxurl,
            {
                action: "delete_photogallery",
                id:ID
            },
            function(data){
                alert(data)
                photo.parents(".gal-content").remove();
            }
        )
    });

    // Package Activity
    jQuery('.pack-delete').click(function(e){
        var link = jQuery(this);
        e.preventDefault();
        var ID = jQuery(this).attr("data");
        jQuery.post(params.ajaxurl,
            {
                action: "delete_datapackage",
                id:ID
            },
            function(data){
                link.parents("tr").hide();
            }
        )
    });

 });