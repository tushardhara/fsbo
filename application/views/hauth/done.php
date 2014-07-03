<?php
	print_r($user_profile);
	echo "<li>".anchor('hauth/logout/Twitter','Logout of Twiiter', array('class' => 'connected'))."</li>";
	echo "<li>".anchor('hauth/logout/Facebook','Logout of Facebook', array('class' => 'connected'))."</li>";
	echo "<li>".anchor('hauth/logout/Google','Logout of Google', array('class' => 'connected'))."</li>";
?>
