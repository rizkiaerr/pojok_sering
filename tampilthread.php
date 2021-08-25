<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="../datatables/css/zigzag.css" rel="stylesheet" type="text/css" >
<?php 
  include 'header.php';
?>
<!------ Include the above in your HEAD tag ---------->
<?php
if (isset($_GET['no_thread'])){ 
$no_thread = $_GET['no_thread'];
$nama = $_GET['nama'];
}
$tampilan_header=mysqli_query($link,"SELECT thread.no_thread,thread.thread_subjek,thread.thread_pesan FROM thread WHERE thread.no_thread = '$no_thread' ");
$header=mysqli_fetch_array($tampilan_header);
$query=mysqli_query($link,"SELECT * FROM (SELECT admin.admin_id AS thread_komen_id,admin.admin_nama AS nama, admin.admin_foto AS foto, admin.admin_email AS email FROM admin UNION SELECT member.member_id AS thread_komen_id,member.member_nama AS nama, member.member_foto AS foto, member.member_email AS email FROM member) hasil INNER JOIN thread_komen ON thread_komen.thread_komen_id=hasil.thread_komen_id AND thread_komen.no_thread ='$no_thread' ORDER BY thread_komen.thread_komen_tanggal;");
$count=mysqli_query($link,"SELECT COUNT(*) FROM thread_komen;");
$count_komen=mysqli_query($link,"SELECT COUNT(*) FROM thread_komen WHERE thread_komen.no_thread= '$no_thread';");
$hitungan=mysqli_fetch_array($count);
$hitungan_komen=mysqli_fetch_array($count_komen);

?>
<br><br><br>
<div class="container">
    <div class="row">
        <div class="panel panel-default widget">
            <div class="panel-heading">
                <h4>
                <span class="glyphicon glyphicon-comment"></span>
                <span class="label label-info">
                    <?php echo $header['thread_subjek'];?></span>
                    <span class="panel-title">
                    <?php echo $nama?></span>
            </h4>
            </div>
            <div class="panel-body">
                <ul class="list-group">
                    <li class="list-group-item">
                          <div class="comment-text">
                              <?php echo $header['thread_pesan']; ?>
                         </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

<?php 
?>     
<div class="container">
    <div class="row">
        <div class="panel panel-default widget">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-comment"></span>
                <span class="panel-title">Jumlah Komentar</span>
                <span class="label label-info"><?php echo $hitungan_komen[0];?></span>
            </div>
            <div class="panel-body">
<?php
        if($hitungan_komen[0]==0){
          echo "Komentar masih Kosong, Silahkan untuk berkomentar";  
        }else {
                    while($result_komen=mysqli_fetch_array($query)){
    ?>
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xs-2 col-md-1">
                                <?php echo "<img class='img-circle img-responsive' src='foto/".$result_komen['foto']."' />"; ?></div>
                            <div class="col-xs-10 col-md-11">
                                <div>
                                    <div class="mic-info">
                                        Oleh: <?php echo $result_komen['nama']; ?> (<?php echo $result_komen['thread_komen_tanggal'];?>)
                                    </div>
                                </div>
                                <div class="comment-text">
                                    <?php echo $result_komen['thread_komen_pesan'];?>
                                </div>
                                <div class="action">
                                <?php    if(!empty($_SESSION['member_email']) && ($_SESSION['member_email']) == $result_komen['email'])
                                    { ?> 
                                    <a href="edit_thread_komen.php?nomor=<?php echo $result_komen['no_thread_komen'];?>&no=<?php echo $result_komen['thread_komen_id'];?>" role="button">
                                        <button type="button" class="btn btn-success btn-xs" title="Edit">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </button>
                                    </a>
                                    <a href="proses_delete_thread_komen.php?nomor=<?php echo $result_komen['no_thread_komen'];?>" role="button">
                                    <button type="button" class="btn btn-danger btn-xs" title="Delete">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </button>
                                    </a>
                                  <?php } ?>  
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
          <?php }

      }?>
                
            </div>


        </div>

    </div>
    <?php 
    if (!empty($_SESSION['member_email']) || !empty($_SESSION['admin_email'])){?>
        <a href="tambah_thread_komen.php?value=<?php echo $hitungan[0]+1; ?>&no=<?php echo $header['no_thread']?>" class="btn btn-primary" role="button">+ Tambah Komentar</a>
        <?php 
    }?>        
</div> 



  <?php
    include 'footer.php';
  ?>