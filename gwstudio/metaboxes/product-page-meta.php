<?php global $wpalchemy_media_access; ?>

<div class="my_meta_control">
 	
    <div class="opt-buttons">
      <p><a href="#" class="docopy-product_gallery button">Add Image Group</a></p>
      <p><a href="#" class="dodelete-product_gallery button">Remove All</a></p>
      <p>Image Dimentions - Width: 249px &amp; Height: any</p>
    </div>
    
    <div class="saperator"></div>
 
    <?php while($mb->have_fields_and_multi('product_page')): ?>
    <?php $mb->the_group_open(); ?>
    
        <?php $mb->the_field('imgurl-thumb'); ?>
        <?php $wpalchemy_media_access->setGroupName('imgs-n'. $mb->get_the_index())->setInsertButtonLabel('Insert'); ?>
 
        <p>
  	 		<div class="upload-btn"><label>Image URL (Thumbnail)</label> <?php echo $wpalchemy_media_access->getButton(array('label' => 'Select Image')); ?></div>
            <?php echo $wpalchemy_media_access->getField(array('name' => $mb->get_the_name(), 'value' => $mb->get_the_value())); ?>
        </p>
        
        <?php $mb->the_field('imgurl-large'); ?>
        <?php $wpalchemy_media_access->setGroupName('imgl-n'. $mb->get_the_index())->setInsertButtonLabel('Insert'); ?>
 
        <p>
  	 		<div class="upload-btn"><label>Image URL (Large)</label> <?php echo $wpalchemy_media_access->getButton(array('label' => 'Select Image')); ?></div>
            <?php echo $wpalchemy_media_access->getField(array('name' => $mb->get_the_name(), 'value' => $mb->get_the_value())); ?>
        </p>
        
 
        <?php $mb->the_field('title'); ?>
        <label for="<?php $mb->the_name(); ?>">Image Title</label>
        <div><input type="text" id="<?php $mb->the_name(); ?>" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/></div>
        
        <p><a href="#" class="dodelete button">Remove</a></p>
        
    <?php $mb->the_group_close(); ?>
    <?php endwhile; ?>
  
</div>

