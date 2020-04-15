

        <!-- Page Content -->
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
                           Tentang Covid-19
                        </div>
                        <div class="panel-body">
                          
<?php
$result=mysqli_query($GLOBALS["___mysqli_ston"], "select * from tbl_soal WHERE aktif='Y'");
$hitung=mysqli_num_rows($result);
         $qry=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM tbl_pengaturan_ujian");
         $r=mysqli_fetch_array($qry);
          
        echo "
      
        <p/>
        <h2>INFORMASI MENGENAI COVID-19</h2><br/>
        $r[peraturan]<br/>
        ";
        //<h3 align='center'>$r[nama_ujian]</h3><br/> ------> ini line dari 29 setelah echo!!
        //Waktu Pengerjaan : $r[waktu] menit<br/>
        //Jumlah Soal : $hitung<br/>
?>
<script>
 function cekForm() {
    if (!document.fValidate.agree.checked) {
                alert("Anda belum menyetujui!");
                return false;
            } else {
                location.href="?hal=soal";
            }
        }
</script>
<form name="fValidate">
<input type="checkbox" name="agree" id="agree" value="1"> Saya Mengerti dan Siap Untuk Mengikuti Survei Virus Covid-19<br/><br/>
          <div style='text-align:center;'><input type="button" name="button-ok" class="btn btn-primary" value="MULAI SURVEI" onclick="cekForm()"></div>
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
        <!-- /#page-wrapper -->
               