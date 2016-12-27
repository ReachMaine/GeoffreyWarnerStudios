<?php

$custom_mb = new WPAlchemy_MetaBox(array
(
    'id' => '_home_meta',
    'title' => 'Home page content template',
    'template' => get_stylesheet_directory() . '/metaboxes/home-meta.php',
	'include_template' => 'template-home.php'
));

$custom_mb = new WPAlchemy_MetaBox(array
(
    'id' => '_category_gallery_meta',
    'title' => '3 Column Gallery',
    'template' => get_stylesheet_directory() . '/metaboxes/category-gallery-meta.php',
	'include_template' => 'template-category-gallery.php'
));

$custom_mb = new WPAlchemy_MetaBox(array
(
    'id' => '_product_gallery_meta',
    'title' => 'Product Gallery',
    'template' => get_stylesheet_directory() . '/metaboxes/product-gallery-meta.php',
	'include_template' => 'template-product-gallery.php'
));

$custom_mb = new WPAlchemy_MetaBox(array
(
    'id' => '_formpage_meta',
    'title' => 'Images',
    'template' => get_stylesheet_directory() . '/metaboxes/formpage-meta.php',
	'include_template' => 'template-formpage.php'
));

$custom_mb = new WPAlchemy_MetaBox(array
(
    'id' => '_product_meta',
    'title' => 'Product',
    'template' => get_stylesheet_directory() . '/metaboxes/product-meta.php',
	'include_template' => 'template-product.php'
));

$custom_mb = new WPAlchemy_MetaBox(array
(
    'id' => '_detailed_gallery_meta',
    'title' => 'Product (Detailed Gallery)',
    'template' => get_stylesheet_directory() . '/metaboxes/detailed-gallery-meta.php',
	'include_template' => 'template-detailed-gallery.php'
));

$custom_mb = new WPAlchemy_MetaBox(array
(
    'id' => '_workshop_meta',
    'title' => 'Workshop',
    'template' => get_stylesheet_directory() . '/metaboxes/workshop-meta.php',
	'include_template' => 'template-workshop.php'
));

/*$custom_mb = new WPAlchemy_MetaBox(array
(
    'id' => '_product-page-meta',
    'title' => 'Product Carousal Images',
    'template' => get_stylesheet_directory() . '/metaboxes/product-page-meta.php'
));*/

$custom_mb = new WPAlchemy_MetaBox(array
(
    'id' => '_common_meta',
    'title' => 'Header Image',
    'template' => get_stylesheet_directory() . '/metaboxes/common-meta.php'
));

?>