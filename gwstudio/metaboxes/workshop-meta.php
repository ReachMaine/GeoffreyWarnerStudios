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
      <p><a href="#" class="docopy-workshop-imgs button">Add Image</a></p>
      <p><a href="#" class="dodelete-workshop-imgs button">Remove All</a></p>
    </div>
    <p>Image Dimentions - Width: 807px &amp; Height: 558px</p>
    
    <div class="saperator"></div>
 
    <?php while($mb->have_fields_and_multi('workshop-imgs')): ?>
    <?php $mb->the_group_open(); ?>
    
        <?php $mb->the_field('imgurl'); ?>
        <?php $wpalchemy_media_access->setGroupName('imgs-n'. $mb->get_the_index())->setInsertButtonLabel('Insert'); ?>
 
        <p>
  	 		<div class="upload-btn"><label>Image URL</label> <?php echo $wpalchemy_media_access->getButton(array('label' => 'Select Image')); ?></div>
            <?php echo $wpalchemy_media_access->getField(array('name' => $mb->get_the_name(), 'value' => $mb->get_the_value())); ?>
        </p>
             
 
        <?php $mb->the_field('title'); ?>
        <label for="<?php $mb->the_name(); ?>">Image Title (Alternate Text)</label>
        <div><input type="text" id="<?php $mb->the_name(); ?>" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/></div>
        
        
        <p><a href="#" class="dodelete button">Remove</a></p>
        
    <?php $mb->the_group_close(); ?>
    <?php endwhile; ?>
  
</div>