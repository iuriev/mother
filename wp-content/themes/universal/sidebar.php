<?php
$my_posts = get_posts('category=uslugi');
foreach ($my_posts as $post) :
	setup_postdata($post);
	?>
	<li>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</li>
<?php endforeach; ?>

