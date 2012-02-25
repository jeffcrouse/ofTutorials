<?php

class IndexController extends Zend_Controller_Action
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
        //$response = file_get_contents("https://api.github.com/repos/jefftimesten/ofTutorials/forks");
        //$this->view->forks = $forks = json_decode($response, true);
    }

	/**
	*
	*/
	/*
	public function postreceiveAction()
	{
		$payload = $this->getRequest()->getParam("payload");	
		$payload = json_decode( $payload, true );
		
		
		$github = array("207.97.227.253", "50.57.128.197");
		$is_github = in_array($_SERVER['REMOTE_ADDR'], $github);
					
		if(!$is_github)
			throw new Exception("You are not Github!  Go away!");
		
		$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender(true);
	
		$config = Zend_Registry::get('config');
		
		ob_start();
		
		printf("---------- %s ------------\n", date('r'));
		
		$public = realpath(sprintf('%s/../public', APPLICATION_PATH));
		$local = sprintf("%s/forks/%s", $public, $payload["repository"]["owner"]["name"]);
		$repo = sprintf('git://github.com/%s/%s.git', $payload["repository"]["owner"]["name"], $payload["repository"]["name"]);
		
				
		if(!file_exists($local))
		{
			print "Cloning $repo into $local...\n";
			$cmd = sprintf('%s clone %s %s 2>&1', $config->git, $repo, $local);
			print shell_exec($cmd);
			print "\n\n";
		}
		
		print "Pulling $repo in $local...\n";
		$cmd = sprintf('cd %s; %s pull 2>&1', $local, $config->git);
		print shell_exec($cmd);
		print "\n\n";
		
		
		foreach(glob("$local/*.asciidoc") as $source)
		{
			print "Rendering $source...\n";
			$cmd = sprintf('cd %s; %s %s 2>&1', $local, $config->asciidoc, $source);
			print shell_exec($cmd);
			print "\n\n";
		}
		
		$output = ob_get_clean();
		
		$logfile = sprintf("%s/postreceivelog.txt", APPLICATION_PATH);
		file_put_contents($logfile, $output, FILE_APPEND);
	}
	*/
}

