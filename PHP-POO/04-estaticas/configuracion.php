<?php 
	
	class configuracion{

		public static $color;
		public static $newsletter;
		public static $entorno;

		//operador self accede a propiedad estatica
		public static function getColor(){
			return self::$color;	
		}

		public static function setColor($color){
			self::$color = $color;
		}

		public static function getNewsletter(){
			return self::$newsletter;	
		}

		public static function setNewsletter($newsletter){
			self::$newsletter = $newsletter;
		}

		public static function getEntorno(){
			return self::$entorno;	
		}

		public static function setEntorno($entorno){
			self::$entorno = $entorno;
		}

	}

 