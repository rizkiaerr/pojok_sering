<?php
include "config.php";
//save untuk Buku
if($_GET['save']=="buku_admin"){
	$buku_id		 = $_POST['buku_id'];
	$buku_judul 	 = $_POST['buku_judul'];
	$buku_penulis	 = $_POST['buku_penulis'];
	$buku_bahasa	 = $_POST['buku_bahasa'];

mysqli_query($link,"UPDATE buku_admin SET buku_judul='$buku_judul', buku_penulis='$buku_penulis', buku_bahasa='$buku_bahasa' WHERE buku_id='$buku_id'");
header('location:buku.php');
}else if($_GET['save']=="buku_member"){
	$buku_id		 = $_POST['buku_id'];
	$buku_judul 	 = $_POST['buku_judul'];

mysqli_query($link,"UPDATE buku SET buku_judul='$buku_judul' WHERE buku_id='$buku_id'");
header('location:buku.php');
}

?>
