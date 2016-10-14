<?php
session_start();
$url = explode('/', $_SERVER['REQUEST_URI']);
if($url[2]){
	$nama_function = $url[2]; 
	$nama_function($url); 
}else{
	index();
}

?>
