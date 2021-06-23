<?php
include "config.php";
//save untuk thread
	$no_thread		 = $_POST['no_thread'];
	$thread_id		 = $_POST['thread_id'];
	$thread_subjek 	 = $_POST['thread_subjek'];
	$thread_pesan 	 = $_POST['thread_pesan'];
	$thread_datetime = $_POST['thread_datetime'];

	$modal = mysqli_query($link,"INSERT INTO `thread`(`no_thread`, `thread_id`, `thread_subjek`, `thread_pesan`, `tanggal_upload`) VALUES ('$no_thread','$thread_id','$thread_subjek','$thread_pesan','$thread_datetime')");
    if($modal){
        echo mysqli_error($link);
        die();
    }else 
    echo "Berhasil ditambahkan";
// 	header('location:threadbaru.php');
?>
