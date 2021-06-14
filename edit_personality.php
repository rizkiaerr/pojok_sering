<?php include "header.php"; ?>
<div class="container">
  <h1 class="well">Resume Baru</h1>
  <?php
    $no_personality   = $_GET['no_personality'];
    $personality_id   = $_GET['personality_id'];
    $personality_tema = $_GET['personality_tema'];

  ?>
  <div class="col-lg-12 well">
      <form action="proses_edit_personality.php" method="POST">
            <div class="form-group">
              <label>Tema</label>
              <input type="text" name="personality_tema" class="form-control" value="<?php echo"$personality_tema";?>"readonly>
              <input type="hidden" name="personality_id" type="text" class="form-control" value="<?php echo $personality_id;?>"/>
              <input type="hidden" name="no_personality" type="text" class="form-control" value="<?php echo $no_personality;?>"/>
            </div>
            <div class="form-group">
                <label for="message">Isi Resume</label>
                <textarea id="message" name="isi_personality" placeholder="Masukan resume disini.." class="form-control" required></textarea>
            </div>
          <div>
            <br>
            <input type="submit" name="post_thread" class="btn btn-success">
          </div>

      </form>
    </div>
  </div>

<?php include "footer.php";?>