<?php
/**
 * Page Template
 *
 * Template Name: Archiv
 *
 */
    get_header(); ?>



<div class="container">
<h3> All public photos </h3>
<?php
 	$media_categories = 'public';
if ( !is_array($media_categories)) {
	$media_categories = array ( $media_categories );
}
$category_args = array(
		'numberposts' => -1,
		'order' => 'ASC',
		'order_by' => 'menu_order',
		'post_type' => 'attachment',
		'post_parent' => null,
		'tax_query' => array(
			array('taxonomy' => 'publicity',
			'field' => 'slug',
			'terms' => $media_categories
			)
		),
);


$thumb = get_children(  $category_args );

$index = [];

if($thumb){
   foreach($thumb as $id => $attachment ){
			$full = wp_get_attachment_image_src( $id, 'large' )[0];
			
			$tax = get_the_term_list( $id, 'publicity' );
			array_push($index, $id);
		//	echo $id;<a href="'. get_permalink($id)  .'">
           echo '<div id="p'.$id . '" foo="'.$full.'" class="gridItem">';
		  
           echo wp_get_attachment_image( $id, 'medium' );
           $meta = wp_get_attachment_metadata($id);
   //        echo $tax;
   
           echo '</div>';
   }
}
//echo count($index);</a>
//echo $index[1];

?>
</div>


<div id="modbox" style="display:none;
position: fixed;
top: 0px;
left: 0px;
text-align: center;
background: rgb(34, 34, 34) none repeat scroll 0% 0%;
width: 100%;
height: 100%;" >
	<img src="" id="lgPre" alt="placeholder"> 
	
</div>

<script>
jQuery(document).ready(function($) {
imgs = $('.gridItem');





imgs.each(function( index ) {
  
//  	alert(this.getAttribute('next'));
		$(this).on("click", function(e) {
		//	alert(this.getAttribute('foo'));
		//	alert('next =  ' + imgs[index+1].id);
						//alert(index.next());

			$('#lgPre').attr('src', this.getAttribute('foo') ) ;
			$('#modbox').show();
		});
		
  });


//alert(imgs.length);
});
	
	
</script>
<?php get_footer(); ?>