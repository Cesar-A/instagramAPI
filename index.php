<<?php

//Configuration for our PHP Server
set_time_limit(0);
ini_set('default_socket_timeout', 300);

session_start();

//Make Constant using define.
define('clientID', '73d1c357a95c48109240e46b2282a2d7');
define('clientSecret', 'a5486a1d8f4a42c0a4988e57fd7fff66');
define('redirectURI', 'http://localhost/cesarapi/index.php');
define('ImageDirectory', 'pics/');

if isset(($_Get['code'])){
	$code =(($_Get['code']));
	$url ='https://api.instagram.com/oauth/access_token';
	$access_token_settings = array('client_id' =>clientID, 
							'client_secret' =>client_secret,
							'grant_type' => 'authorization_code'
							'redirect_uri' =>redirectURI,
							'code' => $code
							);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<a href="https://api.instagram.com/oauth/authorize/?client_id=<?php echo clientID; ?>&redirect_uri=<?php echo redirectURI; ?>&response_type=code">Login</a>
	
</body>
</html>