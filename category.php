<?php get_header(); ?>

<div class="doc-frame">
    
    <div class="page-row">
        
        <div class="left-menu">
                    	
            <?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
                <ul id="sidebar">
                    <?php dynamic_sidebar('sidebar-1'); ?>
                </ul>
            <?php } ?>

            <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'left'
                    ) );
            ?></div>
    
        <div class="page">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php endwhile; else : ?>
	        <p><?php esc_html_e( 'Przepraszamy, żaden post nie spełnia Twoich kryteriów.' ); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>