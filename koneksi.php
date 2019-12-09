<?php

$koneksi = new mysqli('localhost','root','','pasar');

if ($koneksi->connect_error){
    echo "GAGAL KONEKSI KE DATABASE : (" . $koneksi -> connect_error . ")";
}