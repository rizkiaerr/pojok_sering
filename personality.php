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
                                <th>Judul Tema</th>
                                <th>Tanggal Post</th>
                                <th class="td-actions"> Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
<?php 
//menampilkan data mysqli
  $no = 0;
  $sql=mysqli_query($link,"SELECT admin.admin_id AS personality_id,admin.admin_nama AS nama, admin.admin_email AS email, personality.no_personality,personality.isi_personality,personality.personality_tema,personality.tanggal_upload FROM admin JOIN personality WHERE admin.admin_id=personality.personality_id UNION SELECT member.member_id AS personality_id,member.member_nama AS nama, member.member_email AS email, personality.no_personality,personality.isi_personality,personality.personality_tema,personality.tanggal_upload FROM member JOIN personality WHERE member.member_id=personality.personality_id");
  while($r=mysqli_fetch_array($sql)){
  $no++;
  $nomor_personality = $r['no_personality'];
  // if($no<1)
?>
  <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo  $r['nama']; ?></td>
      <td><?php echo  $r['personality_tema']; ?></td>
      <td><?php echo  $r['tanggal_upload']; ?></td>
      <td>
       <a href="tampilpersonality.php?no_personality=<?php echo $nomor_personality;?>&nama=<?php echo $r['nama'];?>" class="btn btn-sm btn-default" ><span class="glyphicon glyphicon-eye-open"></span></a>
        <?php
        if(!empty($_SESSION['member_email']) && ($_SESSION['member_email']) == $r['email'] || (!empty($_SESSION['admin_email'])))
                { ?>
        <a href="edit_personality.php?no_personality=<?php echo  $nomor_personality;?>&personality_id=<?php echo $r['personality_id']?>&personality_tema=<?php echo $r['personality_tema']?>&isi_personality=<?php echo $r['isi_personality']?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-edit"></span></a>
        <a href="proses_delete_personality.php?no_personality=<?php echo  $r['no_personality'];?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-trash"></span></a>
        <a href="tampilpersonality.php?no_personality=<?php echo $nomor_personality;?>&nama=<?php echo $r['nama'];?>" class="btn btn-sm btn-default" ><span class="glyphicon glyphicon-eye-open"></span></a>
    <?php }?>
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
                                <a href="tambah_personality.php?value=<?php echo $no+1; ?>" input type="submit" name="tambahpersonality" value="Upload" class="btn btn-success">Tambah baru</a>
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