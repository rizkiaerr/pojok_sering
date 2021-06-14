<?php
  include "config.php";

  $personality_komen_pesan=$_POST['personality_komen_pesan'];
	$no_personality_komen=$_POST['no_personality_komen'];
	$personality_komen_id=$_POST['personality_komen_id'];
	$modal=mysqli_query($link,"UPDATE personality_komen SET personality_komen.personality_komen_pesan='$personality_komen_pesan' WHERE no_personality_komen='$no_personality_komen' AND personality_komen.personality_komen_id='$personality_komen_id'");
	// header('location:tampilthread.php');

if(!$modal)
{
    echo mysqli_error($link);
    die();
}
else
{
	
	// echo "Berhasil diedit";
	header('location:personality.php');
} 
 
?>
