<!DOCTYPE HTML>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>"ЧАО"ГМЗ"УНИВЕРСАЛ" - Главная</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <?php include "parts/main_preheader.php";?>

<body id="home">

<?php include "parts/header.php";?>
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

<?php include "parts/footer.php";?>

</body>
</html>