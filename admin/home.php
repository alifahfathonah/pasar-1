<?php
session_start();
if(!$_SESSION['user_login']){
    ?>
<script>
    alert('Login dulu')
    document.location = 'index.php';
</script>
<?php
}else{
    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda</title>
</head>
<body>
    <h4>BERHASIL</h4>
</body>
</html>
<?php
}
?>