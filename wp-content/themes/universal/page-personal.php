<?php get_header();?>

<div id="templatemo_main">
    
    <div id="menu_body">
        <?php wp_nav_menu( array(

            'menu' => 'personal',));
        ?>
    </div>

    <div id="content">
        <?php echo get_post_field('post_content', $post->ID); ?>
    </div>
    <div class="cleaner"></div>
</div> <!-- END of templatemo_main -->

<?php get_footer();?>
