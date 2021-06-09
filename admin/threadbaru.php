<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<?php
    include 'header.php';
?>
<!------ Include the above in your HEAD tag ---------->
    <div class="container">
    <h1 = class="well">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Subjek</th>
                                <th>Tanggal Post</th>
                                <th class="td-actions"> Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
<?php 
//menampilkan data mysqli
  $no = 0;
  $sql=mysqli_query($link,"SELECT admin.admin_id AS thread_id,admin.admin_nama AS nama, thread.no_thread,thread.thread_pesan,thread.thread_subjek,thread.tanggal_upload FROM admin JOIN thread WHERE admin.admin_id=thread.thread_id UNION SELECT member.member_id AS thread_id,member.member_nama AS nama,thread.no_thread,thread.thread_pesan,thread.thread_subjek,thread.tanggal_upload FROM member JOIN thread WHERE member.member_id=thread.thread_id");
  while($r=mysqli_fetch_array($sql)){
  $no++;
  $nomor_thread = $r['no_thread'];
  // if($no<1)
?>
  <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo  $r['nama']; ?></td>
      <td><?php echo  $r['thread_subjek']; ?></td>
      <td><?php echo  $r['tanggal_upload']; ?></td>
      <td>
        <a href="edit_thread.php?thread_id=<?php echo  $nomor_thread;?>&id_thread=<?php echo $r['thread_id']?>&thread_subjek=<?php echo $r['thread_subjek']?>&thread_pesan=<?php echo $r['thread_pesan']?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-edit"></span></a>
        <a href="proses_delete.php?thread_id=<?php echo  $r['no_thread'];?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-trash"></span></a>
        <a href="tampilthread.php?no_thread=<?php echo $nomor_thread;?>&nama=<?php echo $r['nama'];?>" class="btn btn-sm btn-default" onclick="confirm_buku_admin('proses_edit_thread.php?&buku_admin=<?php echo  $r['member_id']; ?>');"><span class="glyphicon glyphicon-eye-open"></span></a>
      </td>
  </tr>
</tbody>
<?php } ?>
</table>
<?php
                if(!empty($_SESSION['member_email']) || (!empty($_SESSION['admin_email'])))
                {
                ?>
                    <tr>

                                <td colspan="5">
                                <a href="tambahthread.php?value=<?php echo $no+1; ?>" input type="submit" name="tambahthread" value="Upload" class="btn btn-success">Tambah baru</a>
                                </td>
                            </tr>
                            <?php } ?> 
                        </tbody>
                        </table>
</h1>
</div>
                    
<?php
    include 'footer.php';
?>