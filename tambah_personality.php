<?php include "header.php"; ?>
<div class="container">
  <h1 class="well">Resume Baru</h1>
  <?php
    date_default_timezone_set('Asia/Jakarta');
    $tanggal = date("Y-m-d H:i:s");
    $no=$_GET['value'];
    $personality_id = "";
    if(!empty($_SESSION['member_email'])){  
    $query="SELECT member.member_id,member.member_nama,personality.isi_personality,personality.personality_tema,personality.tanggal_upload FROM member JOIN personality WHERE member.member_id=personality.personality_id";
    $personality_id = $member_id; 
    } elseif (!empty($_SESSION['admin_email'])) {
    $query="SELECT admin.admin_id,admin.admin_nama,personality.isi_personality,personality.personality_tema,personality.tanggal_upload FROM admin JOIN personality WHERE admin.admin_id=personality.personality_id";
    $personality_id = $admin_id;
    }
    if(date('D') == 'Mon' || date('D') == 'Tue') { 
      $judul_tema = "Manajemen";
    } elseif (date('D') == 'Wed' || date('D') == 'Thu') {
      $judul_tema = "Teknis Subtantif sesuai dengan Tugas dan Fungsi";
    } elseif(date('D') == 'Fri' || date('D') == 'Sat' || date('D') == 'Sun'){
      $judul_tema = "Isu Aktual Kementerian Hukum dan HAM";
    }

  ?>
  <div class="col-lg-12 well">
      <form action="proses_save_personality.php" method="POST">
            <div class="form-group">
              <label>Tema</label>
              <input type="text" name="personality_tema" class="form-control" value="<?php echo"$judul_tema";?>"readonly>
              <input type="hidden" name="personality_id" type="text" class="form-control" value="<?php echo $personality_id;?>"/>
              <input type="hidden" name="tanggal_upload" type="text" class="form-control" value="<?php echo $tanggal;?>"/>
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