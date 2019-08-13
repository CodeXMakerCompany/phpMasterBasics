<?php 

	function controller_autoload($class) {
		
    		include 'controllers/'.$class.'.php';

	}

	spl_autoload_register('controller_autoload');
