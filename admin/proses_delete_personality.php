<?php
  include "config.php";

  // if(!empty($_GET['member_id'])){
	$no_personality=$_GET['no_personality'];
	$modal=mysqli_query($link,"DELETE FROM personality WHERE no_personality='$no_personality'");
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
