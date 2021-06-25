<?php
  include "config.php";

  if(!empty($_GET['member_id'])){
	$member_id=$_GET['member_id'];
	$modal=mysqli_query($link,"DELETE FROM member WHERE member_id='$member_id'");
	header('location:member.php');
  
  }elseif(!empty($_GET['buku_id_admin'])){
	$buku_id=$_GET['buku_id_admin'];
	$buku_judul=$_GET['buku_judul'];
	$buku_kategori=$_GET['buku_kategori'];
	$modal=mysqli_query($link,"DELETE FROM buku_admin WHERE buku_id='$buku_id'");

	// Proses Penghapusan file dalam Folder
	$lokasi_file="buku/".$buku_kategori."/".$buku_judul.".pdf";
	unlink($lokasi_file);
	header('location:buku.php');
  
  }elseif(!empty($_GET['buku_id_member'])){
	$buku_id=$_GET['buku_id_member'];
	$buku_judul=$_GET['buku_judul'];
	$buku_kategori=$_GET['buku_kategori'];
	$modal=mysqli_query($link,"DELETE FROM buku WHERE buku_id='$buku_id'");
	
		// Proses Penghapusan file dalam Folder
	$lokasi_file="buku/".$buku_kategori."/".$buku_judul.".pdf";
	unlink($lokasi_file);
	header('location:buku.php');

  }elseif(!empty($_GET['thread_id'])){
	$thread_id=$_GET['thread_id'];
	$modal=mysqli_query($link,"DELETE FROM thread WHERE no_thread='$thread_id'");
	header('location:threadbaru.php');
  }
?>
