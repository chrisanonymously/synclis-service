<?php
	#AUTOGENERATED BY HYBRIDAUTH 2.1.2 INSTALLER - Monday 24th of March 2014 12:30:52 AM

/*!
* HybridAuth
* http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
* (c) 2009-2012, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
*/

// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------

return 
	array(
		"base_url" => "https://synclis.com/Login/hybridauth/", 

		"providers" => array ( 
			// openid providers
			"OpenID" => array (
				"enabled" => true
			),

			"AOL"  => array ( 
				"enabled" => true 
			),

			"Yahoo" => array ( 
				"enabled" => true,
				"keys"    => array ( "id" => "dj0yJmk9dW1lT1IzYnFaZGloJmQ9WVdrOVNXTm5ZM1ZzTm1jbWNHbzlNVFkxTmpZM01qYzJNZy0tJnM9Y29uc3VtZXJzZWNyZXQmeD01ZA--",
								 "secret" => "58863539d70180cc022085b2c08ea057f13de756" )
			),

			"Google" => array ( 
				"enabled" => true,
				"keys"    => array ( "id" => "677561251344-4h79ks1l6oksf93hqrn7c5tb1mm3ant7.apps.googleusercontent.com", "secret" => "ejqZofuQwB27X4CS6t480Nuq" )
			),

			"Facebook" => array ( 
				"enabled" => true,
				"keys"    => array ( "id" => "219802621553344", "secret" => "636a1bace97ab0c6e16cef12c0da1f98" )
			),

			"Twitter" => array ( 
				"enabled" => true,
				"keys"    => array ( "key" => "EipNscfd6nCJQQsF11Rqg", "secret" => "zHRd6gFV217srqT5gAQvXglssvVlTw3TgoXzRN5xk" ) 
			),

			// windows live
			"Live" => array ( 
				"enabled" => false,
				"keys"    => array ( "id" => "", "secret" => "" ) 
			),

			"MySpace" => array ( 
				"enabled" => false,
				"keys"    => array ( "key" => "", "secret" => "" ) 
			),

			"LinkedIn" => array ( 
				"enabled" => true,
				"keys"    => array ( "key" => "750abs9w12i6b2", "secret" => "J80C5zwRzjvjEeqg" ) 
			),

			"Foursquare" => array (
				"enabled" => true,
				"keys"    => array ( "id" => "NMZTTQSQRYF0HBSC3TPJCGZUEVP5QJVEWV4BS1WBQ5WCXNR2", "secret" => "4JIQSPIOGHHNHCJBXGNOBOIWH5X40HX31V1PP4BXDJTM0W3N" ) 
			),
		),

		// if you want to enable logging, set 'debug_mode' to true  then provide a writable file by the web server on "debug_file"
		"debug_mode" => false,

		"debug_file" => ""
	);
