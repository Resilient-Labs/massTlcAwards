<?php
/**
 * Template Name:Blank Page 
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package masstlcawards
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

			
			


				echo "<div class='banner main-container' id='finalist-intro-banner'><div class='inner-content'>";
				echo "<h1>" . get_the_title() . "</h1>";
				echo "</div></div>";
				echo '<div class="main-container" id="blank-page">';
				echo '<div class="inner-content">';
				get_template_part( 'template-parts/content', 'page' );
				echo '</div>';
				echo '</div>';



			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
