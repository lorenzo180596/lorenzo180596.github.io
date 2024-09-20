<?php
/**
 * The template for displaying the "Crea il tuo account" page.
 *
 * @package abilito
 */

get_header();
?>


<main class="pt-5">
	<section class="pt-5">

	<?php
		while ( have_posts() ) : the_post();
	?>

	<div class="py-5 mx-3 mx-big mt-sm-5 bg-mycol2 rounded-big ">
		<h2 class="mx-4 mx-sm-5 text-center"><?php the_title();?></h2>
		<div class="text-center logo-registration">
			<?php the_custom_logo(); ?>
		</div>	
		<?php the_content(); ?>
	</div>

	<?php
		endwhile; 
	?>

	</section>
</main>

<?php
get_footer();
