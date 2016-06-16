<?php get_header();?>
<div id="templatemo_main">

    <div id="menu_body">
        <h3>Наша продукция: </h3>
        <?php wp_nav_menu( array(
            'menu' => 'product',));
        ?>
    </div>
    <?php $query = new WP_Query( array('post_type' => 'stoika' ) );
        while ( $query->have_posts() ) : $query->the_post();
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            }
            the_content();
            wp_reset_postdata();
        endwhile; ?>
</div> <!-- END of templatemo_main -->

<?php get_footer();?>
