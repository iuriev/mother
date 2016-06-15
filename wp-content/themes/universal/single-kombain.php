<!DOCTYPE HTML>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>"ЧАО"ГМЗ"УНИВЕРСАЛ" - Главная</title>
    <meta name="keywords" content="создание сайтов, веб-дизайн, поддержка сайтов" />
    <meta name="description" content="Webstudio - компания по разработке сайтов" />

    <?php include "parts/main_preheader.php";?>

<body id="home">

<?php include "parts/header.php";?>
<div id="templatemo_main">



        <?php

        $query = new WP_Query( array('post_type' => 'kombain' ) );
        while ( $query->have_posts() ) : $query->the_post();
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            }
            the_content();
            wp_reset_postdata();
        endwhile;

        ?>
   
</div> <!-- END of templatemo_main -->


    <?php include "parts/footer.php";?>

</body>
</html>
