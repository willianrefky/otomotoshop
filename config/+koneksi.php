<?php 

global $koneksi;

$host="localhost";
$user= "root";
$pass="";
$database= "belajar";

$koneksi = mysqli_connect($host, $user, $pass, $database);

if (!$koneksi){
	die("koneksi gagal".mysqli_connect_error());
}
?>