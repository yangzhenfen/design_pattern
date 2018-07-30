<?php
if (auth::isloggedin()) {
	$link = array('/'=>'Home','/logout'=>'Log Out');
	
	echo '<ul>';
	foreach ($links AS $link=>$title) {
		echo '<li><a href="'.$link.'">'. $title .'</a><li>';
	}
	echo '</ul>';
}

?>