<?php
  include "config.php";

  // if(!empty($_GET['member_id'])){
	$thread_id=$_GET['thread_id'];
	$modal=mysqli_query($link,"DELETE FROM thread WHERE thread_id='$thread_id'");
	header('location:member.php');
 
?>
