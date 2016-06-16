<!DOCTYPE HTML>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>"ЧАО"ГМЗ"УНИВЕРСАЛ" - Главная</title>
    <meta name="keywords" content="создание сайтов, веб-дизайн, поддержка сайтов" />
    <meta name="description" content="Webstudio - компания по разработке сайтов" />
    <link href="/wp-content/themes/universal/css/templatemo_style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/universal/css/ddsmoothmenu.css" />
    <script type="text/javascript" src="/wp-content/themes/universal/js/jquery-1-4-2.min.js"></script>
    <script type="text/javascript" src="/wp-content/themes/universal/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/wp-content/themes/universal/js/showhide.js"></script>
    <script type="text/JavaScript" src="/wp-content/themes/universal/js/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="/wp-content/themes/universal/js/jquery.min.js"></script>
    <script type="text/javascript" src="/wp-content/themes/universal/js/ddsmoothmenu.js"></script>
    <script type="text/JavaScript" src="/wp-content/themes/universal/js/cloud-carousel.1.0.5.js"></script>
</head>
<div id="templatemo_header_wrapper">
	<div id="site_title"><h1 align="center">ЧАСТНОЕ АКЦИОНЕРНОЕ ОБЩЕСТВО <br>ГОРЛОВСКИЙ МАШИНОСТРОИТЕЛЬНЫЙ ЗАВОД </h1>
	
		<h1 class="name" align="center">«УНИВЕРСАЛ»</h1></div> 
    
     <div id="templatemo_menu" class="ddsmoothmenu">
        <ul>
            <li><a <?php if (stristr($_SERVER['REQUEST_URI'],'index') ||
                                    ($_SERVER['REQUEST_URI'] == '/'))
                    {echo 'class = "active_punkt"';}?> href="<?php echo get_home_url();?>">Главная</a></li>

            <li><a <?php if (stristr($_SERVER['REQUEST_URI'],'about'))
                {echo 'class = "active_punkt"';}?> href="<?php echo (get_home_url()."/about")?>">О нас</a></li>

            <li><a <?php if (stristr($_SERVER['REQUEST_URI'],'/krep')||
                    stristr($_SERVER['REQUEST_URI'],'/product') ||
                    stristr($_SERVER['REQUEST_URI'],'/kombain') ||
                    stristr($_SERVER['REQUEST_URI'], '/stoik'))
                {echo 'class = "active_punkt"';}?> href="<?php echo (get_home_url()."/product")?>">Продукция</a></li>

            <li><a <?php if (stristr($_SERVER['REQUEST_URI'],'uslugi') ||
                 stristr($_SERVER['REQUEST_URI'],'/manufacture') ||
                 stristr($_SERVER['REQUEST_URI'],'/renovation'))
                {echo 'class = "active_punkt"';}?> href="<?php echo (get_home_url()."/uslugi")?>">Услуги</a></li>

			<li><a <?php if (stristr($_SERVER['REQUEST_URI'],'personal') ||
                 stristr($_SERVER['REQUEST_URI'],'/medicine') ||
                 stristr($_SERVER['REQUEST_URI'],'/food'))
                {echo 'class = "active_punkt"';}?> href="<?php echo (get_home_url()."/personal")?>">Сотрудникам</a></li>

            <li><a <?php if (stristr($_SERVER['REQUEST_URI'],'new'))
                {echo 'class = "active_punkt"';}?> href="<?php echo (get_home_url()."/news")?>">Новости</a></li>

            <li><a <?php if (stristr($_SERVER['REQUEST_URI'],'contact'))
                {echo 'class = "active_punkt"';}?> href="<?php echo (get_home_url()."/contact")?>">Контакты</a></li>
        </ul>
        <br style="clear: left" />
    </div> <!-- end of templatemo_menu -->
    <div class="cleaner"></div>
</div>	<!-- END of templatemo_header_wrapper -->