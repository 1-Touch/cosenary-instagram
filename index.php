<?php
	require_once __DIR__ . '/vendor/autoload.php';

	use MetzWeb\Instagram\Instagram;

	$instagram = new Instagram(array(
		'apiKey'      => '215532029623474',
		'apiSecret'   => 'f1be22088ef100acafa54f752dbc5f1a',
		'apiCallback' => 'https://localhost/cosenaryInstagram/auth.php'
	));

	echo "<a href='{$instagram->getLoginUrl()}'>Login with Instagram</a>";
?>