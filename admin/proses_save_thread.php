<?php
include "config.php";
//save untuk thread
	$no_thread		 = $_POST['no_thread'];
	$thread_id		 = $_POST['thread_id'];
	$thread_subjek 	 = $_POST['thread_subjek'];
	$thread_pesan 	 = $_POST['thread_pesan'];
	$thread_datetime = $_POST['thread_datetime'];

	mysqli_query($link,"INSERT INTO `thread`(`no_thread`, `thread_id`, `thread_subjek`, `thread_pesan`, `tanggal_upload`) VALUES ('$no_thread','$thread_id','$thread_subjek','$thread_pesan','$thread_datetime')");

	header('location:threadbaru.php');
?>
