<?php
/**
 * Base Class
 * ==========
 * This class allows you to add any common functionality to all the other
 * classes. In this case we are just adding some debugging info.
 */

namespace semantic;

abstract class base {
	
	/**
	 * This is the standard constructor
	 */
	public function __construct() {
		global $debug;
		$debug->runtime_checkpoint(sprintf('[Theme] Class "%1$s" Initialized', get_class($this)));
	}
}