
<?php include "header.php"; ?>

<?php
        $auth = isset($_GET['auth']) ? ($_GET['auth']): '';
        $out = '';
        switch ($auth) {
            case '123131adajjadl131jakdl12':
                $out = '
                  <center>
                  <p style="color:green;padding:5px;border-radius:3px;">
                    <i class="glyphicon glyphicon-ok"></i>&nbsp; <b>SUCCESS :</b> Upload Berhasil.
                  </p>
                  </center>
                ';
              break;
              case 'e2eu8932dh73q3eh822e2qdq':
                $out = '
                  <center>
                  <p style="color:red;padding:5px;border-radius:3px;">
                    <i class="glyphicon glyphicon-eror"></i>&nbsp; <b>Gagal :</b> Upload gagal.
                  </p>
                  </center>
                ';
        }
?>  


<?php
  if (!empty($_SESSION['admin_email']))
  {
     $admin_email = $_SESSION['admin_email'];
     $_SESSION['admin_email'] = $admin_email;
     $query_validasi = mysqli_query($link,"SELECT * FROM admin WHERE admin_email = '$admin_email'");
     $ambil = mysqli_fetch_assoc($query_validasi);
     extract($ambil);
?>

<div class="container">
    <h1 class="well">Upload Buku</h1>
  <div class="col-lg-12 well">
  <div class="row">
    <form action="upload_act.php" method="POST" enctype="multipart/form-data">
      <?php echo $out; ?>
      <div class="col-sm-12">
      <?php
                $count=mysqli_query($link,"SELECT COUNT(*) FROM buku_admin;");
                $counter=mysqli_fetch_array($count);
                $add = $counter[0] + 1;
                date_default_timezone_set('Asia/Jakarta');
                $tanggal = date("Y-m-d-H:i:s");
                //echo $tanggal;
                // echo "$admin_buku_id";
              ?> 

             <input type="hidden" name="buku_id" value="<?php echo "A_$add"?>" readonly="readonly"> 
             <input type="hidden" name="buku_author" value="<?php echo "$admin_id"?>" readonly="readonly"> 
             <input type="hidden" name="tanggal_upload" value="<?php echo "$tanggal"?>" readonly="readonly">
              <div class="form-group">
                <label>Judul Buku</label>
                <input type="text" name="buku_judul" placeholder="Masukan judul buku..." class="form-control" required>
              </div>

              <div class="row">
              <div class="col-sm-6 form-group">
                <label>Penulis</label>
                <input type="text" name="buku_penulis" placeholder="Masukan penulis..." class="form-control" required>
              </div>

              <div class="col-sm-6 form-group">
                <label>Jenis</label>
                <select class="form-control" name="jenis_buku">
                      <option selected="Teknis">Teknis</option>
                      <option value="Fasilitatif">Fasilitatif</option>
                      <option value="Lain-lain">Lain-lain</option>
                </select>
              </div>
            </div>  
            
              <div class="form-group">
                <label>Kategori</label>
                <br>
                <select name="buku_kategori">
                  <option>--Pilih Kategori--</option>
                  <?php
                    $kategori=mysqli_query($link,"SELECT * FROM kategori ORDER BY kategori_id");
                    while($x=mysqli_fetch_array($kategori))
                    { 
                     echo "<option value=\"$x[kategori_id],$x[kategori_jenis]\"> $x[kategori_jenis] </option>";
                    } 
                  ?>
                </select>
              </div>

               <div class="form-group">
                <label>File</label>
                  <input type="file" name="buku_file" class="form-control" required>
              </div>  

        <div>
          <br>
          <input type="submit" name="button_submit" value="Upload" class="btn btn-success">
          <input type="reset" value="Batal" class="btn btn-danger">
        </div>
      </div>
      
    </form> 
  </div>
  </div>
</div>
<?php 
}elseif($_SESSION['member_email']) {

	 $member_email = $_SESSION['member_email'];
	 $_SESSION['member_email'] = $member_email;
     $query_validasi = mysqli_query($link,"SELECT * FROM member WHERE member_email = '$member_email'");
     $ambil = mysqli_fetch_assoc($query_validasi);
     extract($ambil);
?>

<div class="container">
    <h1 class="well">Upload Buku</h1>
  <div class="col-lg-12 well">
  <div class="row">
    <form action="upload_act.php" method="POST" enctype="multipart/form-data">
      <?php echo $out; ?>
      <div class="col-sm-12">
      <?php

                date_default_timezone_set('Asia/Jakarta');
                $tanggal = date("Y-m-d-H:i:s");

              ?> 

             <input type="hidden" name="buku_author" value="<?php echo "$member_id"?>" readonly="readonly"> 
             <input type="hidden" name="tanggal_upload" value="<?php echo "$tanggal"?>" readonly="readonly">
              <div class="form-group">
                <label>Judul Buku</label>
                <input type="text" name="buku_judul" placeholder="Masukan judul buku..." class="form-control" required>
              </div>

              <div class="row">
              <div class="col-sm-6 form-group">
                <label>Penulis</label>
                <input type="text" name="buku_penulis" placeholder="Masukan penulis..." class="form-control" required>
              </div>

              <div class="col-sm-6 form-group">
                <label>Jenis</label>
                <select class="form-control" name="jenis_buku">
                      <option selected="Teknis">Teknis</option>
                      <option value="Fasilitatif">Fasilitatif</option>
                      <option value="Lain-lain">Lain-lain</option>
                </select>
              </div>
            </div>  
            
              <div class="form-group">
                <label>Kategori</label>
                <br>
                <select name="buku_kategori">
                  <option>--Pilih Kategori--</option>
                  <?php
                    $kategori=mysqli_query($link,"SELECT * FROM kategori ORDER BY kategori_id");
                    while($x=mysqli_fetch_array($kategori))
                    { 
                     echo "<option value=\"$x[kategori_id],$x[kategori_jenis]\"> $x[kategori_jenis] </option>";
                    } 
                  ?>
                </select>
              </div>

               <div class="form-group">
                <label>File</label>
                  <input type="file" name="buku_file" class="form-control" required>
              </div>  

        <div>
          <br>
          <input type="submit" name="button_submit" value="Upload" class="btn btn-success">
          <input type="reset" value="Batal" class="btn btn-danger">
        </div>
      </div>
      
    </form> 
  </div>
  </div>
</div>
<?php> 

<?php }; include "footer.php";?>