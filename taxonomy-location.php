<?php
/**
 * Page Template
 *
 * This is the default page template. 
 *
 */
    get_header(); ?>



<div class="container">
<h3> All photos of <?php wp_title("",true) ; ?> </h3>
<?php
 	$media_categories = wp_title("",false);
if ( !is_array($media_categories)) {
	$media_categories = array ( $media_categories );
}
$category_args = array(
		'numberposts' => -1,
		'order' => 'ASC',
		'post_type' => 'attachment',
		'post_parent' => null,
		'tax_query' => array(
			array('taxonomy' => 'location',
			'field' => 'slug',
			'terms' => $media_categories
			)
		),
);


$thumb = get_children(  $category_args );

if($thumb){
   foreach($thumb as $id => $attachment ){
			
			$tax = get_the_term_list( $id, 'publicity' );
			
			
           echo '<div class="gridItem"><a href="http://kniessner.com/complex/image?id='. $id   .'&fi='. wp_title("",false).'">';
		  
           echo wp_get_attachment_image( $id, 'medium' );
           $meta = wp_get_attachment_metadata($id);
   //        echo $tax;
   
           echo '</a></div>';
   }
}


?>
</div>
                             <?php get_footer(); ?>