<?php global $wpalchemy_media_access; ?>

<div class="my_meta_control">
 	
	<?php $mb->the_field('imgurl'); ?>
    <?php $wpalchemy_media_access->setGroupName('img-n'. $mb->get_the_index())->setInsertButtonLabel('Insert'); ?>

    <p>
        <div class="upload-btn"><label>Image URL</label> <?php echo $wpalchemy_media_access->getButton(array('label' => 'Select Image')); ?></div>
        <?php echo $wpalchemy_media_access->getField(array('name' => $mb->get_the_name(), 'value' => $mb->get_the_value())); ?>
        <img src="<?php echo $mb->get_the_value(); ?>" />
    </p>

    <?php $mb->the_field('title'); ?>
    <label for="<?php $mb->the_name(); ?>">Image Title (Alternate text)</label>
    <div><input type="text" id="<?php $mb->the_name(); ?>" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/></div>
    
    <p>Image Dimentions - Width: 655px &amp; Height: 180px</p>
    
    <?php $mb->the_field('bannerurl'); ?>
    <label for="<?php $mb->the_name(); ?>">Link (URL)</label>
    <div><input type="text" id="<?php $mb->the_name(); ?>" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/></div>
         
</div>