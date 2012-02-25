<?php
/**
 * This file is part of oftutorials.
 *
 * @author Jeff Crouse <jeff@fevercreative.com>
 * @version 1.0
 * @package influence
 */

class Category extends ActiveRecord\Model
{
	//
	//	RULES
	//

	static $has_many = array(
		array('tutorials'),
	);



	/**
	*
	*/
	public function slug()
	{
		//Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )
		$slug = strtolower($this->name);
		//Strip any unwanted characters
		$slug = preg_replace("/[^a-z0-9_\s-]/", "", $slug);
		//Clean multiple dashes or whitespaces
		$slug = preg_replace("/[\s-]+/", " ", $slug);
		//Convert whitespaces and underscore to dash
		$slug = preg_replace("/[\s_]/", "-", $slug);
		// Shouldn't be longer than 50 characters
		$slug = substr($slug, 0, 50);
		return $slug;
	}
}

?>