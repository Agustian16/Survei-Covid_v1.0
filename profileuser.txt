 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                      <!--   <h3 class="page-header"> Peraturan </h3> -->

                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                           Penggalangan Donasi untuk Mencegah Penyebaran Covid-19
                        </div>
                        <div class="panel-body">
                        
<?php
    include "config/koneksi.php";
    $qry=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM tbl_user WHERE id_user='$_SESSION[iduser]'");
    $t=mysqli_fetch_array($qry);

  if(isset($_POST['submit'])){
    $update="UPDATE tbl_user set username='".$_POST['username']."',password='".md5($_POST['password'])."',nama='".$_POST['nama']."',tgl_lahir='".$_POST['tgl_lahir']."',jk='".$_POST['jk']."',agama='".$_POST['agama']."',kwgn='".$_POST['kwgn']."',nama_ayah='".$_POST['nama_ayah']."',pekerjaan_ayah='".$_POST['pekerjaan_ayah']."',nama_ibu='".$_POST['nama_ibu']."',sekolah_asal='".$_POST['sekolah_asal']."',telp='".$_POST['telp']."',alamat='".$_POST['alamat']."' where id_user='".$_SESSION['iduser']."' ";
    mysqli_query($GLOBALS["___mysqli_ston"], $update);
  
    echo '<script language="javascript">
    alert("Anda Berhasil Merubah data");
    window.location="media.php?hal=profiluser";
    </script>';
    exit();
}
?>

<form name="form1" method="post" action="">
  <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?php echo $t['username'] ?>">

                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                                </div>

                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="<?php echo $t['nama'] ?>">
                                </div>

                                <div class="form-group">
                                    <label>Tgl Lahir</label>
                                    <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="YYYY-MM-DD" value="<?php echo $t['tgl_lahir'] ?>">
                                </div>

                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select name="jk" id="jk" class="form-control">
                                      <option selected>----Pilih----</option>
                                      <option value="Laki-Laki">Laki-Laki</option>
                                      <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label>Telp</label>
                                    <input type="text" class="form-control" id="telp" name="telp" placeholder="Telpon" value="<?php echo $t['telp'] ?>">
                                </div>

                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="alamat" class="form-control" cols="30" rows="4" id="alamat"><?php echo $t['alamat'] ?></textarea>
                                </div>

                                <input type="submit"  class="btn btn-lg btn-success btn-block" name="submit" value="Kirim">

</form>
 </div>
                        <div class="panel-footer">
                           
                        </div>
                    </div>
                    </div>    
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

<script type="text/javascript">
  var $ = jQuery;
  $('#jk').val('<?php echo $t['jk'];?>');
  $('#agama').val('<?php echo $t['agama'];?>');
  $('#kwgn').val('<?php echo $t['kwgn'];?>');

</script>      