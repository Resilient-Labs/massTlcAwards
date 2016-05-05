<?php
/**
 * Template Name: Finalists
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package masstlcawards
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<!-- GENERATE LIST OF AWARDS -->
		<?php
		$descendants = get_categories(array('child_of' => 0));
		$awardsList = array();


			// LOOP THROUGH DESCENDENTS IN DESIRED ORDER
			// CATEGORY IDS:
			// 0: Best use of technology
			// 1: Category
			// 2: Individual Categories
			// 3: Innovations
			// 4: Organizational Categories

		$order = array(2, 4, 3, 0);
		for($i = 0; $i < count($order); $i++) {
			$child = $descendants[$order[$i]];
			if($child->cat_name !== "Category"){
				$query = new WP_Query("category_name=" . $child->cat_name . "&orderby=title&order=asc"); 
				while($query->have_posts()){
					$query->the_post();
					// echo "<p>".get_the_title()."</p>";
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
		//loop through finalists
		// $args = array(
		// 	'category_name' => 'finalists',
		// 	'orderby'       => 'name',
		// 	'order'         => 'ASC'
		// );
		// $query = new WP_query($args);
		// //THE LOOP
		// if($query->have_posts()){
		// 	while ($query->have_posts()){
		// 	//if finalists tag === $award -> Display finalist
		// 	 echo get_the_tags();
		// 	}
		// }
		// wp_reset_postdata();
		// }
	
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
