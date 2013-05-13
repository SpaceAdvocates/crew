<?php

	require_once("lib/facebook-php-sdk-master/src/facebook.php");

	$config = array();
	$config['appId'] = '300636513404680';
	$config['secret'] = '12ca5a1148d2eca6158fd7817b393914';
	$config['fileUpload'] = false; // optional

	$facebook = new Facebook($config);
	$access_token = $facebook->getAccessToken();
	$user_id = $facebook->getUser();

?>