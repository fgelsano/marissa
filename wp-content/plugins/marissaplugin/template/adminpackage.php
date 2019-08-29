<h2>Marissa Package</h2>

<div class="marissa-gal">
    <div class="container">
        <a href="admin.php?page=marissa_addpackage" class = "btn btn-success">Add</a>
        <table class = "mar-gal table table-striped">
            <thead>
                <tr>
                    <th></th>
                    <th>Package Name</th>
                    <th>Shortcode</th>
                </tr>
            </thead>
            <tbody>
            <?php if(empty($data)): ?>
                <tr>
                    <td>No Record at the Moment</td>
                </tr>
            <?php else: ?>
                <?php foreach($data as $value) :?>
                    
                    <tr>
                        <td>
                            <a href="admin.php?page=marissa_editpackage&id=<?php echo $value->id ?>" class = "btn btn-link">Edit</a> |
                            <a class = "pack-delete" data = "<?php echo $value->id ?>" href="" class = "btn btn-link">Delete</a>
                        </td>
                        <td><?php echo $value->package_name ?></td>
                        <td><?php echo '[marissa_package id="'.$value->id.'"]' ?></td>
                    </tr>
                <?php endforeach ?>
            <?php endif ?>
            </tbody>
        </table>
    </div>
</div>