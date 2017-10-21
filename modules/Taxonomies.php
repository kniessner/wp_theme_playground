<?php


add_action('init', 'custom_taxonomies');
function custom_taxonomies() {

	// JOURNAL ENTRIES Taxonomies

	
	$ressource_labels = [
		'name'                       => __('Ressources', 'code-base'),
		'singular_name'              => __('Ressource', 'code-base'),
		'all_items'                  => __('All Ressources', 'code-base'),
		'edit_item'                  => __('Edit Ressource', 'code-base'),
		'view_item'                  => __('View Ressource', 'code-base'),
		'update_item'                => __('Update Ressource', 'code-base'),
		'add_new_item'               => __('Add New Ressource', 'code-base'),
		'new_item_name'              => __('New Ressource', 'code-base'),
		'parent_item'                => __('Parent Ressource', 'code-base'),
		'parent_item_colon'          => __('Parent Ressource:', 'code-base'),
		'search_items'               => __('Search Ressources', 'code-base'),
		'not_found'                  => __('No Ressources found.', 'code-base'),
	];

	register_taxonomy('ressource_labels', ['guides','snippets','demo'], [
		'hierarchical'      => true, // true: like categories, false: like tags
		'labels'            => $ressource_labels,
	]);
	
	// PROGRAM ITEMS Taxonomies

	$topic_labels = [
		'name'                       => __('Topic', 'code-base'),
		'singular_name'              => __('Topic', 'code-base'),
		'all_items'                  => __('All Topic', 'code-base'),
		'edit_item'                  => __('Edit Topic', 'code-base'),
		'view_item'                  => __('View Topic', 'code-base'),
		'update_item'                => __('Update Topic', 'code-base'),
		'add_new_item'               => __('Add New Topic', 'code-base'),
		'new_item_name'              => __('New Topic', 'code-base'),
		'parent_item'                => __('Parent Topic', 'code-base'),
		'parent_item_colon'          => __('Parent Topic:', 'code-base'),
		'search_items'               => __('Search Topic', 'code-base'),
		'not_found'                  => __('No Topic found.', 'code-base'),
	];

	register_taxonomy('topic', ['snippets','guides','page','demo','projects'], [
		'hierarchical'      => false, // true: like categories, false: like tags
		'labels'            => $topic_labels,
	]);

	$tags = [
		'name'                       => __('Tags', 'code-base'),
		'singular_name'              => __('Tag', 'code-base'),
		'all_items'                  => __('All Tags', 'code-base'),
		'edit_item'                  => __('Edit Tag', 'code-base'),
		'view_item'                  => __('View Tag', 'code-base'),
		'update_item'                => __('Update Tag', 'code-base'),
		'add_new_item'               => __('Add New Tag', 'code-base'),
		'new_item_name'              => __('New Tag', 'code-base'),
		'parent_item'                => __('Parent Tag', 'code-base'),
		'parent_item_colon'          => __('Parent Tag:', 'code-base'),
		'search_items'               => __('Search Tags', 'code-base'),
		'not_found'                  => __('No Tag found.', 'code-base'),
	];

	register_taxonomy('tags', ['page','guides','snippets','demo','projects'], [
		'hierarchical'      => false, // true: like categories, false: like tags
		'labels'            => $tags,
	]);

	// Programming Languages

	$programming_languages = [
		'name'                       => __('Programming Language', 'code-archiv'),
		'singular_name'              => __('Programming Language', 'code-archive'),
		'all_items'                  => __('All Programming Languages', 'code-archive'),
		'edit_item'                  => __('Edit Programming Language', 'code-archive'),
		'view_item'                  => __('View Programming Language', 'code-archive'),
		'update_item'                => __('Update Programming Language', 'code-archive'),
		'add_new_item'               => __('Add New Programming Language', 'code-archive'),
		'new_item_name'              => __('New Programming Language', 'code-archive'),
		'parent_item'                => __('Parent Programming Language', 'code-archive'),
		'parent_item_colon'          => __('Parent Programming Language:', 'code-archive'),
		'search_items'               => __('Search Programming Language', 'code-archive'),
		'not_found'                  => __('No Programming Language found.', 'code-archive'),
	];
	
	register_taxonomy('programming_languages', ['page','projects','demo'], [
		'hierarchical'      => true, // true: like categories, false: like tags
		'labels'            => $programming_languages,
	]);

};



function add_category_to_pages() {
    $labels = array(
        'name'              => 'Add Category',
        'singular_name'     => 'Category',
        'search_items'      => 'Search Category',
        'edit_item'         => 'Edit Category',
        'update_item'       => 'Update Category',
        'add_new_item'      => 'Add New Category',
        'new_item_name'     => 'New Category',
        'menu_name'         => 'Category', 
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'query_var' => true,
        'rewrite' => true,
       	'public' => true,
				'show_in_nav_menus' => true,
				'show_ui' => true,
				'show_admin_column' => true,
				'update_count_callback' => '_update_generic_term_count',
    		'publicly_queryable'=>  true,
    		'has_archive'       =>  true,
    		'rewrite' => array('slug' => 'category', 'with_front' => false)
    );
		register_taxonomy('category', ['page','projects','demo','snippets'], [
			'hierarchical'      => true, // true: like categories, false: like tags
			'labels'            => $args,
		]);

}
add_action( 'init', 'add_category_to_pages' );


function add_Ranking_to_media_taxonomy() {
    $labels = array(
        'name'              => 'Add Ranking',
        'singular_name'     => 'Ranking',
        'search_items'      => 'Search Ranking',
        'edit_item'         => 'Edit Ranking',
        'update_item'       => 'Update Ranking',
        'add_new_item'      => 'Add New Ranking',
        'new_item_name'     => 'New Ranking',
        'menu_name'         => 'Ranking',
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'query_var' => true,
        'rewrite' => true,
        'public' => true,
				'show_in_nav_menus' => true,
				'show_ui' => true,
				'show_admin_column' => true,
				'update_count_callback' => '_update_generic_term_count',
    		'publicly_queryable'=>  true,
    		'has_archive'       =>  true,
    		'rewrite' => array('slug' => 'ranking', 'with_front' => false)
    );

    register_taxonomy( 'ranking', 'attachment', $args );
}
add_action( 'init', 'add_Ranking_to_media_taxonomy' );


function add_category_to_media_taxonomy() {
    $labels = array(
        'name'              => 'Add Category',
        'singular_name'     => 'Category',
        'search_items'      => 'Search Category',
        'edit_item'         => 'Edit Category',
        'update_item'       => 'Update Category',
        'add_new_item'      => 'Add New Category',
        'new_item_name'     => 'New Category',
        'menu_name'         => 'Category',
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'query_var' => true,
        'rewrite' => true,
       	'public' => true,
				'show_in_nav_menus' => true,
				'show_ui' => true,
				'show_admin_column' => true,
				'update_count_callback' => '_update_generic_term_count',
    		'publicly_queryable'=>  true,
    		'has_archive'       =>  true,
    		'rewrite' => array('slug' => 'category', 'with_front' => false)
    );

    register_taxonomy( 'category', 'attachment', $args );
}
add_action( 'init', 'add_category_to_media_taxonomy' );

function add_album_to_media_taxonomy() {
    $labels = array(
        'name'              => 'Add Album',
        'singular_name'     => 'Album',
        'search_items'      => 'Search Album',
        'edit_item'         => 'Edit Album',
        'update_item'       => 'Update Album',
        'add_new_item'      => 'Add New Album',
        'new_item_name'     => 'New Album',
        'menu_name'         => 'Album',
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'query_var' => true,
        'rewrite' => true,
       	'public' => true,
				'show_in_nav_menus' => true,
				'show_ui' => true,
				'show_admin_column' => true,
				'update_count_callback' => '_update_generic_term_count',
    		'publicly_queryable'=>  true,
    		'has_archive'       =>  true,
    		'rewrite' => array('slug' => 'album', 'with_front' => false)
    );

    register_taxonomy( 'album', 'attachment', $args );
}
add_action( 'init', 'add_album_to_media_taxonomy' );

function add_publicity_to_media_taxonomy() {
    $labels = array(
        'name'              => 'Add Publicity',
        'singular_name'     => 'Publicity',
        'search_items'      => 'Search Publicity',
        'edit_item'         => 'Edit Publicity',
        'update_item'       => 'Update Publicity',
        'add_new_item'      => 'Add New Publicity',
        'new_item_name'     => 'New Publicity',
        'menu_name'         => 'Publicity',
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'query_var' => true,
        'rewrite' => true,
       	'public' => true,
				'show_in_nav_menus' => true,
				'show_ui' => true,
				'show_admin_column' => true,
				'update_count_callback' => '_update_generic_term_count',
				'publicly_queryable'=>  true,
				'has_archive'       =>  true,
				'rewrite' => array('slug' => 'publicity', 'with_front' => false)
    );

    register_taxonomy( 'publicity', 'attachment', $args );
}
add_action( 'init', 'add_publicity_to_media_taxonomy' );

function add_location_to_media_taxonomy() {
    $labels = array(
        'name'              => 'Add Location',
        'singular_name'     => 'Publicity',
        'search_items'      => 'Search Location',
        'edit_item'         => 'Edit Location',
        'update_item'       => 'Update Location',
        'add_new_item'      => 'Add New Location',
        'new_item_name'     => 'New Location',
        'menu_name'         => 'Location',
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'query_var' => true,
        'rewrite' => true,
       	'public' => true,
				'show_in_nav_menus' => true,
				'show_ui' => true,
				'show_admin_column' => true,
				'update_count_callback' => '_update_generic_term_count',
				'publicly_queryable'=>  true,
				'has_archive'       =>  true,
				'rewrite' => array('slug' => 'location', 'with_front' => true)
    );

    register_taxonomy( 'location', 'attachment', $args );
}
add_action( 'init', 'add_location_to_media_taxonomy' );
?>
