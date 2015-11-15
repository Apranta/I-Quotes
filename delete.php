<?php 
	include "koneksi.php";
	$id=$_GET['id'];
	$query=mysql_query("delete FROM kata WHERE No='$id'");
	if($query){

		header("location: admin.php");

	}
	else{
		echo "<h3>Maaf Delete Tidak sukses";
	}
?>