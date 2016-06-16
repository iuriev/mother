<?php get_header();?>
<div id="templatemo_main">

    <div id="menu_body">
        <h3>Наша продукция: </h3>
        <?php wp_nav_menu( array(
            'menu' => 'product',));
        ?>
    </div>
    
    <div id ="content">
            Здесь список стоек
    </div>
    
    <div class="cleaner"></div>

</div> <!-- END of templatemo_main -->

<?php get_footer();?>
