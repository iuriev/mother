<?php get_header();?>
<div id="templatemo_main">

   <div id = 'current-news'>
        <?php $query = new WP_Query( array('post_type' => 'news','name' => $post->post_name ) );
        while ( $query->have_posts() ) : $query->the_post();
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            }
            the_content();
            wp_reset_postdata();
        endwhile; ?>
   </div>
</div> <!-- END of templatemo_main -->

<?php get_footer();?>
