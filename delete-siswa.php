<?php 
include "koneksi.php";

$id=$_GET['id'];

$hapus=mysqli_query($conn, "delete from siswa where id= '$id'");
if ($hapus)
{
    echo "<script>alert('Data Sudah Terhapus'); location.href='index.php';</script>";
}
else {
    echo "<script>alert('Data Tidak Terhapus'); location.href='index.php';</script>";
}

?>