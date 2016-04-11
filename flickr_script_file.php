<?php

require_once('flickr.php'); 
$Flickr = new Flickr('11ab26be129cfecfa3242c54a9c6d66c'); 
$data = $Flickr->search('', '141026073@N08', 6); 
foreach($data['photos']['photo'] as $photo) { 
	// the image URL becomes somthing like 
	// http://farm{farm-id}.static.flickr.com/{server-id}/{id}_{secret}.jpg  
	echo '<img src="' . 'http://farm' . $photo["farm"] . '.static.flickr.com/' . $photo["server"] . '/' . $photo["id"] . '_' . $photo["secret"] . '.jpg">'; 
} 



?>