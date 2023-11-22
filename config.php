<?php
$host="localhost";
$user="root";
$pass="";
$db="note";

$conn= mysqli_connect($host,$user,$pass,$db);
// if($conn){
//     echo "Koneksi Berhasil";
// }else{
//     echo "Koneksi Gagal";
// }

mysqli_select_db($conn,$db);
?>