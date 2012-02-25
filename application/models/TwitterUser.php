<?php

class TwitterUser
{

	public $name;

	public __construct($username)
	{
		$client = new Zend_Http_Client("https://api.twitter.com/1/users/show.json");
    	$client->setParameterGet('screen_name', $username);
    	$response = $client->request();
    	$response = json_decode($response->getBody(), true);
	
		$this->name = $response["name"];
		
	}
}

?>