<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package masstlcawards
 */

?>

	</div><!-- #content -->

	 <footer id="colophon" class="site-footer main-container" role="contentinfo">
	
	<div class="inner-content">
		<div class="footer-social-media">
			<img class="massTLC-footer-logo" src="http://www.masstlcawards.com/wp-content/uploads/2016/04/MassTLC_logo.png">
			<a href="https://www.facebook.com/masstlc"><i class="fa fa-facebook social-media-icon"></i></a>
			<a href="https://www.linkedin.com/company/mass-technology-leadership-council"><i class="fa fa-linkedin social-media-icon"></i></a>
			<a href="https://twitter.com/MassTLC"><i class="fa fa-twitter social-media-icon"></i></a>
		</div>
		
		<div class="footer-social-media">
			<h3>LATEST TWEETS</h3>
			<div id="tweets">
				
			</div>
		</div>
		
		<div class="footer-social-media">
			<h3>FLICKR</h3>
			<div id="flickr-image-container">
				
					<?php
						require_once('flickr.php'); 
						$Flickr = new Flickr('11ab26be129cfecfa3242c54a9c6d66c'); 
						$data = $Flickr->search('', 'masstlc', 6); 
						foreach($data['photos']['photo'] as $photo) { 
							// the image URL becomes somthing like 
							// http://farm{farm-id}.static.flickr.com/{server-id}/{id}_{secret}.jpg  
							echo '<a href="https://www.flickr.com/photos/masstlc/'.$photo["id"].'/in/dateposted-public/">
									<div>
										<img src="' . 'http://farm' . $photo["farm"] . '.static.flickr.com/' . $photo["server"] . '/' . $photo["id"] . '_' . $photo["secret"] . '.jpg">
									</div>
								</a>'; 
						} 
					?>

					
			
			</div>
		</div>
	</div>
	<div class="bottom-footer">
			
			<p>
			Copyright 
				<script type="text/javascript">
	  			document.write(new Date().getFullYear());
				</script> 
			MassLTC. All Rights Reserved. Built by a <a href="http://resilientcoders.org" target="_blank">Resilient Coder
			</p></a>
		</div>


	</footer> <!-- #colophon
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
		// IMAGE CONTAINER STUFF
		var images = document.getElementsByClassName("image-holder");

		for (var i = 0; i < images.length; i++)
			{
			  var imageholder =
			      images[i];
			  
			  var element = 
			      imageholder.children[0];
			var height =
			    element.offsetHeight;
			var width = 
			    element.offsetWidth;
			
			if (width > height) {
			 imageholder.className += " wider-than-it-is-taller";
			}

			else if (height > width) {
			 imageholder.className += " higher-than-it-is-wider";
			}
		}
		// TWITTER API
		var tweets = [];
		$.getJSON('/wp-content/themes/massTlcAwards/tweets_json.php?count=30&screen_name=MassTLC', function(data){
			var dataNum = data.length;
			$.each(data, function(index, value){
				tweets.push(value.text);
				if (tweets.length === dataNum) {
				//load all the tweets
					var tweetsContainer = document.getElementById('tweets');
					for(i = 0; i <= 1; i++){
						var tweetDiv = document.createElement('a'),
						tweetContent = document.createTextNode(tweets[i]),
						br = document.createElement('br');

						tweetDiv.setAttribute("href", "https://twitter.com/MassTLC?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor");
						tweetDiv.setAttribute("target", "_blank");
						tweetDiv.appendChild(tweetContent);
						tweetDiv.appendChild(br);
						tweetsContainer.appendChild(tweetDiv);

					}
				}
			});
			

		});	


	</script>

</body>
</html>
