<?php get_header();?>

<div id="templatemo_main">

	<div id="menu_body">
        <?php
        if (stristr($_SERVER['REQUEST_URI'],'/uslugi') ) {
            wp_nav_menu( array(
                'menu' => 'uslugi',));
        }
        else if (stristr($_SERVER['REQUEST_URI'],'/personal') ){
            wp_nav_menu( array(
            'menu' => 'personal',));
            }
            else if (stristr($_SERVER['REQUEST_URI'],'/about') ){
                    wp_nav_menu(array(
                    'menu' => 'about',));
        }
        ?>
	</div>

	<div id ="content">
		<h1><?php echo get_post_field('post_title', $post->ID); ?></h1>
		<?php echo get_post_field('post_content', $post->ID); ?>
	</div>
    
    <div class="cleaner"></div>
</div> <!-- END of templatemo_main -->

<?php get_footer();?>

