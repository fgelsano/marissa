<select name = "services">
        <?php if($val == "no value"):?>
            <option value = "no value">Select Service Type</option>
        <?php else:?>
            <option value = "<?php echo $val ?>"><?php echo $val ?></option>
        <?php endif ?>
        <option value = "Salon">Salon</option>
        <option value = "Boutique">Boutique</option>
        <option value = "Catering">Catering</option>
		<option value = "Package">Package</option>
</select>