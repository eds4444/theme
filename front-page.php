<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme
 */

get_header();
?>
   
  <div id="primery" class="content-area">
	<main id="main" class="site-main">

	<h1>Телефон компании: <?php $option_value = fw_get_db_settings_option('phone-number');
	   echo esc_html($option_value); ?>
	</h1>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'front-page' );

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
  </div>

<?php
//get_footer();
