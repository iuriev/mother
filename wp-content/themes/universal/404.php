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

	<section class="error-404 not-found">
		<header class="page-header">
			<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyfifteen' ); ?></h1>
		</header><!-- .page-header -->

		<div class="page-content">
			<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyfifteen' ); ?></p>

			<?php get_search_form(); ?>
		</div><!-- .page-content -->
	</section><!-- .error-404 -->

</div> <!-- END of templatemo_main -->

<?php include "parts/footer.php";?>

</body>
</html>
