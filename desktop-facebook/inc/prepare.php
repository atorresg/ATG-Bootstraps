<?php

require_once('./inc/config.php');
require_once('./inc/facebook.php');
	
$fb = new Facebook(array(
	'appId' => $config['appId'],
	'secret' => $config['secret'],
	'cookie' => $config['cookie']
));

$data = $fb->getSignedRequest();
$liked = $data['page']['liked'];

function cssDimension($size){
	if (substr($size,strlen($size)-1)=='%') return $size;
	return $size.'px';
}
function cssWidth (){
	global $config;
	return cssDimension($config['width']);
}
function cssHeight (){
	global $config;
	return cssDimension($config['height']);
}
function loadJs(){
	global $config;
	echo '<script>';
	include ('./js/prepare.js'); 
	include ('./js/main.js'); 
	echo '</script>';
}