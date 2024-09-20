<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package abilito
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="bg-mycol1 mt-5 px-5 py-5">

			<?php
				$args = array(
					'post_type' => 'footer',
					'post_per_page' => 1,
				);

				$custom_post = new WP_Query($args);
				
				while ($custom_post->have_posts()) : $custom_post->the_post();    
			?>

			<div class="row align-items-center ">
				<div class="pb-3 pb-md-0 col-12 col-md-4 text-md-start text-center">
					<?php the_custom_logo(); ?>
				</div>
				<div class="pt-3 pt-md-0 col-12 col-md-4 text-center img-decorative-footer">
					<?php the_post_thumbnail(); ?>
				</div>
				<div class="pt-5 pb-2 pt-md-0 pb-md-0 col-12 col-md-4 text-center text-md-end">
					<p>
						<?php the_field("placeholder_per_info") ?>
					</p>
				</div>

			</div>

			<?php
            	endwhile;
            	wp_reset_postdata();
        	?>

		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
