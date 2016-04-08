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
			<img class="MassTLC-footer-logo" src="http://www.masstlcawards.com/wp-content/uploads/2016/04/MassTLC_logo.png">
			<a href="https://www.facebook.com/masstlc"><i class="fa fa-facebook social-media-icon"></i></a>
			<a href="https://www.linkedin.com/company/mass-technology-leadership-council"><i class="fa fa-linkedin social-media-icon"></i></a>
			<a href="https://twitter.com/MassTLC"><i class="fa fa-twitter social-media-icon"></i></a>
		</div>
		
		<div class="footer-social-media">
			<h3>LATEST TWEETS</h3>
			<div>
				<p id="davon"></p>
			</div>
		</div>
		
		<div class="footer-social-media">
			<h3>FLICKR</h3>
			<div id="flickr-image-container">
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div>
	</div>


	<script type="text/javascript">
	var tweets = [];
	//Snag last 30 the tweets from @shitdavonsays
	$.getJSON('/wp-content/themes/massTlcAwards/tweets_json.php?count=30&screen_name=shitdavonsays', function(data){
		var dataNum = data.length;
		$.each(data, function(index, value){
			tweets.push(value.text);
			if (tweets.length === dataNum) {
				//channel Davon's mind after all the data has loaded
				newQuote();
			}
		});

	});	
	//Gimmie a random tweet
	var newQuote = function(){
		console.log("running");
		var rand = Math.floor(Math.random() * tweets.length - 1);
		$("#davon").text(tweets[rand]);
	}
	
	
	</script>








	
	</footer> <!-- #colophon
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
