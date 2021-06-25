
<?php
	include "config.php";
	$personality_id	 	 = $_POST['personality_id'];
	$isi_personality 	 = $_POST['isi_personality'];
	$no_personality= $_POST['no_personality'];


	$modal = mysqli_query($link,"UPDATE personality SET isi_personality='$isi_personality' WHERE no_personality='$no_personality' AND personality_id='$personality_id'");

	if(!$modal)
{
    echo mysqli_error($link);
    die();
}
else
{
	
	// echo "Berhasil ditambah";
	header('location:personality.php');
}
?>