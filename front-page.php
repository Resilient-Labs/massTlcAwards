<?php
/**
 * The front page of the site. Should show up automatically
 *
 *
 */

get_header(); ?>
<!-- CODE FROM https://wordpress.org/support/topic/remove-p-tags-when-outputting-content -->
<?php remove_filter ('the_content',  'wpautop'); ?>
<?php the_content(__('Read more'));?>
<iframe id="iframe" src="http://google.com"></iframe>
<div id="modal"></div>
<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">
	<?php
		$query = new WP_query('pagename=intro-video');
		//THE LOOP
		if($query->have_posts()){
			while ($query->have_posts()){

				$query->the_post();
				echo "<div id='container-1'>";
				echo "<a href='#awards' class='banner main-container' id='intro-banner'><div class='inner-content'>";
				echo "<h1>" . get_the_title() . "</h1>";
				echo "</div></a>";
				the_content();
				echo "</div>";
			}
		}
		wp_reset_postdata();
	?>

	
	

			<?php 
				$descendants = get_categories(array('child_of' => 0));
				if ( !empty($descendants) ) {

				?>
				<!-- AWARDS -->
				<a href="#awards" class="banner main-container">
					<div class="inner-container">
						<h2>Award Categories</h2>
					</div>
				</a>

				<!-- INDIVIDUAL WINNERS -->
				<div id="awards" class="main-container">
				<div class="inner-content">
				<?php
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
						$count = 0;
						$isEnded = false;
							if($child->cat_name !== "Category"){
							echo '<h2>' . $child->cat_name . '</h2><hr>';
							$query = new WP_Query("category_name=" . $child->cat_name . "&orderby=title&order=asc"); 
							// $query->set( 'orderby', 'title' );
							// $query->set( 'order', 'ASC' );
							echo "<div class='category-container'>\n";
								while($query->have_posts()){
									$query->the_post();
									$surveyLink = 7 + strpos($post->post_content, "-->");
									$surveyLinkContent = '"' . substr($post->post_content,$surveyLink) . '"';
									if (!empty($surveyLinkContent)) {
										
										echo "<div class='category' onClick = 'loadSurvey(". $surveyLinkContent .");'>";
										
									}else{
										echo "<div class='category'>";
									}
									the_post_thumbnail();
									echo "<h3>" . get_the_title() . "</h3>";
									the_content("", false);
									echo "</div>";
									
									$count++;
							
								}
							echo "</div><!--end category-container-->";
						}
					}
					echo "</div><!-- END INNER CONTENT --></div>";
				}

				wp_reset_postdata(); 
			?>
			
			
	
	<!-- SAVE THE DATES -->
	<div id="dates" class="main-container">
		<div class="inner-content">
		<h2 id="saveTheDates">Save The Dates</h2><hr class='white' />
		<?php 
			$args = array(
					'category_name' => 'save-the-date',
					'orderby'       => 'date',
					'order'         => 'ASC'
			);
			$query = new WP_query($args);
			//THE LOOP
			if($query->have_posts()){
				while ($query->have_posts()){

					$query->the_post();
					echo "<div class='dates-containers'>";
					echo "<h5 class='dates-h5-style'><span><i class='fa fa-calendar-o'></i></span> ";
					the_content("", false);
					echo "</h5>";
					echo "<p class='dates-p-style'><span><i class='fa fa-trophy'></i></span> ";
					echo get_the_title();
					echo "</p>";
					$moreText = 7 + strpos($post->post_content, "-->");
					$dateLocation = substr($post->post_content,$moreText);
					if (strlen($dateLocation) > 7) {
						//MAKES SURE WE HIDE THE LOCATION ICON IF THERES NO LOCATION
						echo "<p class='dates-p-style'><span><i class='fa fa-map-marker'></i></span> ";
						echo $dateLocation;
						echo "</p>";
					}
					echo "</div><!--END DATES CONTAINERS-->";
				}
			}
			wp_reset_postdata();
		?>
		</div>
	</div>
	
	<!-- SPONSORS -->
	<div id="sponsors" class="main-container">
		<?php
		$query = new WP_query('pagename=platinum-sponsors');
		//THE LOOP
		if($query->have_posts()){
			while ($query->have_posts()){
				$query->the_post();
				echo "<h2>" . get_the_title() . "</h2>";
				
				echo "<div id='platinum-container' class='inner-content'>";
				echo "<hr />";	
				the_content();
				echo "</div>";
			}
		}
		wp_reset_postdata();
		?>

		
		<?php
		$query = new WP_query('pagename=gold-sponsors');
		//THE LOOP
		if($query->have_posts()){
			while ($query->have_posts()){
				$query->the_post();
				echo "<h2>" . get_the_title() . "</h2>";
				echo "<div id='gold-container' class='inner-content'>";
				echo "<hr />";
				the_content();
				echo "</div>";
			}
		}
		wp_reset_postdata();
		?>
		<?php
		$query = new WP_query('pagename=silver-sponsors');
		//THE LOOP
		if($query->have_posts()){
			while ($query->have_posts()){
				$query->the_post();
				echo "<h2>" . get_the_title() . "</h2>";
				echo "<div id='silver-container' class='inner-content'>";
				echo "<hr />";
				the_content();
				echo "</div>";
			}
		}
		wp_reset_postdata();
		?>
	</div><!-- END SPONSORS -->
	
	<!-- BECOME A SPONSOR -->
	<div id="become-sponsor">
		<div id="become-sponsor-insideContainer" class="inner-content">
			<!-- <div class="become-sponsor-insideColumns"> -->
			<?php
			$query = new WP_query('pagename=sponsorship-opportunities');
			//THE LOOP
			if($query->have_posts()){
				while ($query->have_posts()){
					$query->the_post();

					echo "<h2>" . get_the_title() . "</h2>";
					echo "<p>";
					the_content();
					echo "</p>";
					
				}
			}
			wp_reset_postdata();
			?>
			<!-- </div> -->

			<!-- <div class="become-sponsor-insideColumns right">
			<?php
			// $query = new WP_query('pagename=leadership-awards-gala');
			// //THE LOOP
			// if($query->have_posts()){
			// 	while ($query->have_posts()){
			// 		$query->the_post();

			// 		echo "<h2>" . get_the_title() . "</h2>";
					
			// 		echo "<p>";
			// 		the_content();
			// 		echo "</p>";
					
			// 	}
			// }
			// wp_reset_postdata();
			?>
			</div> -->

				

			
		</div>
	</div>
		


	<!-- ABOUT THE GALA SECTION -->
	<!-- <div id="container-3" class="main-container">
		<div class="inner-content">
		<div class="column-5">
			<?php
		// 	$query = new WP_query('pagename=about-the-event');
		// 	//THE LOOP
		// 	if($query->have_posts()){
		// 		while ($query->have_posts()){
		// 			$query->the_post();

		// 			echo "<h2>" . get_the_title() . "</h2>";
		// 			echo "<p>";
					
		// 			the_content();
		// 			echo "</p>";
		// 		}
		// 	}
		// 	wp_reset_postdata();
		// 	?>

		// </div>

		// <div class="column-6">
			
			
		// 	<?php
		// 	$query = new WP_query('pagename=reasons-to-purchase-a-table');
		// 	//THE LOOP
		// 	if($query->have_posts()){
		// 		while ($query->have_posts()){
		// 			$query->the_post();

		// 			echo "<h2>" . get_the_title() . "</h2>";
					
		// 			echo "<div class='list-container'>";
		// 			the_content();
		// 			echo "</div>";
		// 		}
		// 	}
		// 	wp_reset_postdata();
			?>
			
			
		</div>
		</div>
	</div> -->
	

	
	<!-- CONTACT FORM -->
	<?php
		$query = new WP_query('pagename=contact-us');
		//THE LOOP
		if($query->have_posts()){
		echo'<div id="msg" class="main-container">';
		echo'<div class="inner-content">';
		while ($query->have_posts()){
			$query->the_post();
			the_content();
		}
		echo "</div></div>";
	
		}//CLOSE IF STATEMENT
			wp_reset_postdata();
		?>


	<!-- 	ABOUT SECTION-->	
	<div id="container-2" class="main-container">
			<i id="big-trophy" class="fa fa-trophy"></i>
			<?php
			$query = new WP_query('pagename=about');
			//THE LOOP
			if($query->have_posts()){
				while ($query->have_posts()){
					$query->the_post();
					echo "<h2>" . get_the_title() . "</h2>";
					echo "<div class='column-1'><div class='inner-content'>";
					echo "<hr />";
					echo "<p>";
					the_content();
					echo "</p>";
					echo "</div></div>";
				}
			}
			wp_reset_postdata();
			?>
	</div>
		
<script>
var iframe = document.getElementById("iframe"),
	modal = document.getElementById("modal");
//load the survey iframe
var loadSurvey = function($src){
	
	iframe.classList.add("open");
	modal.classList.add("open");
	iframe.src = $src;
}
modal.addEventListener("click", function(){
	iframe.classList.remove("open");
	modal.classList.remove("open");
	iframe.src = "";
})
//Clean up those silly wp images
var images = document.getElementsByClassName("alignnone");
for(i = 0; i<images.length; i++){
	images[i].removeAttribute("height");
	images[i].removeAttribute("width");
};
	$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top - 104
        }, 1000);
        return false;
      }
    }
  });
});


</script>


	
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
