<?php
  include "config.php";

  // $thread_komen_id=$_GET['member_id'];
	$personality_id=$_GET['nomor'];
	$modal=mysqli_query($link,"DELETE FROM personality_komen WHERE no_personality_komen='$personality_id'");
	// header('location:tampilthread.php');

if(!$modal)
{
    echo mysqli_error($link);
    die();
}
else
{
	header('location:personality.php');
} 
 
?>
