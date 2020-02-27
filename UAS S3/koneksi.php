<?php
$user="root";
$server="localhost";
$password="";
$database="db_master";

$input=mysqli_connect($server,$user,$password);
if($input){
	echo 'Ok ';
}else{
	echo 'Cek Lagi';
}

$db=mysqli_select_db($input,$database);
if($db){
	echo 'Database Berhasil Terhubung ';
}else{
	echo 'Cek Lagi';
}
?>
