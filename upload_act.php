<?php
include "config.php";
include "Cloudinary/Cloudinary.php";
include "Cloudinary/Uploader.php";
include "Cloudinary/Api.php";
session_start();
\Cloudinary::config(array( 
                 "cloud_name" => "dgpexqgv8", 
                 "api_key" => "582214635924994", 
                 "api_secret" => "UIDLijnExXrd8Vedhwh4yuMS_o4" 
         )); 

if($_SESSION['member_email']){
	$buku_judul 	 = $_POST['buku_judul'];
	$buku_penulis 	 = $_POST['buku_penulis'];
	$buku_author 	 = $_POST['buku_author'];
	$buku_kategori 	 = $_POST['buku_kategori'];
	$tanggal_upload  = $_POST['tanggal_upload'];
	$buku_jenis 	 = $_POST['jenis_buku'];
 	$tmp			 = $_FILES['buku_file']['tmp_name'];
 	$error			 = $_FILES['buku_file']['error'];
	$file			 = $_FILES['buku_file']['name'];
 	$size			 = $_FILES['buku_file']['size'];
 	$type			 = $_FILES['buku_file']['type'];
	
	$buku_kat = substr($buku_kategori,0,2);
	$uploadir="buku/".$buku_kat."/";
	$namafile=substr($file, 0, -4);
	$alamatfile=$uploadir.$file;
               

 	if(move_uploaded_file($tmp, $alamatfile)){
		$sql="INSERT INTO buku (buku_judul,buku_penulis,buku_author,buku_kategori,buku_jenis,tanggal_upload) VALUES ('$buku_judul','$buku_penulis',$buku_author,'$buku_kat','$buku_jenis','$tanggal_upload')";
		mysqli_query($link,$sql);
 		header("Location: upload.php?auth=123131adajjadl131jakdl12");
		//  echo mysqli_error($link);
		//  die(); 
                //$data=mysqli_fetch_row($res);
 		$query="SELECT buku_id FROM buku ORDER BY buku_id DESC LIMIT 1";
        if ($res = mysqli_query($link, $query)){
                  // Fetch one and one row
	        while ($row=mysqli_fetch_row($res)){
	        	$c_buku1 =$row[0];         
	        }
        }
        
        $c_buku = array("public_id" =>"$c_buku1");
		$absolute_path = realpath("$alamatfile");
		\Cloudinary\Uploader::upload($absolute_path, $c_buku);
 	}else{
		header("Location: upload.php?auth=e2eu8932dh73q3eh822e2qdq&'$alamatfile'");
	}

}elseif($_SESSION['admin_email']){

	$buku_id		 = $_POST['buku_id'];
	$buku_judul 	 = $_POST['buku_judul'];
	$buku_penulis 	 = $_POST['buku_penulis'];
	$buku_author 	 = $_POST['buku_author'];
	$buku_kategori 	 = $_POST['buku_kategori'];
	$tanggal_upload  = $_POST['tanggal_upload'];
	$buku_jenis 	 = $_POST['jenis_buku'];
 	$tmp			 = $_FILES['buku_file']['tmp_name'];
 	$error			 = $_FILES['buku_file']['error'];
	$file			 = $_FILES['buku_file']['name'];
 	$size			 = $_FILES['buku_file']['size'];
 	$type			 = $_FILES['buku_file']['type'];

 	//$buku_kategori 	 = $_POST['buku_kategori'];
	$buku_kat = substr($buku_kategori,0,2);
	$buku_jenis = substr($buku_kategori,3);
	
	if($buku_id){
 		$uploadir="buku/".$buku_kat."/";
 	}

	$nama_file=$buku_judul.".pdf";
 	$alamatfile=$uploadir.$nama_file;
 	//$alamatfile="../buku/".$buku_jenis."/".$buku_judul.".pdf";

 	if(move_uploaded_file($tmp, $alamatfile)){
 		$sql="INSERT INTO buku_admin (buku_id,buku_judul,buku_penulis,buku_author,buku_kategori,buku_jenis,tanggal_upload) VALUES ('$buku_id','$buku_judul','$buku_penulis',$buku_author,'$buku_kat','$buku_jenis','$tanggal_upload')";
		mysqli_query($link,$sql);
		//\Cloudinary\Uploader::upload("SinglePageSample.pdf", "public_id" => 'single_page_pdf')
		$c_buku = array("public_id" => $buku_id);
		$absolute_path = realpath("$alamatfile");
		\Cloudinary\Uploader::upload($absolute_path, $c_buku);
 		header("Location: upload.php?auth=123131adajjadl131jakdl12");	
		//  echo mysqli_error($link);
		//  die();
	}else{
		header("Location: upload.php?auth=e2eu8932dh73q3eh822e2qdq&'$alamatfile'");
	}



	//\Cloudinary\Uploader::upload($_FILES["buku_file"]["tmp_name"]);

    

    //$result = \Cloudinary\Uploader::upload($file, $options = array());
       
}
?>