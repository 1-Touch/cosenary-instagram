<?php
	
	require_once __DIR__ . '/vendor/autoload.php';

	use MetzWeb\Instagram\Instagram;

	$instagram = new Instagram(array(
		'apiKey'      => '215532029623474',
		'apiSecret'   => 'f1be22088ef100acafa54f752dbc5f1a',
		'apiCallback' => 'https://localhost/cosenaryInstagram/auth.php'
	));

	$code = $_GET['code'];
	$data = $instagram->getOAuthToken($code);

	// set user access token
	$instagram->setAccessToken($data);

	// get all user likes
	$likes = $instagram->getUserLikes();

	print_r($likes); die();
 echo("hi");
?>