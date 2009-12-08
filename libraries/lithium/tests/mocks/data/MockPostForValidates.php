<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2009, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

namespace lithium\tests\mocks\data;

class MockPostForValidates extends \lithium\data\Model {

	protected $_meta = array('source' => 'mock_posts');

	public $validates = array(
		'title' => 'please enter a title',
		'email' => array(
			array('rule' => 'isNotEmpty', 'message' => 'email is empty'),
			array('rule' => 'email', 'message' => 'email is not valid'),
		)
	);
}

?>