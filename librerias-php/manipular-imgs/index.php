<?php 

 	require_once '../vendor/autoload.php';

 	$foto_original = 'SILVpORTADA.jpg';
 	$guardar_en = 'nueva_portada.jpg';

 	$thumb = new PHPThumb\GD($foto_original);

 	//Redimensionar
 	$thumb->resize(250, 250);

 	//Recortar
 	$thumb->crop(50, 50, 120, 120);

 	//Show
 	$thumb->show();

 	$thumb->save($guardar_en);