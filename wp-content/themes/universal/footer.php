<div id="templatemo_bottom_wrapper" align="center">
 <h2>Наша продукция:</h2>
    <div id="templatemo_bottom">

		   <div class=" col one_third">

  <div class="bottom_box">
				<h4><span></span>Комбайны</h4>
				  <div class="bottom_box">
               <ul>
                   <?php
                   $query = new WP_Query( array('post_type' => 'kombain' ) );
                   while ( $query->have_posts() ) : $query->the_post();
                       ?><li><a href="<?php  the_permalink(); ?>"><?php the_title();?></a></li>
                       <? wp_reset_postdata();
                   endwhile;
                   ?>
			</div>
  </div>
  </div>
        <div class="col one_third">
        	<h4><span></span>Механизированные крепи</h4>
            <div class="bottom_box">
                <ul >
                    <?php
                    $query = new WP_Query( array('post_type' => 'krep' ) );
                    while ( $query->have_posts() ) : $query->the_post();
                        ?><li><a href="<?php  the_permalink(); ?>"><?php the_title();?></a></li>
                        <? wp_reset_postdata();
                    endwhile;
                    ?>
                </ul>
			</div>
        </div>
  <div class="col one_third">
        	<h4><span></span>Стойки</h4>
            <div class="bottom_box">
               <ul>
                   <?php
                   $query = new WP_Query( array('post_type' => 'stoika' ) );
                   while ( $query->have_posts() ) : $query->the_post();
                       ?><li><a href="<?php  the_permalink(); ?>"><?php the_title();?></a></li>
                       <? wp_reset_postdata();
                   endwhile;
                   ?>
			</div>
        </div>

    	<div class="cleaner"></div>
    </div> <!-- END of tempatemo_bottom -->
</div> <!-- END of tempatemo_bottom_wrapper -->

</body>
</html>