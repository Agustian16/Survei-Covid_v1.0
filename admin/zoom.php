<?php
  include "../config/koneksi.php";
        $view=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM tbl_soal WHERE id_soal='$_GET[id]'");
        $t=mysqli_fetch_array($view);
        echo "<h2>Soal :</h2>
        $t[soal]</br>";
          if ($t['gambar']!=''){
              echo "<img src='../foto/$t[gambar]'>";  
          }
        echo"<h2>Jawaban :</h2>
        a. $t[a] </br>
        b. $t[b] </br>";
        echo "<h2>Kunci Jawaban Soal : $t[knc_jawaban]</h2>";

?>
