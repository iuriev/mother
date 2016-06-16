<?php get_header();?>

<div id="templatemo_main">
    <div id="menu_body">
        <h3>Наша продукция: </h3>
            <?php wp_nav_menu( array(
                'menu' => 'product',));
            ?>
    </div>
    <div id ="content">

        <?php
        $query = new WP_Query( array('post_type' => 'krep','posts_per_page' => '1' ) );
        while ( $query->have_posts() ) : $query->the_post(); ?>
            <div id="photo">

                <h4><?php $post_type = get_post_type_object( get_post_type($post) );
                    echo $post_type->label ; ?> </h4>
                <a href="<?php   echo get_post_type(); ?>"><?php the_post_thumbnail(); ?></a>
                <?php  wp_reset_postdata();?>
            </div>
            <?php
        endwhile; ?>

        <?php
        $query = new WP_Query( array('post_type' => 'stoika','posts_per_page' => '1' ) );
        while ( $query->have_posts() ) : $query->the_post(); ?>
            <div id="photo">
                <h4><?php $post_type = get_post_type_object( get_post_type($post) );
                    echo $post_type->label ; ?> </h4>
                <a href="<?php   echo get_post_type(); ?>"><?php the_post_thumbnail(); ?></a>
                <?php  wp_reset_postdata();?>
            </div>
            <?php
        endwhile; ?>

        <?php
        $query = new WP_Query( array('post_type' => 'kombain','posts_per_page' => '1' ) );
        while ( $query->have_posts() ) : $query->the_post(); ?>
            <div id="photo">
                <h4><?php $post_type = get_post_type_object( get_post_type($post) );
                    echo $post_type->label ; ?> </h4>
                <a href="<?php   echo get_post_type(); ?>"><?php the_post_thumbnail(); ?></a>
                <?php  wp_reset_postdata();?>
            </div>
            <?php
        endwhile; ?>
        
    </div>
    <div class="cleaner"></div>
</div> <!-- END of templatemo_main -->

<?php get_footer();?>
