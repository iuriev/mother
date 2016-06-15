<div id="templatemo_header_wrapper">
	<div id="site_title"><h1 align="center">ЧАСТНОЕ АКЦИОНЕРНОЕ ОБЩЕСТВО <br>ГОРЛОВСКИЙ МАШИНОСТРОИТЕЛЬНЫЙ ЗАВОД </h1>
	
		<h1 class="name" align="center">«УНИВЕРСАЛ»</h1></div> 
    
     <div id="templatemo_menu" class="ddsmoothmenu">
        <ul>
            <li><a <?php if (stristr($_SERVER['REQUEST_URI'],'index') || ($_SERVER['REQUEST_URI'] == '/')){echo 'class = "active_punkt"';}?> href="<?php echo get_home_url();?>">Главная</a></li>
            <li><a <?php if (stristr($_SERVER['REQUEST_URI'],'about')){echo 'class = "active_punkt"';}?> href="<?php echo (get_home_url()."/about")?>">О нас</a></li>
            <li><a <?php if (stristr($_SERVER['REQUEST_URI'],'product')){echo 'class = "active_punkt"';}?> href="<?php echo (get_home_url()."/product")?>">Продукция</a></li>
            <li><a <?php if (stristr($_SERVER['REQUEST_URI'],'uslugi')){echo 'class = "active_punkt"';}?> href="<?php echo (get_home_url()."/uslugi")?>">Услуги</a></li>
			<li><a <?php if (stristr($_SERVER['REQUEST_URI'],'personal')){echo 'class = "active_punkt"';}?> href="<?php echo (get_home_url()."/personal")?>">Сотрудникам</a></li>
            <li><a <?php if (stristr($_SERVER['REQUEST_URI'],'news')){echo 'class = "active_punkt"';}?> href="<?php echo (get_home_url()."/news")?>">Новости</a></li>
            <li><a <?php if (stristr($_SERVER['REQUEST_URI'],'contact')){echo 'class = "active_punkt"';}?> href="<?php echo (get_home_url()."/contact")?>">Контакты</a></li>
        </ul>
        <br style="clear: left" />
    </div> <!-- end of templatemo_menu -->
    <div class="cleaner"></div>
</div>	<!-- END of templatemo_header_wrapper -->