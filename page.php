<?php get_header();
the_post();

?>

<div>
	<h1 style="text-align:center; padding:40px;">
		<?php the_title(); ?>
	</h1>
	<div style="text-align:center; padding-bottom:20px;">
		<?php the_content(); ?>
	</div>
</div>


<?php get_footer(); ?>