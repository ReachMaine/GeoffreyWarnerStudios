<?php global $wpalchemy_media_access; ?>

<div class="my_meta_control">
 	
 	<h2>Column 1</h2>
    <div class="opt-buttons">
      <p><a href="#" class="docopy-category_gallery_col1 button">Add Image</a></p>
      <p><a href="#" class="dodelete-category_gallery_col1 button">Remove All</a></p>
      <p>Image Dimentions - Width: 249px &amp; Height: any</p>
    </div>
    
    <div class="saperator"></div>
 
    <?php while($mb->have_fields_and_multi('category_gallery_col1')): ?>
    <?php $mb->the_group_open(); ?>
 
        <?php $mb->the_field('imgurl-col1'); ?>
        <?php $wpalchemy_media_access->setGroupName('img-n1'. $mb->get_the_index())->setInsertButtonLabel('Insert'); ?>
 
        <p>
  	 		<div class="upload-btn"><label>Image URL</label> <?php echo $wpalchemy_media_access->getButton(array('label' => 'Select Image')); ?></div>
            <?php echo $wpalchemy_media_access->getField(array('name' => $mb->get_the_name(), 'value' => $mb->get_the_value())); ?>
            <img src="<?php echo $mb->get_the_value(); ?>" />
        </p>
 
        <?php $mb->the_field('title-col1'); ?>
        <label for="<?php $mb->the_name(); ?>">Image Title</label>
        <div><input type="text" id="<?php $mb->the_name(); ?>" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/></div>
        
        
        <?php $mb->the_field('link-col1'); ?>
        <label for="<?php $mb->the_name(); ?>">Link URL</label>
        <div><input type="text" id="<?php $mb->the_name(); ?>" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/></div>
        
        <p><a href="#" class="dodelete button">Remove</a></p>
        
    <?php $mb->the_group_close(); ?>
    <?php endwhile; ?>
  
</div>


<div class="my_meta_control">
 	
 	<h2>Column 2</h2>
    <div class="opt-buttons">
      <p><a href="#" class="docopy-category_gallery_col2 button">Add Image</a></p>
      <p><a href="#" class="dodelete-category_gallery_col2 button">Remove All</a></p>
	  <p>Image Dimentions - Width: 249px &amp; Height: any</p>
    </div>
    
    <div class="saperator"></div>
 
    <?php while($mb->have_fields_and_multi('category_gallery_col2')): ?>
    <?php $mb->the_group_open(); ?>
 
        <?php $mb->the_field('imgurl-col2'); ?>
        <?php $wpalchemy_media_access->setGroupName('img-n2'. $mb->get_the_index())->setInsertButtonLabel('Insert'); ?>
 
        <p>
  	 		<div class="upload-btn"><label>Image URL</label> <?php echo $wpalchemy_media_access->getButton(array('label' => 'Select Image')); ?></div>
            <?php echo $wpalchemy_media_access->getField(array('name' => $mb->get_the_name(), 'value' => $mb->get_the_value())); ?>
            <img src="<?php echo $mb->get_the_value(); ?>" />
        </p>
 
        <?php $mb->the_field('title-col2'); ?>
        <label for="<?php $mb->the_name(); ?>">Image Title</label>
        <div><input type="text" id="<?php $mb->the_name(); ?>" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/></div>
        
        <?php $mb->the_field('link-col2'); ?>
        <label for="<?php $mb->the_name(); ?>">Link URL</label>
        <div><input type="text" id="<?php $mb->the_name(); ?>" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/></div>
        
        <p><a href="#" class="dodelete button">Remove</a></p>
        
    <?php $mb->the_group_close(); ?>
    <?php endwhile; ?>
  
</div>

<div class="my_meta_control">
 	
 	<h2>Column 3</h2>
    <div class="opt-buttons">
      <p><a href="#" class="docopy-category_gallery_col3 button">Add Image</a></p>
      <p><a href="#" class="dodelete-category_gallery_col3 button">Remove All</a></p>
      <p>Image Dimentions - Width: 249px &amp; Height: any</p>
    </div>
    
    
    <div class="saperator"></div>
 
    <?php while($mb->have_fields_and_multi('category_gallery_col3')): ?>
    <?php $mb->the_group_open(); ?>
 
        <?php $mb->the_field('imgurl-col3'); ?>
        <?php $wpalchemy_media_access->setGroupName('img-n3'. $mb->get_the_index())->setInsertButtonLabel('Insert'); ?>
 
        <p>
  	 		<div class="upload-btn"><label>Image URL</label> <?php echo $wpalchemy_media_access->getButton(array('label' => 'Select Image')); ?></div>
            <?php echo $wpalchemy_media_access->getField(array('name' => $mb->get_the_name(), 'value' => $mb->get_the_value())); ?>
            <img src="<?php echo $mb->get_the_value(); ?>" />
        </p>
 
        <?php $mb->the_field('title-col3'); ?>
        <label for="<?php $mb->the_name(); ?>">Image Title</label>
        <div><input type="text" id="<?php $mb->the_name(); ?>" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/></div>
        
        <?php $mb->the_field('link-col3'); ?>
        <label for="<?php $mb->the_name(); ?>">Link URL</label>
        <div><input type="text" id="<?php $mb->the_name(); ?>" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/></div>
        
        <p><a href="#" class="dodelete button">Remove</a></p>
        
    <?php $mb->the_group_close(); ?>
    <?php endwhile; ?>
  
</div>