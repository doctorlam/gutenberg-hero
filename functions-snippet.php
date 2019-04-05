function chrislamdesign_register_blocks() {
	if( ! function_exists('acf_register_block') )
		return;
	acf_register_block( array(
		'name'			=> 'hero',
		'title'			=> __( 'Hero', 'heroblock' ),
		'render_template'	=> 'partials/gutenberg-hero.php',
		'category'		=> 'custom-blocks',
		'icon'			=> 'dashicons-id',
		'mode'			=> 'edit',
		'keywords'		=> array( 'hero', 'header' )
	));
}
add_action('acf/init', 'chrislamdesign_register_blocks' );


function chrislamdesign_category( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'custom-blocks',
				'title' => __( 'Custom Blocks', 'custom-blocks' ),
			),
		)
	);
}
add_filter( 'block_categories', 'chrislamdesign_category', 10, 2);