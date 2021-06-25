<?php include "header.php"; ?>
<div class="container">
  <h1 class="well">Edit Komentar</h1>
  <?php
    date_default_timezone_set('Asia/Jakarta');
    $no_personality_komen=$_GET['nomor'];
    $personality_komen_id=$_GET['no'];

  ?>
  <div class="col-lg-12 well">
      <form action="proses_edit_personality_komen.php" method="POST">
            <div class="form-group">
                <label for="message">Komentar</label>
                  <textarea id="message" name="personality_komen_pesan" placeholder="Silahkan isi komentar disini.." class="form-control" required></textarea>
                  <input type="hidden" name="no_personality_komen" type="text" class="form-control" value="<?php echo $no_personality_komen;?>"/>
                  <input type="hidden" name="personality_komen_id" type="text" class="form-control" value="<?php echo $personality_komen_id;?>"/>                  
            </div>
          <div>
            <br>
            <input type="submit" name="post_thread" class="btn btn-success">
          </div>

      </form>
    </div>
  </div>

<?php include "footer.php";?>