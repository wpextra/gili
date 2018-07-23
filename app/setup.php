<?php

namespace Bridge\Tracker;
 

if (!defined('ABSPATH'))
	exit;

final class Loader {

	protected $includes = [
		
	];

	public function __construct() {
		$this->_includes();
	}

	public function _includes() {
		foreach ( $this->includes as $include ) {
			$this->require_file( dirname( __FILE__ ) . "/$include.php" );
		}
	}


	protected function filename($path) {
		return basename($path);  
	}
	protected function require_file( $file ) {
		if ( file_exists( $file ) ) {
			require_once $file;
			return true;
		}
		return false;
	}
}

