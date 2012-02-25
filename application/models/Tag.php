<?php
/**
 * This file is part of oftutorials.
 *
 * @author Jeff Crouse <jeff@fevercreative.com>
 * @version 1.0
 * @package influence
 */

class Tag extends ActiveRecord\Model
{
	//
	//	RULES
	//

	static $belongs_to = array(
		array('tutorial_tags')
	);
}

?>