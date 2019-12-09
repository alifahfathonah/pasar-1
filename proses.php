<?php
//include "koneksi.php";
//$id = $_POST['no'];
//$namaBuah = $_POST['nama_buah'];
//$jenisBuah = $_POST['jenis_buah'];
//$stokBuah = $_POST['stok_buah'];
//$hargaBuah = $_POST['harga_buah'];
//
//$simpan = "INSERT INTO tb_buah VALUES ('$namaBuah','$jenisBuah','$stokBuah','$hargaBuah')";
//
//
//if (mysqli_query($koneksi,$simpan)){
//    echo "DATA BERHASIL DI TAMBAHKAN" ;
//    header('location: daftar_buah.php');
//}else{
//    echo "Lapor!!! Ada Error di". mysqli_error($koneksi);
//}



$mysqli = new mysqli('localhost','root','','pasar') or die(mysqli_error($mysqli));


session_start();
$update=false;
$namaBuah = "";
$jenisBuah = "";
$stokBuah = "";
$hargaBuah = "";
$id=0;
if (isset($_POST['save'])) {
    $namaBuah = $_POST['nama_buah'];
    $jenisBuah = $_POST['jenis_buahrx'];
    $stokBuah = $_POST['stok_buahy'];
    $hargaBuah = $_POST['harga_buah'];

    $tmpName = $_FILES['gambar']['tmp_name'];
    $folder = "img/".$_FILES['gambar']['name'];
    $upload = move_uploaded_file($tmpName, $folder);
    $mysqli ->query("INSERT INTO tb_buah(nama_buah, jenis_buah, stok_buah,harga_buah, foto) VALUES('$namaBuah','$jenisBuah',$stokBuah,$hargaBuah,'$folder')") or die($mysqli->error);

    $_SESSION['message'] = "Record Has been saved!";
    $_SESSION['msg_type']= "success";
    header("location: tambah_buah.php");
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM tb_buah WHERE id=$id") or die($mysqli->error());
    $_SESSION['message'] = "Record Has been deleted!";
    $_SESSION['msg_type']= "danger";
    header("location: tambah_buah.php");
}
if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update=true;
    $result=$mysqli->query("SELECT * FROM tb_buah WHERE id=$id") or die($mysqli->error());
    $arr = $result->fetch_array();
    if (sizeof($arr) >= 1){
        $namaBuah = $arr['nama_buah'];
        $jenisBuah = $arr['jenis_buah'];
        $stokBuah = $arr['stok_buah'];
        $hargaBuah = $arr['harga_buah'];
    }
}

if (isset($_POST['update'])){
    $id = $_POST['id'];
    $namaBuah = $_POST['nama_buah'];
    $jenisBuah = $_POST['jenis_buahrx'];
    $stokBuah = $_POST['stok_buahy'];
    $hargaBuah = $_POST['harga_buah'];

    $mysqli->query("UPDATE tb_buah SET nama_buah='$namaBuah', jenis_buah='$jenisBuah', stok_buah=$stokBuah,harga_buah=$hargaBuah WHERE id=$id") or die($mysqli->error);
    $_SESSION['message']= "Record Has been update";
    $_SESSION['msg_type']="warning";
    header('location: tambah_buah.php');
}