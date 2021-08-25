<?php
  include "config.php";
  include "Cloudinary/Cloudinary.php";
  include "Cloudinary/Uploader.php";
  include "Cloudinary/Api.php";
  \Cloudinary::config(array( 
                 "cloud_name" => "dgpexqgv8", 
                 "api_key" => "582214635924994", 
                 "api_secret" => "UIDLijnExXrd8Vedhwh4yuMS_o4" 
         )); 
if(!empty($_GET['buku_id'])){
	$buku_id=$_GET['buku_id'];
	$buku_judul=$_GET['buku_judul'];
	$buku_kategori=$_GET['buku_kategori'];
	$modal=mysqli_query($link,"DELETE FROM buku WHERE buku_id='$buku_id'");
	\Cloudinary\Uploader::destroy($buku_id);

	// Proses Penghapusan file dalam Folder
	$lokasi_file="buku/".$buku_kategori."/".$buku_judul.".pdf";
	unlink($lokasi_file);
	   echo mysqli_error($link);
    // die();
	header('location:buku_tanpa_login.php');
  
  }
?>