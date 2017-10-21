<?php
/**
 * Front Page Template
 *
 * The front page template is used by the home page/default URL of your site.
 *
 */
 get_header(); ?>

<div id="gridWrap" class="container">
<?php
 	
$args = array(
		'numberposts' => -1,
		'order' => 'ASC',
		'post_mime_type' => 'image',
		'post_parent' => $postID,
		'post_status' => null,
		'post_type' => 'attachment',
	);


$thumb = get_children( $args );

?>

<?php
if($thumb){
   foreach($thumb as $id => $attachment ){
	   		
	   		$url= wp_get_attachment_url( $id );
			$tax = get_the_term_list( $id, 'category_media' );

           echo '<div class="gridItem"><a href="'. $id  .'">';
		  
           echo wp_get_attachment_image( $id, 'medium' );
           $meta = wp_get_attachment_metadata($id);
   //        echo $tax;
   
           echo '</a></div>';
   }
}

?>
</div>
       
       
       

<?php get_footer(); ?>