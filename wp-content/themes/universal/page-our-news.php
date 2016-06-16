<?php get_header();?>

<div id="templatemo_main">

    <div id="content" class = 'news_block'>
        <?php
        $wp_query = null;
        $wp_query = new WP_Query();
        $wp_query->query('showposts=2&post_type=news'.'&paged='.$paged);
        while ($wp_query->have_posts()) : $wp_query->the_post();
        ?>
            <div id="news-block">
                <li class = 'news'>
                    <a href="<?php   echo get_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                </li>
                <a href="<?php   echo get_permalink(); ?>"><?php the_title(); ?></a>

                <?
                the_excerpt();

                ?>
            </div>
        <?php endwhile; ?>
        <nav>
            <?php previous_posts_link('&laquo; Следующая') ?>
            <?php next_posts_link('Предыдущая &raquo;') ?>
        </nav>
    </div>
</div> <!-- END of templatemo_main -->

<?php get_footer();?>
