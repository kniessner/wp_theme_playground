<?php 


/**
* Facebook Open Graph Tags
 *
 */


add_action('wp_head', 'opengraph_meta_tags');
 
define('OPENGRAPH_NS_URI', 'http://opengraphprotocol.org/schema/');

$opengraph_ns_set = false;


/**
 * Add Open Graph XML namespace to <html> element.
 */
function opengraph_add_namespace( $output ) {
	global $opengraph_ns_set;
	$opengraph_ns_set = true;

	$output .= ' xmlns:og="' . esc_attr(OPENGRAPH_NS_URI) . '"';
	return $output;
}
add_filter('language_attributes', 'opengraph_add_namespace');


/**
 * Get the Open Graph metadata for the current page.
 *
 * @uses apply_filters() Calls 'opengraph_{$name}' for each property name
 * @uses apply_filters() Calls 'opengraph_metadata' before returning metadata array
 */
function opengraph_metadata() {
	$metadata = array();

 	// defualt properties defined at http://opengraphprotocol.org/
	$properties = array(
		// required
		'title', 'type', 'image', 'url', 

		// optional
		'site_name', 'description', 

		// location
		'longitude', 'latitude', 'street-address', 'locality', 'region', 
		'postal-code', 'country-name',

		// contact
		'email', 'phone_number', 'fax_number',
	);

	foreach ($properties as $property) {
		$filter = 'opengraph_' . $property;
		$metadata["og:$property"] = apply_filters($filter, '');
	}

	return apply_filters('opengraph_metadata', $metadata);
}


/**
 * Register filters for default Open Graph metadata.
 */
function opengraph_default_metadata() {
	add_filter('opengraph_title', 'opengraph_default_title', 5);
	add_filter('opengraph_type', 'opengraph_default_type', 5);
//	add_filter('opengraph_image', 'opengraph_default_image', 5);
//	add_filter('opengraph_url', 'opengraph_default_url', 5);
	add_filter('opengraph_site_name', 'opengraph_default_sitename', 5);
	add_filter('opengraph_description', 'opengraph_default_description', 5);
}
add_filter('wp', 'opengraph_default_metadata');


/**
 * Default title property, using the page title.
 */
function opengraph_default_title( $title ) {
	if ( is_singular() && empty($title) ) {
		global $post;
		$title = $post->post_title;
	}

	return wp_title(" |", false);
}


/**
 * Default type property.
 */
function opengraph_default_type( $type ) {
	if ( empty($type) ) {	
	$type = ( (is_singular() )?'article': 'website' );	
	return $type;
}

}
/**
 * Default image property, using the post-thumbnail.
 */
function opengraph_default_image( $image ) {
if( $_GET["id"] ) {
$id = $_GET['id']; 
$image =  wp_get_attachment_url( $id ); 

/*<meta property="og:image"  content="<?php echo wp_get_attachment_url( $id ); ?>" />*/
return $image;

	}
	
	
}


/**
 * Default url property, using the permalink for the page.
 */
function opengraph_default_url( $url ) {
$URL = ("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");

	$Path=$_SERVER['REQUEST_URI'];
	//$URI=get_bloginfo('url').$Path;

	return $URL."hahaha";
}


/**
 * Default site_name property, using the bloginfo name.
 */
function opengraph_default_sitename( $name ) {
	if ( empty($name) ) $name = get_bloginfo('name');
	return $name;
}


/**
 * Default description property, using the bloginfo description.
 */
function opengraph_default_description( $description ) {
    if ( !empty($description) ) {
        return $description;
    }
    $description = shwib_description();
 	return $description;
}


/**
 * Output Open Graph <meta> tags in the page header.
 */
function opengraph_meta_tags() {
	global $opengraph_ns_set;

	$xml_ns = '';
	if ( !$opengraph_ns_set ) {
		$xml_ns = 'xmlns:og="' . esc_attr(OPENGRAPH_NS_URI) . '" ';
	}

	$metadata = opengraph_metadata();
	foreach ( $metadata as $key => $value ) {
		if ( empty($key) || empty($value) ) continue;
		echo '<meta ' . $xml_ns . 'property="' . esc_attr($key) . '" content="' . esc_attr($value) . '" />' . "\n";
		
	}
	echo '<meta name="description" content="' . shwib_description() . '">';
	
}