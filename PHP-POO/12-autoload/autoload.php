<?php 

	function clases_autoload($class) {
		
    		require_once 'clases/'.$class.'.php';

	}

	spl_autoload_register('clases_autoload');