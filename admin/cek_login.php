<?php
include "../config/koneksi.php";

$username=($_POST['username']);
$password=($_POST['password']);


$login=mysqli_query($koneksi,"SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'");
$found=mysqli_num_rows($login);
$r=mysqli_fetch_array($login);

if ($found > 0) {
    session_start();
    $_SESSION[username]= $r[username];
    $_SESSION[idadmin]= $r[id_admin];
    header('location:media.php?module=home');
}
else {
    echo '<script language="javascript">
    alert("Userid atau Password Yang anda Masukkan Salah atau Acount Sudah Diblokir");
    window.location="index.php";
    </script>';
    exit();
}
?>