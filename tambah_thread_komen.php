<?php include "header.php"; ?>
<div class="container">
  <h1 class="well">Tambah Komentar</h1>
  <?php
    date_default_timezone_set('Asia/Jakarta');
    $tanggal = date("Y-m-d-H:i:s");
    $no=$_GET['value'];
    $no_thread=$_GET['no'];
    $thread_komen_id = "";
    if(!empty($_SESSION['member_email'])){  
    $query="SELECT member.member_id,member.member_nama,thread.thread_pesan,thread.thread_subjek,thread.tanggal_upload FROM member JOIN thread WHERE member.member_id=thread.thread_id";
    $thread_komen_id = $member_id; 
    } elseif (!empty($_SESSION['admin_email'])) {
    $query="SELECT admin.admin_id,admin.admin_nama,thread.thread_pesan,thread.thread_subjek,thread.tanggal_upload FROM admin JOIN thread WHERE admin.admin_id=thread.thread_id";
    $thread_komen_id = $admin_id;
    }

  ?>
  <div class="col-lg-12 well">
      <form action="proses_save_thread_komen.php" method="POST">
            <div class="form-group">
                <label for="message">Komentar</label>
                  <textarea id="message" name="thread_komen_pesan" placeholder="Silahkan isi komentar disini.." class="form-control" required></textarea>
                  <input type="hidden" name="thread_komen_id" type="text" class="form-control" value="<?php echo $thread_komen_id;?>"/>
                  <input type="hidden" name="thread_komen_datetime" type="text" class="form-control" value="<?php echo $tanggal;?>"/>
                  <input type="hidden" name="no_thread" type="text" class="form-control" value="<?php echo $no_thread;?>"/>                  
            </div>
          <div>
            <br>
            <input type="submit" name="post_thread" class="btn btn-success">
          </div>

      </form>
    </div>
  </div>

<?php include "footer.php";?>