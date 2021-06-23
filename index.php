<!-- page header -->
<?php 
	include 'header.php';
?>
<!-- /page header -->

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('image/slider/1.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Selamat Datang di Pojok Sering</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('image/slider/2.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Kembangkan Kompetensi</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('image/slider/3.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Bersama Kami</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

	<div class="container">
    <!-- Page Content -->
        <?php
      		include "home.php";
        ?>   
        <!-- /Page Content -->
        <div class="jumbotron">
            <?php
                $cmd = "select kategori_jenis from kategori";
                $ecmd = mysqli_query($link, $cmd);
                echo "<center>";
                echo "<table border=0>";
                echo "<tr>";
                echo "<tr>";
                $nom=0;
                while ($data_kategori=mysqli_fetch_array($ecmd)) {
                    echo "<td width=18%><a href='cari.php?txt_cari=$data_kategori[kategori_jenis]'> $data_kategori[kategori_jenis] </a></td>";
                    $nom++;
                    if ($nom%2==0) {
                        echo "</tr>";
                        echo "<tr>";
                    }

                }
                echo "</table>";
                echo "</center>";
            ?>
        </div>
    </div>
        
	<!-- Page Footer -->
	<?php
		include 'footer.php';
	?>
	<!-- /Page Footer -->
