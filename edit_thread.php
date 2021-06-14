<?php include "header.php"; ?>
<div class="container">
  <h1 class="well">Edit Thread</h1>
  <?php
    date_default_timezone_set('Asia/Jakarta');
    $edit_tanggal = date("Y-m-d-h:i:s");
    $thread_subjek = $_GET['thread_subjek'];
    $edit_no_thread = $_GET['thread_id'];
    $thread_pesan = $_GET['thread_pesan'];

  ?>
  <div class="col-lg-12 well">
      <form action="proses_edit_thread.php" method="POST">
            <div class="form-group">
              <label>Subjek</label>
              <input type="text" name="thread_subjek" placeholder="<?php echo $thread_subjek?>" class="form-control" required>
              <input type="hidden" name="thread_id" type="text" class="form-control" value="<?php echo $thread_id;?>"/>
              <input type="hidden" name="no_thread" type="text" class="form-control" value="<?php echo $edit_no_thread;?>"/>
              <input type="hidden" name="thread_datetime" type="text" class="form-control" value="<?php echo $edit_tanggal;?>"/>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="edit_thread_pesan" placeholder="<?php echo $thread_pesan; ?>" class="form-control" required></textarea>
            </div>
          <div>
            <br>
            <input type="submit" name="edit_post_thread" class="btn btn-success">
          </div>

      </form>
    </div>
  </div>

<?php include "footer.php";?>