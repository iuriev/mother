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

    <?php
    // Retrieves the stored value from the database
    $meta_url = get_post_meta( get_the_ID(), 'links-news-original', true );
    ?>
    <main>
        <article>
            <?php the_post(); ?>
            <?php the_title(); ?>
            <?php the_content(); ?>
            <div class="copyright-news">
                <?php if( !empty( $meta_url ) ) {
                    echo 'По материалам: <a href="'.$meta_url.'" target="_blank">'.$meta_url.'</a>';
                } ?>
            </div>
        </article>
    </main>


</div> <!-- END of templatemo_main -->

<?php include "parts/footer.php";?>

</body>
</html>