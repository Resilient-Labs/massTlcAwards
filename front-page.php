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

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!--<h2 id="t-i-o">TWEET IT OUT! #MASSTLCAWARDS</h2> -->
			<?php
			$query = new WP_query('pagename=intro-video');
			//THE LOOP
			if($query->have_posts()){
				while ($query->have_posts()){

					$query->the_post();
					echo "<div id='container-1' class='main-container'><div class='inner-content'>";
					echo "<h1>" . get_the_title() . "</h1>";
					the_content();
					echo "</div></div>";
				}
			}
			wp_reset_postdata();

			?>
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
				echo "<div id='platinum-container2' class='inner-content'>";
				echo "<hr />";
				the_content();
				echo "</div>";
			}
		}
		wp_reset_postdata();
		?>

		<!-- <div id="platinum-container-2">
			<div class="push-l gold-sponsors"></div>
			<div class="gold-sponsors"></div>
			<div class="gold-sponsors"></div>
			<div class="gold-sponsors"></div>
			<div class="gold-sponsors"></div>
		</div> -->
		
	</div>
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

	
	<div id="become-sponsor">
		<div id="become-sponsor-insideContainer">
			<div class="become-sponsor-insideColumns">
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
			</div>

			<div class="become-sponsor-insideColumns right">
			<?php
			$query = new WP_query('pagename=leadership-awards-gala');
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
			</div>

				

			
		</div>
	</div>
		



	<div id="container-3" class="main-container">
		<div class="inner-content">
		<div class="column-5">
			<?php
			$query = new WP_query('pagename=about-the-event');
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

		</div>

		<div class="column-6">
			
			
			<?php
			$query = new WP_query('pagename=reasons-to-purchase-a-table');
			//THE LOOP
			if($query->have_posts()){
				while ($query->have_posts()){
					$query->the_post();

					echo "<h2>" . get_the_title() . "</h2>";
					
					echo "<div class='list-container'>";
					the_content();
					echo "</div>";
				}
			}
			wp_reset_postdata();
			?>
			
			
		</div>
		</div>
	</div>


	<!-- INDIVIDUAL AWARDS -->
	<div id="awards" class="main-container">
		<div class='inner-content'>
			<h2>Individual Awards</h2>
			<hr>
			<?php
			$query = new WP_query('category_name=individual-categories');
			$count = 0;
			//THE LOOP
			if($query->have_posts()){
				while ($query->have_posts()){
					
					if ($count % 3 == 0) {
						echo "<div class='category-container'>";
					}
					$query->the_post();
					echo "<div class='category'>";
					the_post_thumbnail();
					echo "<div><h3>" . get_the_title() . "</h3><p>";
					the_content();
					echo "</p></div></div>";
					$count++;

					if ($count % 3 == 0) {
						echo "</div><!--end category-container-->";
					}

				}
			}
			wp_reset_postdata();
			?>
			<h2>Organizational Categories</h2>
			<hr>
			<?php
			$query = new WP_query('category_name=organizational-categories');
			$count = 0;
			//THE LOOP
			if($query->have_posts()){
				while ($query->have_posts()){
					if ($count % 3 == 0) {
						echo "<div class='category-container'>";
					}

					$query->the_post();
					echo "<div class='category'>";
					the_post_thumbnail();
					echo "<div><h3>" . get_the_title() . "</h3><p>";
					the_content();
					echo "</p></div></div>";
					$count++;
					
					if ($count % 3 == 0) {
						echo "</div><!--end category-container-->";
					}
				}
			}
			wp_reset_postdata();
			?>
			<h2>Innovation Categories</h2>
			<hr>
			<?php
			$query = new WP_query('category_name=innovation-categories');
			$count = 0;
			//THE LOOP
			if($query->have_posts()){
				while ($query->have_posts()){
					if ($count % 3 == 0) {
						echo "<div class='category-container'>";
					}

					$query->the_post();
					echo "<div class='category'>";
					the_post_thumbnail();
					echo "<div><h3>" . get_the_title() . "</h3><p>";
					the_content();
					echo "</p></div></div>";
					$count++;

					if ($count % 3 == 0) {
						echo "</div><!--end category-container-->";
					}
				}
			}
			wp_reset_postdata();
			?>
		</div><!-- END INNER CONTENT -->

	</div>

		<!-- SAVE THE DATES -->
		<div id="dates" class="main-container">
			<div class="inner-content">
			<h2 id="saveTheDates">Save The Dates</h2><hr class='white' />
				<div class="dates-containers">
					<h5 class="dates-h5-style"><span><i class="fa fa-calendar-o"></i></span> April 18 - May 20</h5>
					<p class="dates-p-style"><span><i class="fa fa-trophy"></i></span> Awards Nominations Open</p>
					<p class="dates-p-style"><span><i class="fa fa-map-marker"></i></span> MassTLCAwards.com</p>
				</div>
				<div class="dates-containers">
					<h5 class="dates-h5-style"><span><i class="fa fa-calendar-o"></i></span> June 30th</h5>
					<p class="dates-p-style"><span><i class="fa fa-trophy"></i></span> Judging Night</p>
					<p class="dates-p-style"><span><i class="fa fa-map-marker"></i></span> Rocket Software, Waltham</p>
				</div>
				<div class="dates-containers">
					<h5 class="dates-h5-style"><span><i class="fa fa-calendar-o"></i></span> July 31st</h5>
					<p class="dates-p-style"><span><i class="fa fa-trophy"></i></span>Summer Reception</p>
					<p class="dates-p-style"><span><i class="fa fa-map-marker"></i></span> Microsoft NERD, Cambridge</p>
				</div>
				<div class="dates-containers">
					<h5 class="dates-h5-style"><span><i class="fa fa-calendar-o"></i></span> June 30th</h5>
					<p class="dates-p-style"><span><i class="fa fa-trophy"></i></span> Awards Gala</p>
					<p class="dates-p-style"><span><i class="fa fa-map-marker"></i></span> Seaport World Trade Center</p>
				</div>
			</div>
		</div>
		
		<div id="msg" class="main-container">
				<div class="inner-content">
					<!-- <h6 class="fill-info">First Name*</h6> -->
					<textarea class="fill-textarea" placeholder="Name"></textarea>
					<!-- <h6 class="fill-info">Email*</h6> -->
					<textarea class="fill-textarea" placeholder="Email"></textarea>
					<textarea id="message" placeholder="How can we help you?"></textarea>
					<a class="button" id="send-msg">Send Message</a>
				</div>
		</div>
		



		
		<div class="bottom-footer">
			
			<p>Follow Us on social media: <a href="https://www.facebook.com/masstlc" target="_blank">Facebook</a> | <a href="https://twitter.com/MassTLC" target="_blank">Twitter</a> | <a href="https://www.linkedin.com/company/mass-technology-leadership-council" target="_blank">LinkedIn</a><br/>
			Copyright <script type="text/javascript">
  			document.write(new Date().getFullYear());
			</script> 
			MassLTC. All Rights Reserved. Built by a <a href="http://resilientcoders.org" target="_blank">Resilient Coder</p></a>
		</div>







			
		


<script>
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
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});


</script>

<script>
	$(document).ready(function() {
    var contentPlacement = $('#header').position().top + $('#header').height();
    $('#content').css('margin-top',contentPlacement);
});
</script>
	
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
