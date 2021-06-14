<?php
  include "config.php";

  // $thread_komen_id=$_GET['member_id'];
	$thread_id=$_GET['nomor'];
	$modal=mysqli_query($link,"DELETE FROM thread_komen WHERE no_thread_komen='$thread_id'");
	// header('location:tampilthread.php');

if(!$modal)
{
    echo mysqli_error($link);
    die();
}
else
{
	header('location:threadbaru.php');
} 
 
?>
