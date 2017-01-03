<?php 

$server		= 	"localhost";
$username	=	"root";
$password	=	"";
$database	=	"topsis_bidan";

mysql_connect($server,$username,$password)or die("Koneksi Gagal");
mysql_select_db($database) or die("Database Tidak Ditemukan");

?>