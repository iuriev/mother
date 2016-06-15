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
		<?php wp_nav_menu( array(
			'menu' => 'uslugi',));
		?>
	</div>
	<div id ="content">
		<h1><?php echo get_post_field('post_title', $post->ID); ?></h1>
		<?php echo get_post_field('post_content', $post->ID); ?>
	</div>
</div> <!-- END of templatemo_main -->

<?php include "parts/footer.php";?>

</body>
</html>