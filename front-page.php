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
            <?php the_content(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>