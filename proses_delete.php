<?php
  include "config.php";

  if(!empty($_GET['member_id'])){
	$member_id=$_GET['member_id'];
	$modal=mysqli_query($link,"DELETE FROM member WHERE member_id='$member_id'");
	header('location:member.php');
  
  }elseif(!empty($_GET['buku_admin'])){
	$buku_id=$_GET['buku_admin'];
	$modal=mysqli_query($link,"DELETE FROM buku_admin WHERE buku_id='$buku_id'");
	header('location:buku.php');
  
  }elseif(!empty($_GET['buku_member'])){
	$buku_id=$_GET['buku_member'];
	$modal=mysqli_query($link,"DELETE FROM buku WHERE buku_id='$buku_id'");
	header('location:buku.php');

  }elseif(!empty($_GET['thread_id'])){
	$thread_id=$_GET['thread_id'];
	$modal=mysqli_query($link,"DELETE FROM thread WHERE no_thread='$thread_id'");
	header('location:threadbaru.php');
  }
?>
