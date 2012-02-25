<?php

class AdminController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }




	/**
	*
	*/
    public function indexAction()
    {

    }
    
    
    /**
    *
    */
	public function tweetsAction()
	{
		error_reporting(E_ALL|E_STRICT);
		ini_set('display_errors', 'on');
	
		$this->_helper->layout()->disableLayout();
		//if(!$this->getRequest()->isXmlHttpRequest()) die("AJAX only");
		

	    $client = new Zend_Http_Client("http://search.twitter.com/search.json");
    	$client->setParameterGet('q', '#openframeworks');
    	$client->setParameterGet("rpp", 12);
    	$client->setParameterGet("include_entities", "true");
    	$client->setParameterGet("result_type", "mixed");
    	$response = $client->request();
		$body = $response->getBody();
		
		//print "HELLO!!!";
		
		if(!empty($body))
		{
    		$response = json_decode($body, true);
    		
    		//print_r($response["results"]);
    		$this->view->tweets = $response["results"];
  		}
  		else
  		{
  			print "no body";
  		}
  		
	}

}

