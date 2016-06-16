<?php get_header();?>

<div id="templatemo_main">
    <div id="content">
        <?php
        $query = new WP_Query( array('post_type' => 'news' ) );
        while ( $query->have_posts() ) : $query->the_post(); ?>
            <li><a href="<?php  the_permalink(); ?>"><?php the_title();?></a></li>
            <? wp_reset_postdata();
        endwhile; ?>
    </div>
</div> <!-- END of templatemo_main -->

<?php get_footer();?>
