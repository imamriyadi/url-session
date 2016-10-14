<?php
session_start();
$url = explode('/', $_SERVER['REQUEST_URI']);
if($url[3]){
	$nama_function = $url[3]; 
	$nama_function($url); 
}else{
	index();
}


	function index(){
		// isi content ...
	}
?>
