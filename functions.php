<?php

// Ładowanie styli
function load_stylesheets() {
    wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',
        array(), false, 'all' );
    wp_enqueue_style( 'bootstrap');

    wp_register_style( 'style', get_template_directory_uri() . '/style.css',
        array(), false, 'all' );
    wp_enqueue_style( 'style');
}
add_action( 'wp_enqueue_scripts', 'load_stylesheets' );


// Ładowanie jQuery i skryptów
function include_jquery() {
    wp_deregister_script( 'jquery' );

    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.5.1.min.js', '', 1, true );
}
add_action( 'wp_enqueue_scripts', 'include_jquery' );

function loadjs() {
    wp_register_script( 'customjs', get_template_directory_uri() . '/js/script.js', '', 1, true );
    wp_enqueue_script( 'customjs' );
}
add_action( 'wp_enqueue_scripts', 'loadjs' );


// Menu 
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'prosleepy' ),
    'left' => __(  'Left Menu', 'left-menu' )
) );


// Ścieżki
function breadcrumbs($id = null){
    ?>
    <div id="breadcrumbs">
        <a href="<?php bloginfo('url'); ?>">Home</a></span> >
        <?php if(!empty($id)): ?>
        <a href="<?php echo get_permalink( $id ); ?>" ><?php echo get_the_title( $id ); ?></a> >
        <?php endif; ?>
        <span class="breadcrumb_last"><?php the_title(); ?></span>
    </div>
    <?php }


// Widgety
function widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'textdomain' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'widgets_init' );