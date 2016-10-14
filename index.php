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
	$lv = $_POST['lv'];
	if($id|| $nama|| $lv){
	$data['id_user'] = $id;
	$data['nama_user'] = $nama;
	$data['lv_user'] = $lv;
	$_SESSION['user'] = $data;
	}else{
		header("location:create");
	}
}

function sess_doble_star(){
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$lv = $_POST['lv'];
	if($id|| $nama|| $lv){
	$data['id_user'] = $id;
	$data['nama_user'] = $nama;
	$data['lv_user'] = $lv;
	$_SESSION['user'][] = $data;
	header("location:sess_view");
	}else{
		header("location:create");
	}
}

function sess_view(){
	echo "<h1>+ <a href='create'>Daftar </a></h1>";
	if(isset($_SESSION['user'])){
		echo "<table border='1'>";
		echo "<thead> <tr><th>Id</th><th>Nama</th><th>Lv</th></thead>";
		echo "<tbody>";
		$var = $_SESSION['user'];
		foreach ($var as $key => $isi) {
			echo "<tr>";		
			 echo '<td>' . $isi['id_user'] .'</td>';
			 echo '<td>' . $isi['nama_user'] . '</td>';
			 echo '<td>' . $isi['lv_user'] . '</td>'; 
			 echo "</tr>";
		}
		echo "</tbody></table>";
		
	}else{
		echo "Session tidak ada";
	}
}

function sess_del(){
	session_destroy();
	header("location:index");
}


?>
