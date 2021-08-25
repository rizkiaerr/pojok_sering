<head>
<?php 
//    include 'cek.php';
  include 'header.php';
?>

<div class="container">
  <h2>Daftar Upload Buku Admin</h2>

  <form action="cari.php?" method="POST">
  <input type="text" name="txt_cari" placeholder="cari berdasarkan ..... "></input>
  <input type="submit" class="btn btn-sm btn-default" value="Cari"></input>
  </form>

<table id="mytable" class="table table-bordered">
    <thead>
      <th>no</th>
      <th>Judul</th>
      <th>Penulis</th>
      <th>Author</th>
      <th>Kategori</th>
      <th>Jenis</th>
      <th>Tgl Upload</th>
      <th>Aksi</th>
    </thead>
<?php 
  //menampilkan data mysqli
  $no = 0;
  $sql=mysqli_query($link,"SELECT buku_admin.*,admin.admin_nama,kategori.kategori_jenis FROM buku_admin,admin,kategori WHERE buku_admin.buku_author=admin.admin_id AND buku_admin.buku_kategori=kategori.kategori_id");
  while($r=mysqli_fetch_array($sql)){
  $no++;       
?>
  <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo  $r['buku_judul']; ?></td>
      <td><?php echo  $r['buku_penulis']; ?></td>
      <td><?php echo  $r['admin_nama']; ?></td>
      <td><?php echo  $r['kategori_jenis']; ?></td>
      <td><?php echo  $r['buku_jenis']; ?></td>
      <td><?php echo  date('d F Y',strtotime($r['tanggal_upload'])); ?></td>
      <td>
        <a href="baca.php?kategori=<?php echo"$r[buku_kategori]" ?>&judul=<?php echo"$r[buku_judul]" ?>&nama=<?php echo"$r[admin_nama]" ?>"><span class="glyphicon glyphicon-eye-open"></span></a>
      </td>
  </tr>
<?php } ?>
</table>
</div>

<hr>

<!-- unutuk member -->
<div class="container">
  <h2>Daftar Upload Buku Member</h2>

  <form action="cari.php?" method="POST">
  <input type="text" name="txt_cari" placeholder="cari berdasarkan ..... "></input>
  <input type="submit" class="btn btn-sm btn-default" value="Cari"></input>
  </form>

<table id="mytable" class="table table-bordered">
    <thead>
      <th>No</th>
      <th>Judul</th>
      <th>Penulis</th>
      <th>Uploader</th>
      <th>Kategori</th>
      <th>Jenis</th>
      <th colspan=3>Aksi</th>
    </thead>
<?php 
  //menampilkan data mysqli
  $no = 0;
  $sql=mysqli_query($link,"SELECT buku.*,member.member_nama,member.member_email,kategori.kategori_jenis FROM buku,member,kategori WHERE buku.buku_author=member.member_id AND buku.buku_kategori=kategori.kategori_id");
  while($r=mysqli_fetch_array($sql)){
  $no++;       
?>
  <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo  $r['buku_judul']; ?></td>
      <td><?php echo  $r['buku_penulis']; ?></td>
      <td><?php echo  $r['member_nama']; ?></td>
      <td><?php echo  $r['kategori_jenis']; ?></td>
      <td><?php echo  $r['buku_jenis']; ?></td>
      <td>
        <a href="baca.php?kategori=<?php echo"$r[buku_kategori]" ?>&judul=<?php echo"$r[buku_judul]" ?>&nama=<?php echo"$r[member_nama]" ?>"><span class="glyphicon glyphicon-eye-open"></span></a>
      </td>
      <?php 
      if(!empty($_SESSION['member_email']) && ($_SESSION['member_email']) == $r['member_email']){?>
      <td>
        <a href="proses_delete_buku.php?buku_id=<?php echo  $r['buku_id']; ?>&buku_judul=<?php echo  $r['buku_judul']; ?>&buku_kategori=<?php echo  $r['buku_kategori']; ?>"><span class="glyphicon glyphicon-trash"></span></a>   
      </td>
      <td>
        <a href="edit_buku.php?buku_id=<?php echo  $r['buku_id']; ?>&buku_judul=<?php echo  $r['buku_judul']; ?>&buku_penulis=<?php echo  $r['buku_penulis']; ?>&kategori=<?php echo  $r['kategori_jenis']?>"><span class="glyphicon glyphicon-pencil"></span></a>   
      </td>
      <?php }?>
  </tr>
<?php } ?>
</table>
</div>

<!-- Modal Popup untuk Edit--> 
<div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

</div>

<!-- Modal Popup untuk delete--> 
<div class="modal fade" id="modal_delete">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top:100px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="text-align:center;">Apakah anda yakin akan menghapus data ini? ?</h4>
      </div>
                
      <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
        <a href="#" class="btn btn-danger" id="delete_link">Delete</a>
        <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<!-- Javascript untuk popup modal Edit Buku Admin--> 
<script type="text/javascript">
   $(document).ready(function () {
   $(".open_buku_admin").click(function(e) {
      var m = $(this).attr("id");
		   $.ajax({
    			   url: "modal_edit.php",
    			   type: "GET",
    			   data : {buku_id: m,},
    			   success: function (ajaxData){
      			   $("#ModalEdit").html(ajaxData);
      			   $("#ModalEdit").modal('show',{backdrop: 'true'});
      		   }
    		   });
        });
      });
</script>

<!-- Javascript untuk popup modal Edit Buku Member--> 
<script type="text/javascript">
   $(document).ready(function () {
   $(".open_buku_member").click(function(e) {
      var m = $(this).attr("id");
       $.ajax({
             url: "modal_edit.php",
             type: "GET",
             data : {buku_id: m,},
             success: function (ajaxData){
               $("#ModalEdit").html(ajaxData);
               $("#ModalEdit").modal('show',{backdrop: 'true'});
             }
           });
        });
      });
</script>

<!-- Javascript untuk popup modal Delete--> 
<script type="text/javascript">
    function confirm_buku_member(delete_url)
    {
      $('#modal_delete').modal('show', {backdrop: 'static'});
      document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
    
</script>

<!-- Javascript untuk popup modal Delete--> 
<script type="text/javascript">
    function confirm_buku_admin(delete_url)
    {
      $('#modal_delete').modal('show', {backdrop: 'static'});
      document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
    
</script>


<?php
  include "footer.php";
?>



