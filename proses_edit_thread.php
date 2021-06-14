
<?php
	include "config.php";
	$thread_subjek	 = $_POST['thread_subjek'];
	$thread_id	 	 = $_POST['thread_id'];
	$thread_pesan 	 = $_POST['edit_thread_pesan'];
	$no_thread= $_POST['no_thread'];

	settype($no_thread, "integer");
	var_dump($thread_subjek);
	var_dump($no_thread);
	var_dump($thread_pesan);



	// $query 			 = "UPDATE thread SET thread_subjek='$thread_subjek', thread_pesan='$thread_pesan' WHERE no_thread='$no_thread'";
// sample query UPDATE thread SET thread_subjek='aku sangat pusing', thread_pesan='aku pusing sekali' WHERE no_thread='a' AND thread_id='2'
	$modal = mysqli_query($link,"UPDATE thread SET thread_subjek='$thread_subjek', thread_pesan='$thread_pesan' WHERE no_thread='$no_thread'");
	header('location:threadbaru.php');

?>