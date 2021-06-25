<?php
  include "config.php";

  $thread_komen_pesan=$_POST['thread_komen_pesan'];
	$no_thread_komen=$_POST['no_thread_komen'];
	$thread_komen_id=$_POST['thread_komen_id'];
	$modal=mysqli_query($link,"UPDATE thread_komen SET thread_komen.thread_komen_pesan='$thread_komen_pesan' WHERE no_thread_komen='$no_thread_komen' AND thread_komen.thread_komen_id='$thread_komen_id'");
	// header('location:tampilthread.php');

if(!$modal)
{
    echo mysqli_error($link);
    die();
}
else
{
	
	// echo "Berhasil diedit";
	header('location:threadbaru.php');
} 
 
?>
