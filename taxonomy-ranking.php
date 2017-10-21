<?php get_header();


?>



<div class="container">
<?php wp_title("",true); ?>
<h3> My favorite photos </h3>

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
			array('taxonomy' => 'ranking',
			'field' => 'slug',
			'terms' => $media_categories
			)
		),
);
$thumb = get_children(  $category_args );

$pages = array();
$no = 0;

foreach ($thumb as $page) {
//echo( $page->ID."<br>");
$no++;

	$pages[] += $page->ID;
	$imgMedium = wp_get_attachment_image_src( $page->ID, 'medium')[0];
	$imgBig = wp_get_attachment_image_src( $page->ID, 'large')[0];
	
    ?>  
		  <div class="gridItem " ><a id="<?php echo $page->ID; ?>" class="i<?php echo $no; ?>" foo="<?php echo $no; ?>" srcLarge="<?php echo $imgBig; ?>" onclick="galSwitch('<?php echo $imgMedium; ?>', this)">
		  <?php
      //    echo '<div class="gridItem"><a href="http://kniessner.com/complex/image?id='. $id  .'&fi='. wp_title("",false).'">';
         	?><img srcLarge="<?php echo $imgBig; ?>" src="<?php echo $imgMedium; ?>"/><?php
           echo '</a></div>';
           
    }       

?>
<div id="imgModal " class="modalFullscreen">
	<img id='slide' src="/"/>
</div>
<button id="left">Left</button>
<button onclick="rr()" id="right">right</button>


<div class="imgs">

</div></div>


<?php get_footer(); ?>