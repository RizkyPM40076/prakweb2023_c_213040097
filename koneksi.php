<?php
$koneksi = mysqli_connect("localhost", "root", "", "prakweb2023_c_213040097");
if($koneksi == TRUE){
    //echo "Berhasil Terhubung";
}else{
    echo "Gagal Terhubung";
}