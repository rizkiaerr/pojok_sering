<?php
//include konek database
include 'config.php';
include 'phpmailer/default.php';
	session_start();
	ob_start();
  $email_cr = $_SESSION['member_email'];
	// session_destroy();  
  $real_email = "rizkiaerr@gmail.com";
  
  $query=mysqli_query($link,"SELECT member_nama,member_email FROM member WHERE member_email='$email_cr'");
  $hasil=mysqli_fetch_array($query);
	//*************************PHP MAILER*************************************
  //Set who the message is to be sent from
  $mail->setFrom('omezfenrir@gmail.com', 'Developer Pojok Sering');
  //Set an alternative reply-to address
  $mail->addReplyTo('omezfenrir@gmail.com', 'Developer Pojok Sering');
  //Set who the message is to be sent to
  $mail->addAddress($real_email);
  //Set the subject line
  $mail->Subject = "No Reply Notifikasi Aktivitas Member";
	// isi pesan email disertai password
	$pesan_notif = "
	<html>
	<style>
	
	.header{
		border-radius:3px;
		padding: 6px;
		text-align:center;
		color: #fff;
	}

	.doff{
		color:#555;
	}
	</style>
	<body>
		<div class=\"header\">
			<h3>Notifikasi Pojok Sering<br></h3>
		</div><br>
		<table>
		<tr>
			<td><b>Nama</b><td>: ".$hasil['member_nama']."</td></td>
		</tr>
		<tr>
			<td><b>Email</b><td>: <b>".$hasil['member_email']."</b></td></td>
		</tr>
		<tr>
			<td><b>Telah melakukan login pada pukul</b><td>: <b>".date("Y-m-d H:i:s")."</b></td></td>
		</tr>
		</table>
		<br>
		<br>
		<center>
			<p> Pesan ini dibuat oleh sistem sebagai pemberitahuan</p>
		</center>
			<p><br><br>
	    Developer Pojok Sering<br>
			</p>
			<center>
			<small>
			<p class=\"doff\">All Rights Reserved &copy; ".date("Y")." Pojok Sering.<br>
			</p>
			</small>
			</center>
   	
	</body>
	</html>";
	$mail->msgHTML($pesan_notif, dirname(__FILE__));
  //Replace the plain text body with one created manually
  $mail->AltBody = 'This is a plain-text message body';
  //Attach an image file
  // $mail->addAttachment('images/phpmailer_mini.png');
  //send the message, check for errors
  if (!$mail->send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
  		} elseif ($mail->send())
 			header("Location:index.php")
  		
 ?>
