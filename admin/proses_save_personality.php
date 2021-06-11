<?php
include "config.php";
//save untuk thread
	$no_personality		 = $_POST['no_personality'];
	$personality_id		 = $_POST['personality_id'];
	$personality_tema 	 = $_POST['personality_tema'];
	$isi_personality 	 = $_POST['isi_personality'];
	$tanggal_upload = $_POST['tanggal_upload'];

	$modal = mysqli_query($link,"INSERT INTO `personality`(`no_personality`, `personality_id`, `personality_tema`, `isi_personality`, `tanggal_upload`) VALUES ('$no_personality','$personality_id','$personality_tema','$isi_personality','$tanggal_upload')");

	if(!$modal)
{
    echo mysqli_error($link);
    die();
}
else
{
	
	// echo "Berhasil ditambah";
	header('location:personality.php');
}
?>
