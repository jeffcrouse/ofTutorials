<?php

class TutorialController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }




	/**
	*
	*/
    public function addAction()
    {
		if($this->getRequest()->isPost())
		{
			$form = $this->getRequest()->getPost();

			// Create tutorial objects
			$tutorial = new Tutorial();
			$tutorial->title = $form["title"];
			$tutorial->url = $form["url"];
			$tutorial->category_id = $form["category"];
			$tutorial->published_at = $form["published_at"];
			$tutorial->description = $form["description"];
			$tutorial->author = $form["author"];
			$tutorial->author_url = $form["author_url"];

			if($tutorial->save())
			{
				$tags = explode(",", $form["tags"]);
				foreach($tags as $tagname)
				{
					if( !$tag = Tag::find_by_name(trim($tagname)) )
					{
						$tag = Tag::create( array("name" => trim($tagname)) );
					}
					$params = array("tag_id" => $tag->id, "tutorial_id" => $tutorial->id);
					$tt = TutorialTag::create($params);
				}
			}
			else
			{
				$this->view->form = $form;
				$this->view->errors = $tutorial->errors->full_messages();
			}
		}
    }
    
    
    /**
    *
    */
    public function tagautocompleteAction()
    {
    	$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender(true);
		if(!$this->getRequest()->isXmlHttpRequest()) die("AJAX only");
		
		foreach(Tag::all() as $tag)
		{
			$this->getResponse()->appendBody( $tag->name."\n" );
		}
    }

}

