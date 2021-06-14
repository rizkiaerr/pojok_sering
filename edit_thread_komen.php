<?php include "header.php"; ?>
<div class="container">
  <h1 class="well">Edit Komentar</h1>
  <?php
    date_default_timezone_set('Asia/Jakarta');
    $no_thread_komen=$_GET['nomor'];
    $thread_komen_id=$_GET['no'];

  ?>
  <div class="col-lg-12 well">
      <form action="proses_edit_thread_komen.php" method="POST">
            <div class="form-group">
                <label for="message">Komentar</label>
                  <textarea id="message" name="thread_komen_pesan" placeholder="Silahkan isi komentar disini.." class="form-control" required></textarea>
                  <input type="hidden" name="no_thread_komen" type="text" class="form-control" value="<?php echo $no_thread_komen;?>"/>
                  <input type="hidden" name="thread_komen_id" type="text" class="form-control" value="<?php echo $thread_komen_id;?>"/>                  
            </div>
          <div>
            <br>
            <input type="submit" name="post_thread" class="btn btn-success">
          </div>

      </form>
    </div>
  </div>

<?php include "footer.php";?>