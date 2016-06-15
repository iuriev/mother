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

    <div id="menu_body">
        <h3>Наша продукция: </h3>
        <?php wp_nav_menu( array(

            'menu' => 'product',));
        ?>
    </div>



    <div id ="content">
            здесь список комбайнов
    </div>


    <div class="cleaner"></div>
</div>


</div> <!-- END of templatemo_main -->

<?php include "parts/footer.php";?>

</body>
</html>