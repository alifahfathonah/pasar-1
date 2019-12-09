<?php
include '../koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$ency = md5($password);
$cek_admin = $koneksi->query("SELECT username FROM tb_ser WHERE username = '$username' AND password='$ency'");


if(($cek_admin->num_rows>1)){
    session_start();
    $_SESSION['user_login']=$username;
    header("location:home.php");
}else {
    ?>
    <script>
        alert('Gagal Login');
        document.location = "index.php";
    </script>
    <?php
}
?>
