<?php
include "config.php";
//save untuk thread
	$no_personality_komen = $_POST['no_personality_komen'];
	$personality_komen_id		 = $_POST['personality_komen_id'];
	$personality_komen_pesan 	 = $_POST['personality_komen_pesan'];
	$personality_komen_datetime = $_POST['personality_komen_datetime'];
	$no_personality		 = $_POST['no_personality'];	
	$modal=mysqli_query($link,"INSERT INTO `personality_komen`(`no_personality_komen`,`no_personality`,`personality_komen_id`, `personality_komen_pesan`, `personality_komen_tanggal`) VALUES ('$no_personality_komen','$no_personality','$personality_komen_id','$personality_komen_pesan','$personality_komen_datetime')");

if (!$modal) {
	echo mysqli_error($link);
	die();
	// code...
}else
// echo "berhasil ditambahkan";
	header('location:personality.php');
?>
