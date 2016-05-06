<?php
/**
 * 
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package masstlcawards
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
	<!-- INTRO BLUE BANNER -->
	<?php
		echo "<div class='banner main-container' id='finalist-intro-banner'><div class='inner-content'>";
		echo "<h1>" . get_the_title() . "</h1>";
		echo "</div></div>";
		the_content();
	?>

	<!-- GENERATE LIST OF AWARDS -->
	<?php
		$descendants = get_categories(array('child_of' => 5));
		$awardsList = array();

		foreach($descendants as $child) {
			if($child->cat_name !== "Category"){
				$query = new WP_Query("category_name=" . $child->cat_name); 
				while($query->have_posts()){
					$query->the_post();
					array_push($awardsList, get_the_title());
					
				}
			}
		}

		
		wp_reset_postdata(); 
	?>

	<?php
	foreach ($awardsList as $award) {
		//Create banner from $award
		echo "<div class='main-container banner'>";
		echo "<div class='inner-content'>";
		echo "<h2>".$award."</h2>";
		echo "</div>";
		echo "</div><!--Close Banner-->";
		echo "<div class='main-container'>";
		echo "<div class='inner-container'>";
		echo "<div class='finalist-container'>";

		
		//loop through finalists
		$args = array(
			'category_name' => 'winners',
			'orderby'       => 'name',
			'order'         => 'ASC'
		);
		$query = new WP_query($args);
		//THE LOOP
		if($query->have_posts()){
			while ($query->have_posts()){
				$query->the_post();
				//if finalists tag === $award -> Display finalist
				$posttags = get_the_tags();
				if ($posttags) {
				  	foreach($posttags as $tag) {
				   		if(strcasecmp($tag->name, $award)==0){

				   			echo '<div class="finalist">';
				   			echo '<div class="finalist-img-container">';
				   			the_post_thumbnail();
				   			echo '</div>';
				   			echo '<h2>';
				   			echo get_the_title();
				   			echo '</h2>';
				   			the_content();
				   			echo '</div>';
				   		}
					}
				}
			}
		}
		wp_reset_postdata();
		echo "</div>";
		echo "</div><!-- close inner-container-->";
		echo "</div><!-- close main-container-->";
		}
	
	?>



	<!-- ORIGIONAL STUFF FROM PAGE.PHP -->
	<?php
			// while ( have_posts() ) : the_post();

			// 	get_template_part( 'template-parts/content', 'page' );

			// 	// If comments are open or we have at least one comment, load up the comment template.
			// 	if ( comments_open() || get_comments_number() ) :
			// 		comments_template();
			// 	endif;

			// endwhile; // End of the loop.
	?>

</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
