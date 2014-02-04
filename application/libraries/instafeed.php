<?php
/**
* CodeIgniter InstaFeed Class
*
* InstaFeed fetches Instagram media data via the provided Instagram username
*
* By Jason Hummel @ http://www.hummelinteractive.com
* 
* 
* 
*/

class Instafeed {
	
	function Instafeed($configObj = array()) {
		$this->CI =& get_instance();
	}
	
	public function get_recent_media() {

		$instafeed_json = json_decode(file_get_contents('https://api.instagram.com/v1/users/153435/media/recent/?client_id=d6fc89961b094f0cb25b1ab4c3d257bd'))->data;
		
		$images = array();
		foreach($instafeed_json as $gram) {
			array_push($images,array('thumbnail'=>$gram->images->low_resolution->url, 'full'=>$gram->images->standard_resolution->url));
		}
		
		return $images;


	}
	

}

?>
