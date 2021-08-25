<html>

    <?php 

    $query1="SELECT admin.admin_nama AS nama,admin.admin_foto AS foto, buku_admin.buku_id AS buku_id, buku_admin.buku_kategori, buku_admin.buku_judul FROM admin, buku_admin WHERE admin.admin_id=buku_admin.buku_author UNION (SELECT member.member_nama, member.member_foto, buku.buku_id, buku.buku_kategori, buku.buku_judul FROM member, buku WHERE member.member_id=buku.buku_author ORDER BY tanggal_upload);";
    $read=mysqli_query($link,$query1);
    $hasil=mysqli_fetch_array($read);

    ?> 
<div class="container">
    <div class="row">
<div class="container-fluid">
        <h1 class="page-header">
            Buku dari Admin
        </h1>
        <div class="well">
            <div id="myCarousel_book_1" class="carousel slide"> 
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-sm-2"></div>
                            <?php
                                $query = "SELECT admin_nama, admin_foto, buku_id, buku_kategori, buku_judul FROM admin, buku_admin WHERE admin.admin_id=buku_admin.buku_author ORDER BY tanggal_upload DESC";
                                $res = mysqli_query($link, $query);
                                $no=0;
                                while($data=mysqli_fetch_array($res))
                                {
                                    $no++;
                            ?>
                                    <div class="col-sm-2"><a href="baca.php?kategori=<?php echo"$data[buku_kategori]" ?>&judul=<?php echo"$data[buku_judul]" ?>&nama=<?php echo"$data[admin_nama]" ?>&foto=<?php echo"$data[admin_foto]" ?> " class="thumbnail"><?php echo cl_image_tag("$data[buku_id].jpg", array("width" => 200, "height" => 250, "crop" => "fill", "page" => 1)); ?></a></div>
                                    <?php
                                        if($no % 4 == 0){
                                    ?>

                                        <div class="col-sm-2"></div>
                                        </div>
                                        </div>
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-sm-2"></div>
                                                <?php
                                                    while($data=mysqli_fetch_array($res)){
                                                        $no++;
                                                ?>
                                                        <div class="col-sm-2"><a href="baca.php?kategori=<?php echo"$data[buku_kategori]" ?>&judul=<?php echo"$data[buku_judul]" ?>&nama=<?php echo"$data[admin_nama]" ?>&foto=<?php echo"$data[member_foto]" ?> " class="thumbnail"><?php echo cl_image_tag("$data[buku_id].jpg", array("width" => 200, "height" => 250, "crop" => "fill", "page" => 1)); ?></a></div>
                                                        <?php
                                                            if($no % 4 == 0){
                                                        ?>

                                                        <?php
                                                                break;
                                                            }
                                                        ?>
                                                <?php
                                                    }
                                                ?>  
                                            <div class="col-sm-2"></div>                         
                                            </div>
                                        </div>

                                    <?php
                                            break;
                                        }
                                    ?>
                            <?php
                                }
                            ?>                              
                </div>
                
                <!--/carousel-inner--> 
                <a class="left carousel-control" href="#myCarousel_book_1" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel_book_1" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!--/myCarousel-->
        </div>
        <!--/well-->
    </div>
</div>
</div>

<div class="container">
    <div class="row">
<div class="container-fluid">
        <h1 class="page-header">
            Buku dari Pegawai
        </h1>
        <div class="well">
            <div id="myCarousel_book_2" class="carousel slide"> 
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-sm-2"></div>
                            <?php
                                $query = "SELECT member_nama, member_foto, buku_id, buku_kategori, buku_judul FROM member, buku WHERE member.member_id=buku.buku_author ORDER BY tanggal_upload DESC";
                                $res = mysqli_query($link, $query);
                                $no=0;
                                while($data=mysqli_fetch_array($res))
                                {
                                    $no++;
                            ?>
                                    <div class="col-sm-2"><a href="baca.php?kategori=<?php echo"$data[buku_kategori]" ?>&judul=<?php echo"$data[buku_judul]" ?>&nama=<?php echo"$data[member_nama]" ?>&foto=<?php echo"$data[member_foto]" ?> " class="thumbnail"><?php echo cl_image_tag("$data[buku_id].jpg", array("width" => 200, "height" => 250, "crop" => "fill", "page" => 1)); ?></a></div>
                                    <?php
                                        if($no % 4 == 0){
                                    ?>

                                        <div class="col-sm-2"></div>
                                        </div>
                                        </div>
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-sm-2"></div>
                                                <?php
                                                    while($data=mysqli_fetch_array($res)){
                                                        $no++;
                                                ?>
                                                        <div class="col-sm-2"><a href="baca.php?kategori=<?php echo"$data[buku_kategori]" ?>&judul=<?php echo"$data[buku_judul]" ?>&nama=<?php echo"$data[member_nama]" ?>&foto=<?php echo"$data[member_foto]" ?> " class="thumbnail"><?php echo cl_image_tag("$data[buku_id].jpg", array("width" => 200, "height" => 250, "crop" => "fill", "page" => 1)); ?></a></div>
                                                        <?php
                                                            if($no % 4 == 0){
                                                        ?>

                                                        <?php
                                                                break;
                                                            }
                                                        ?>
                                                <?php
                                                    }
                                                ?>  
                                            <div class="col-sm-2"></div>                         
                                            </div>
                                        </div>

                                    <?php
                                            break;
                                        }
                                    ?>
                            <?php
                                }
                            ?>                              
                </div>
                
                <!--/carousel-inner--> 
                <a class="left carousel-control" href="#myCarousel_book_2" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel_book_2" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!--/myCarousel-->
        </div>
        <!--/well-->
    </div>
</div>
<a align="right" class="btn btn-primary" href="buku_tanpa_login.php?kategori=<?php echo"$hasil[buku_kategori]" ?>&judul=<?php echo"$hasil[buku_judul]" ?>&nama=<?php echo"$hasil[nama]" ?>">Tampilkan Lebih Banyak</a>
</div>

</h1>	
	<center>
		<br><br>
		<h4><i> "Gantungkan cita-citamu setinggi langit, bermimpilah setinggi langit, jika engkau jatuh, engkau akan jatuh diantara bintang-bintang</i></h4>
		<h3><i> Ir. Soekarno</i></h3>
	</center>
			
</div>