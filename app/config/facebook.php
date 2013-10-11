<?php

//facebook app config

return array(
	'facebook' => array(
		'clientId' => '494865777271597',
		'clientSecret' => '55ad9a3e7e53fd0fd7727de6e6787da6',
		'scope' => 'email, read-stream',
		'redirectUri' => url('login/fb'),
		)
	);

?>