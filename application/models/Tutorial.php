<?php
/**
 * This file is part of oftutorials.
 *
 * @author Jeff Crouse <jeff@fevercreative.com>
 * @version 1.0
 * @package influence
 */

class Tutorial extends ActiveRecord\Model
{
	//
	//	RULES
	//
	static $validates_presence_of = array(
		array("title"),
		array("url"),
		array("category_id")
	);
	static $validates_size_of = array(
		array('title', 'within' => array(10,100), 'too_short' => 'too short!'),
	);
	static $has_many = array(
		array('tutorials_tags'),
	);
	static $belongs_to = array(
		array('category')
	);

	/**
	*
	*/
	public function validate() 
	{
		if(!filter_var($this->url, FILTER_VALIDATE_URL))
		{
			$this->errors->add('url', "is not a valid URL");
		}
	}	
}

?>