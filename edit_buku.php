<?php include "header.php"; ?>
<div class=container>
<h1 class="well">Edit Buku</h1>
    <div class="form-group">
        <form action="proses_edit_buku.php" method="POST" enctype="multipart/form-data">
            <label>Judul Buku</label>
            <input type="text" name="buku_judul" value="<?php echo $_GET['buku_judul'] ?>" class="form-control" required>
            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Penulis</label>
                <input type="text" name="buku_penulis" value="<?php echo $_GET['buku_penulis'] ?>" class="form-control" required>
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
                  <option><?php echo $_GET['kategori']?></option>
                  <?php
                    $kategori=mysqli_query($link,"SELECT * FROM kategori ORDER BY kategori_id");
                    while($x=mysqli_fetch_array($kategori))
                    {
                     echo "<option value=\"$x[kategori_id],$x[kategori_jenis]\"> $x[kategori_jenis] </option>";
                    } 
                  ?>
                </select>
            </div>

        <div>
          <br>
          <input type="submit" name="button_submit" value="Edit" class="btn btn-success">
          <input type="reset" value="Batal" class="btn btn-danger">
        </div>
        </form>  
    </div>
                </div>
      
     

<?php include "footer.php";?>