<?php

function register_blocks_categories( $categories ) {

$categories = array_merge( $categories, array( array(
        'slug' => 'impactforce',
        'title' => __( 'ImpactForce' )
    ) ) );

    
    return $categories;
}
add_action( version_compare('5.8', get_bloginfo('version'), '<=' ) ? 'block_categories_all' : 'block_categories', 'register_blocks_categories');

function custom_acf_init() {

    $blocksArray = array(
        'Hero',
        'Idea',
        'Agenda',
        'Speakers',
        'Art',
        'Partners'

    );
    // check function exists
    if( function_exists('acf_register_block') ) {

        foreach($blocksArray as $blk){
          $str_title = sanitize_file_name(strtolower($blk));

          acf_register_block(array(
            'name' => sanitize_file_name(strtolower($blk)),
            'title' => $blk,
            'description' => $blk,
            'render_callback' => 'custom_acf_block_render_callback',
            'category' => 'impactforce',
            'icon' => 'block-default',
            'keywords' => array('builder', 'revo'),
            'anchor' => true,
            'reusable' => false,
            'multiple' => false,
            'inserter' => true,
            'html' => false,
            'className' => true,
            'customClassName' => true,
            'mode' => 'edit',
            'supports' => array('mode' => false),
          ));

        }

    }
}
add_action('acf/init', 'custom_acf_init');

function custom_acf_block_render_callback($block) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "partials/block" folder
	if(file_exists(STYLESHEETPATH . "/template-parts/blocks/block-{$slug}.php")) {
		include(STYLESHEETPATH . "/template-parts/blocks/block-{$slug}.php");
    }
}



