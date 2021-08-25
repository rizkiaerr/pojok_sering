<?php
	include 'header.php';
	//include 'koneksi.php';
	if (isset($_GET['foto'])){
		$foto=$_GET['foto'];
	}
	
	$nama=$_GET['nama'];
	
	$kategori=$_GET['kategori'];
	$judul=$_GET['judul'];
	$judul=urldecode($judul);
	$alamat="buku/".$kategori."/".$judul.".pdf";
?>

    <!-- Page Content -->
    <div class="container">
		<div class="col-sm-9">
			<h2 class="page-header">
				<?php  echo "$judul";?>
			</h2>
			<object data="<?php echo "$alamat" ?>" type="application/pdf" width="827" height="800">
		    <p>Browser anda tidak dapat menampilkan silahkan untuk mendownload langsung!</p>
    <p><a href="<?php echo "$alamat" ?>">Download Instead</a></p>
		</object>
			<br>
			<hr>
		</div>
		
		<div class="col-sm-3">
			<h2 class="page-header">
				Buku Terbaru 
			</h2>
			<?php
								$query = "SELECT admin.admin_nama AS nama, buku_admin.buku_id AS id, buku_admin.buku_kategori AS kategori, buku_admin.buku_judul AS judul, buku_admin.tanggal_upload FROM admin, buku_admin WHERE admin.admin_id=buku_admin.buku_author UNION SELECT member.member_nama AS nama, buku.buku_id AS id,buku.buku_kategori AS kategori, buku.buku_judul AS judul, buku.tanggal_upload FROM member,buku WHERE member.member_id=buku.buku_author ORDER BY tanggal_upload DESC;";
								$res = mysqli_query($link, $query);
								$no=0;
								while($data=mysqli_fetch_array($res))
								{
									$no++;
							?>
			<?php //\Cloudinary\Uploader::upload("C:\\xampp\\htdocs\\Master\\buku\\Olahraga\\book1.pdf", array("public_id" => "olahraga_book_1")); ?>
			<center>
			<a href="baca.php?kategori=<?php echo"$data[kategori]" ?>&judul=<?php echo"$data[judul]" ?>&nama=<?php echo"$data[nama]"?> "><?php echo cl_image_tag("$data[id].jpg", array("width" => 140, "height" => 180, "crop" => "fill", "page" => 1)); ?></a>
			<br>
		
			</center>
			<br>
			<hr>
			<?php
				if($no>=4) {
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