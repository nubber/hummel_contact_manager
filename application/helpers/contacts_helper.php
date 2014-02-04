<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


function sort_links($sort){
	if ((isset($sort['last_name']))&&($sort['last_name']=="desc")) {
		$last_name = '<a href="?sort[last_name]=asc">Last Name &darr;</a>';
	} else {
		$last_name = '<a href="?sort[last_name]=desc">Last Name &uarr;</a>';
	}
	return "<p>Sort By: $last_name</p>";
}

?>