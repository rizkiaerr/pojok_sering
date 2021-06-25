<?php
include "config.php";
//save untuk Buku
if(isset($_POST['save'])){
	$_GET['save']="";
	$member_id		 = $_POST['member_id'];
	$member_nama 	 = $_POST['member_nama'];
	$member_jk 		 = $_POST['member_jk'];
	$member_ttl		 = $_POST['member_ttl'];
	$member_tglahir	 = $_POST['member_tglahir'];
	$reformat_tgl_lahir = date('Y-m-d', strtotime($member_tglahir));
	
	// var_dump($reformat_tgl_lahir);
	// var_dump($member_tglahir);
	$member_alamat 	 = $_POST['member_alamat'];
	$member_username = $_POST['member_username'];
	$member_tlp 	 = $_POST['member_tlp'];
	$member_email 	 = $_POST['member_email'];
	$member_password = md5($_POST['member_password']);

	mysqli_query($link,"INSERT INTO member(member_id, member_nama, member_jk, member_ttl, member_tglahir, member_alamat, member_username, member_tlp, member_email, member_password) VALUES
		     ('$member_id','$member_nama','$member_jk','$member_ttl','$reformat_tgl_lahir','$member_alamat','$member_username','$member_tlp','$member_email','$member_password')");

	echo'<script type="text/javascript">
		alert("Registrasi berhasil, Selamat bergabung '.$member_username.' silahkan untuk login!");
		window.location.href = "index.php";
		</script>';

}else
	echo'<script type="text/javascript">
	alert("Registrasi gagal!");
	window.location.href = "index.php";
	</script>';

?>
