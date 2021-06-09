<?php
	include 'header.php';
	//include 'koneksi.php';

	$nama=$_GET['nama'];
	$foto=$_GET['foto'];
	$kategori=$_GET['kategori'];
	$judul=$_GET['judul'];
	$judul=urldecode($judul);
	$alamat="../buku/".$kategori."/".$judul.".pdf";
?>

    <!-- Page Content -->
    <div class="container">
		<div class="col-sm-9">
			<h2 class="page-header">
				<?php  echo "$judul";?>
			</h2>
			<embed width="827" height="800" src="<?php  echo "$alamat"?>" type="application/pdf"></embed>
			<br>
			<br>
			<hr>
			<div class="navbar-form navbar-left">
				
			</div>
			
			<div class="navbar-form navbar-right">
				<br>
				<a href="https://plus.google.com/share?url=http://www.berbagiilmu.com/admin/baca.php?kategori=$kategori&judul=$judul.php" class="btn btn-danger btn-md">Google+</a>
				<a href="http://twitter.com/share?url=http://www.berbagiilmu.com/admin/baca.php?kategori=$kategori&judul=$judul.php" class="btn btn-info btn-md">Twitter</a>
				<a href="http://www.facebook.com/sharer.php?u=http://www.berbagiilmu.com/admin/baca.php?kategori=$kategori&judul=$judul.php" class="btn btn-primary btn-md">Facebook</a>
			</div>
		</div>
		
		<div class="col-sm-3">
			<h2 class="page-header">
				Buku Terbaru 
			</h2>
			<?php
								$query = "SELECT admin_nama, admin_foto, buku_id, buku_kategori, buku_judul FROM admin, buku_admin WHERE admin.admin_id=buku_admin.buku_author";
								$res = mysqli_query($link, $query);

								$no=0;
								while($data=mysqli_fetch_array($res))
								{
									$no++;
							?>
			
			<?php //\Cloudinary\Uploader::upload("C:\\xampp\\htdocs\\Master\\buku\\Olahraga\\book1.pdf", array("public_id" => "olahraga_book_1")); ?>
			<center>
			<a href="baca.php?kategori=<?php echo"$data[buku_kategori]" ?>&judul=<?php echo"$data[buku_judul]" ?>&nama=<?php echo"$data[admin_nama]" ?>&foto=<?php echo"$data[admin_foto]" ?> "><?php echo cl_image_tag("$data[buku_id].jpg", array("width" => 140, "height" => 180, "crop" => "fill", "page" => 1)); ?></a>
			<br>
		
			</center>
			<br>
			<hr>
			<?php
				if($no>=3) {
					break;
				}
				$no++;
				}
			?>
		</div>

	</div>
	<!--/container-->

<?php
	include 'footer.php';
?>