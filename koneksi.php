<?php
function koneksi_db()
{
	//pemanggilan msqli connect
	$host="localhost";
	$username="u9016224_admin";
	$password="Pusak@41113";
	$database="u9016224_berbagiilmu";
	
	//koneksi
	$link = mysqli_connect("localhost","u9016224_admin","Pusak@41113","u9016224_berbagiilmu");
	if(!$link)
	{
		die('Tidak Bisa Melakukan Koneksi :'.mysqli_error());
	}
	
	return $link;
}
?>