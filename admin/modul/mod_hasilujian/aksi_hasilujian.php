<?php
error_reporting(0);
session_start();
include "../../../config/koneksi.php";
include "../../../config/fungsi_thumb.php";

$module=$_GET[module];
$act=$_GET[act];

if ($module=='hasilujian' AND $act=='hapus') {
    mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM tbl_nilai WHERE id_nilai='$_GET[id]'");
  header('location:../../media.php?module='.$module);
}

?>