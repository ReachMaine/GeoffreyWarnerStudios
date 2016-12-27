<?php global $wpalchemy_media_access; ?>
<div class="my_meta_control">
	<label>Top Block</label>
 
	<?php $mb->the_field('top-content'); ?>
	<div class="customEditor">
        <p align="right">
            <a class="button toggleVisual">Visual</a>
            <a class="button toggleHTML">HTML</a>
        </p>
       	<textarea name="<?php $mb->the_name(); ?>" rows="20"><?php $mb->the_value(); ?></textarea>
    </div>
 </div>

<div class="my_meta_control">
 	
 	<label>Slider Images</label>
    <div class="opt-buttons">
      <p><a href="#" class="docopy-product-imgs button">Add Image</a></p>
      <p><a href="#" class="dodelete-product-imgs button">Remove All</a></p>
    </div>
    <p>Image Dimentions - Thumbnails[width: 85px &amp; Height: any] Large[Width: 385px &amp; Height: any]</p>
    
    <div class="saperator"></div>
 
    <?php while($mb->have_fields_and_multi('product-imgs')): ?>
    <?php $mb->the_group_open(); ?>
    
        <?php $mb->the_field('imgurl-thumb'); ?>
        <?php $wpalchemy_media_access->setGroupName('imgs-n'. $mb->get_the_index())->setInsertButtonLabel('Insert'); ?>
 
        <p>
  	 		<div class="upload-btn"><label>Image URL (Thumbnail)</label> <?php echo $wpalchemy_media_access->getButton(array('label' => 'Select Image')); ?></div>
            <?php echo $wpalchemy_media_access->getField(array('name' => $mb->get_the_name(), 'value' => $mb->get_the_value())); ?>
            <img src="<?php echo $mb->get_the_value(); ?>" />
        </p>
        
        <?php $mb->the_field('imgurl-large'); ?>
        <?php $wpalchemy_media_access->setGroupName('imgl-n'. $mb->get_the_index())->setInsertButtonLabel('Insert'); ?>
 
        <p>
  	 		<div class="upload-btn"><label>Image URL (Large)</label> <?php echo $wpalchemy_media_access->getButton(array('label' => 'Select Image')); ?></div>
            <?php echo $wpalchemy_media_access->getField(array('name' => $mb->get_the_name(), 'value' => $mb->get_the_value())); ?>
        </p>
        
        <?php $mb->the_field('imgurl-popup'); ?>
        <?php $wpalchemy_media_access->setGroupName('imgp-n'. $mb->get_the_index())->setInsertButtonLabel('Insert'); ?>
 
        <p>
  	 		<div class="upload-btn"><label>Image URL (Popup)</label> <?php echo $wpalchemy_media_access->getButton(array('label' => 'Select Image')); ?></div>
            <?php echo $wpalchemy_media_access->getField(array('name' => $mb->get_the_name(), 'value' => $mb->get_the_value())); ?>
        </p>
        
 
        <?php $mb->the_field('title'); ?>
        <label for="<?php $mb->the_name(); ?>">Image Title</label>
        <div><input type="text" id="<?php $mb->the_name(); ?>" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/></div>
        
        <?php $mb->the_field('prod-desc'); ?>
        <label for="<?php $mb->the_name(); ?>">Product Info</label>
        <div><textarea name="<?php $mb->the_name(); ?>" rows="5" id="<?php $mb->the_name(); ?>"><?php $mb->the_value(); ?></textarea></div>
        
        
        <p><a href="#" class="dodelete button">Remove</a></p>
        
    <?php $mb->the_group_close(); ?>
    <?php endwhile; ?>
  
</div>