<?php 
require_once('url.php');

function index(){
	echo "<h1>+ <a href='create'>Daftar </a></h1>";
}

function create($url){
	include($url[2].'.php');
}

function sess_star(){
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat= $_POST['alamat'];
	$lv = $_POST['lv'];

	if($id|| $nama|| $alamat || $lv){
	$data['id_user'] = $id;
	$data['nama_user'] = $nama;
	$data['lv_user'] = $lv;
	$_SESSION['user'] = $data;
	}else{
		header("location:daftar");
	}
}

function sess_view(){
	
	if(isset($_SESSION['user'])){
		echo $_SESSION['user']['id_user'] . '<br>';
		echo $_SESSION['user']['nama_user'] . '<br>';
		echo $_SESSION['user']['lv_user'] . '<br>';
	}else{
		echo "Session tidak ada";
	}
}

function sess_del(){
	session_destroy();
	header("location:index");
}


?>
