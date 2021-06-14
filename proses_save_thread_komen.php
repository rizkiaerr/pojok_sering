<?php
include "config.php";
//save untuk thread
	$no_thread_komen = $_POST['no_thread_komen'];
	$thread_id		 = $_POST['thread_komen_id'];
	$thread_pesan 	 = $_POST['thread_komen_pesan'];
	$thread_datetime = $_POST['thread_komen_datetime'];
	$no_thread		 = $_POST['no_thread'];	
	mysqli_query($link,"INSERT INTO `thread_komen`(`no_thread_komen`,`no_thread`,`thread_komen_id`, `thread_komen_pesan`, `thread_komen_tanggal`) VALUES ('$no_thread_komen','$no_thread','$thread_id','$thread_pesan','$thread_datetime')");

	header('location:threadbaru.php');
?>
