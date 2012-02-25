<?php
/**
 * This file is part of oftutorials.
 *
 * @author Jeff Crouse <jeff@fevercreative.com>
 * @version 1.0
 * @package influence
 */

class TutorialTag extends ActiveRecord\Model
{
	//
	//	RULES
	//

	static $belongs_to = array(
		array('tutorials'),
		array('tags')
	);
}

?>