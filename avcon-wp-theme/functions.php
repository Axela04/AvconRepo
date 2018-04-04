<?php
/**
 * avcon functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package avcon
 */

if ( ! function_exists( 'avcon_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function avcon_setup() {

		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary Menu Navigation', 'avcon' ),
			'footer1' => esc_html__( 'Footer 1 Menu Navigation', 'avcon' ),
			'footer2' => esc_html__( 'Footer 2 Menu Navigation', 'avcon' ),
		) );

		// add_image_size( 'masonry_lg', 820, 480, array( 'left', 'top' ) ); // Hard crop left top
		// add_image_size( 'masonry_lg_h', 410, 480, array( 'left', 'top' ) ); // Hard crop left top
		// add_image_size( 'masonry_sm', 410, 240, array( 'left', 'top' ) ); // Hard crop left top
	}

endif;
add_action( 'after_setup_theme', 'avcon_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function avcon_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'avcon_content_width', 640 );
}
add_action( 'after_setup_theme', 'avcon_content_width', 0 );


function avcon_scripts() {
	wp_enqueue_style( 'avcon-style', get_stylesheet_uri() );

	if ( is_page_template( 'projects.php' ) || is_category() ) {

		wp_enqueue_script( 'api', get_template_directory_uri() . '/assets/js/api.js', array( 'jquery' ), '123' );
		wp_enqueue_script( 'columns', get_template_directory_uri() . '/assets/js/columns.js', array( 'jquery' ), '123' );
		wp_enqueue_script( 'modulo', get_template_directory_uri() . '/assets/js/modulo.js', array( 'jquery' ), '123' );
		wp_enqueue_script( 'imagesloaded', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.min.js', array( 'jquery' ), '123' );
		wp_enqueue_script( 'smartresize', 'http://cdn.jsdelivr.net/jquery.smartresize/0.1/jquery.throttledresize.js', array( 'jquery' ), '123' );
		wp_enqueue_script( 'modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', array( 'jquery' ), '123' );
		wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.js', array( 'jquery' ), '123' );
	} 

	wp_enqueue_script( 'mewnu', get_template_directory_uri() . '/assets/js/menu.js', array( 'jquery' ), '123' );


	if ( is_page_template( 'contact.php' )) {
		wp_enqueue_script( 'validate', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js', array( 'jquery' ), '123' );
		wp_enqueue_script( 'contact', get_template_directory_uri() . '/assets/js/contact.js', array( 'jquery' ), '123' );
	}


	if ( is_page_template( 'carrers.php' )) {
		wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array( 'jquery' ), '123' );
		wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array( 'jquery' ), '123' );
	}


		wp_enqueue_style( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css' );
		wp_enqueue_script( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array( 'jquery' ), '123' );
		wp_enqueue_script( 'mainsliders', get_template_directory_uri() . '/assets/js/sliders.js', array( 'jquery' ), '123' );
	// wp_localize_script( 'avcon-script', 'screenReaderText', array(
	// 	'expand'   => '<span class="screen-reader-text">' . __( 'expand child menu', 'avcon' ) . '</span>',
	// 	'collapse' => '<span class="screen-reader-text">' . __( 'collapse child menu', 'avcon' ) . '</span>',
	// ) );
}
add_action( 'wp_enqueue_scripts', 'avcon_scripts' );

// Create Custom post type Project

// Register Custom Post Type
function avcon_post_project() {

	$labels = array(
		'name'                  => _x( 'Projects', 'Post Type General Name', 'avcon' ),
		'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'avcon' ),
		'menu_name'             => __( 'Projects', 'avcon' ),
		'name_admin_bar'        => __( 'Project', 'avcon' ),
		'archives'              => __( 'Projects Archives', 'avcon' ),
		'attributes'            => __( 'Projects Attributes', 'avcon' ),
		'parent_item_colon'     => __( 'Project:', 'avcon' ),
		'all_items'             => __( 'All Projects', 'avcon' ),
		'add_new_item'          => __( 'Add New Project', 'avcon' ),
		'add_new'               => __( 'Add Project', 'avcon' ),
		'new_item'              => __( 'New Project', 'avcon' ),
		'edit_item'             => __( 'Edit Project', 'avcon' ),
		'update_item'           => __( 'Update Project', 'avcon' ),
		'view_item'             => __( 'View Project', 'avcon' ),
		'view_items'            => __( 'View Projects', 'avcon' ),
		'search_items'          => __( 'Search Project', 'avcon' ),
		'not_found'             => __( 'Project Not found', 'avcon' ),
		'not_found_in_trash'    => __( 'Projects Not found in Trash', 'avcon' ),
		'featured_image'        => __( 'Project Featured Image', 'avcon' ),
		'set_featured_image'    => __( 'Set Project featured image', 'avcon' ),
		'remove_featured_image' => __( 'Remove Project featured image', 'avcon' ),
		'use_featured_image'    => __( 'Use as Project featured image', 'avcon' ),
		'insert_into_item'      => __( 'Insert into item', 'avcon' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'avcon' ),
		'items_list'            => __( 'Projects list', 'avcon' ),
		'items_list_navigation' => __( 'Projects list navigation', 'avcon' ),
		'filter_items_list'     => __( 'Filter Projects list', 'avcon' ),
	);
	$args = array(
		'label'                 => __( 'Project', 'avcon' ),
		'description'           => __( 'Avcon Projects', 'avcon' ),
		'labels'                => $labels,
		'supports'              => array( 'title','editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-book-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'project', $args );

}
add_action( 'init', 'avcon_post_project', 0 );


// End of create custom post Project

// Project Custom fields
require get_template_directory() . '/application/meta-box/meta-box.php'; // Metabox
// End of Project Custom fields

add_action( 'rwmb_meta_boxes', 'avcon_project_meta_boxes' );

function avcon_project_meta_boxes( $meta_boxes ) {
	
	// 1st meta box
	$meta_boxes[] = array(

		'id'     => 'projectdet',
		'title'  => __( 'Project Details', 'avcon' ),
		'post_types' => 'project',
		'fields' => array(

			array(
				'name' => __( 'Project Location', 'avcon' ),
				'id'   => 'location',
				'type' => 'text',
			),

			array(
				'name' => __( 'Anticipated Completion', 'avcon' ),
				'id'   => 'completion',
				'type' => 'date',
			),

			array(
				'name' => __( 'Project Area', 'avcon' ),
				'id'   => 'area',
				'type' => 'text',
			),

			array(
				'name' => __( 'Service', 'avcon' ),
				'id'   => 'service',
				'type' => 'text',
			),

			array(
				'name' => __( "Avcon's solution & work", 'avcon' ),
				'id'   => 'solution',
				'type' => 'wysiwyg',
			),

			array(
				'name' => __( "This text can be as bullet points or some brief", 'avcon' ),
				'id'   => 'points',
				'type' => 'text',
				'clone'=> true
			),

		),
	);
	$meta_boxes[] = array(

		'id'     => 'projectdet',
		'title'  => __( 'Job Details', 'avcon' ),
		'post_types' => 'carrer',
		'fields' => array(

			array(
				'name' => __( 'Essential Job Functions', 'avcon' ),
				'id'   => 'essential',
				'type' => 'text',
			),

			array(
				'name' => __( "Type", 'avcon' ),
				'id'   => 'type',
				'type' => 'text',
			
			),

			array(
				'name' => __( "What's Required", 'avcon' ),
				'id'   => 'required',
				'type' => 'text',
			),


			array(
				'name' => __( "Qualifications", 'avcon' ),
				'id'   => 'qualifications',
				'type' => 'text',
				
			),

		),
	);

	$meta_boxes[] = array(

		'id'     => 'projectgallery',
		'title'  => __( 'Project Gallery', 'avcon' ),
		'post_types' => 'project',
		'fields' => array(

			array(
				'name' => __( 'Project has photo gallery', 'avcon' ),
				'id'   => 'activegallery',
				'type' => 'checkbox',
			),

			array(
				'name' => __( 'Project photo gallery', 'avcon' ),
				'id'   => 'pgallery',
				'type' => 'image_advanced',
			),

		),
	);


	$meta_boxes[] = array(

		'id'     => 'projectmnsph',
		'title'  => __( 'Project Masonry Layout', 'avcon' ),
		'post_types' => 'project',
		'fields' => array(

			array(
			    'name'    => 'Project Box Style',
			    'id'      => 'radio',
			    'type'    => 'radio',
			    // Array of 'value' => 'Label' pairs for radio options.
			    // Note: the 'value' is stored in meta field, not the 'Label'
			    'options' => array(

			        1 => 'Default ( Project Masonry Image need to be 410x240)',
			        2 => 'Double Width ( Project Masonry Image need to be 820x480)',
			        3 => 'Double Height ( Project Masonry Image need to be 410x480)',
			    ),
			    // Show choices in the same line?
			    'inline' => false,
			),

		),
	);




		$meta_boxes[] = array(

			'id'     => 'cont2',
			'title'  => __( 'Page Content', 'avcon' ),
			'post_types' => 'page',
			'fields' => array(

				array(
				    'name'    => 'MECHANICAL',
				    'id'      => 't1',
				    'type'    => 'text',
				),
				array(
				    'name'    => 'ELECTRICAL',
				    'id'      => 't2',
				    'type'    => 'text',
				),

				array(
				    'name'    => 'PLUMBING',
				    'id'      => 't3',
				    'type'    => 'text',
				),
				array(
				    'name'    => 'FIRE PROTECTION & SAFETY',
				    'id'      => 't4',
				    'type'    => 'text',
				),
				array(
				    'name'    => 'SUSTAINABLE DESIGN',
				    'id'      => 't5',
				    'type'    => 'text',
				),
				array(
				    'name'    => 'OTHER',
				    'id'      => 't6',
				    'type'    => 'text',
				),
			),
		);



	// Other meta boxes go here
	return $meta_boxes;
}

// Carrers

function avcon_post_carrers() {

	$labels = array(
		'name'                  => _x( 'Careers', 'Post Type General Name', 'avcon' ),
		'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'avcon' ),
		'menu_name'             => __( 'Careers', 'avcon' ),
		'name_admin_bar'        => __( 'Project', 'avcon' ),
		'archives'              => __( 'Careers Archives', 'avcon' ),
		'attributes'            => __( 'Careers Attributes', 'avcon' ),
		'parent_item_colon'     => __( 'Career:', 'avcon' ),
		'all_items'             => __( 'All Careers', 'avcon' ),
		'add_new_item'          => __( 'Add New Career', 'avcon' ),
		'add_new'               => __( 'Add Career', 'avcon' ),
		'new_item'              => __( 'New Career', 'avcon' ),
		'edit_item'             => __( 'Edit Career', 'avcon' ),
		'update_item'           => __( 'Update Career', 'avcon' ),
		'view_item'             => __( 'View Career', 'avcon' ),
		'view_items'            => __( 'View Careers', 'avcon' ),
		'search_items'          => __( 'Search Career', 'avcon' ),
		'not_found'             => __( 'Career Not found', 'avcon' ),
		'not_found_in_trash'    => __( 'Careers Not found in Trash', 'avcon' ),
		'featured_image'        => __( 'Career Featured Image', 'avcon' ),
		'set_featured_image'    => __( 'Set Career featured image', 'avcon' ),
		'remove_featured_image' => __( 'Remove Career featured image', 'avcon' ),
		'use_featured_image'    => __( 'Use as Career featured image', 'avcon' ),
		'insert_into_item'      => __( 'Insert into item', 'avcon' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'avcon' ),
		'items_list'            => __( 'Careers list', 'avcon' ),
		'items_list_navigation' => __( 'Careers list navigation', 'avcon' ),
		'filter_items_list'     => __( 'Filter Careers list', 'avcon' ),
	);
	$args = array(
		'label'                 => __( 'Career', 'avcon' ),
		'description'           => __( 'Avcon Careers', 'avcon' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-businessman',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'carrer', $args );

}
add_action( 'init', 'avcon_post_carrers', 0 );


function get_project_categories(){

	global $post;
	$categories = get_the_category($post->ID);

	foreach ($categories as $cat) {

		echo $cat->slug;
		
	}

}


// End of get Project details