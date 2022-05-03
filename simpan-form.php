<?php 
include "koneksi.php";

$nisn=$_POST['nisn'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$agama=$_POST['agama'];
$jk=$_POST['jenis_kelamin'];
$jurusan=$_POST['jurusan'];

$simpan=mysqli_query($conn, "insert into siswa value('','$nisn','$nama','$alamat','$agama','$jk','$jurusan')");
if ($simpan)
{
    echo "<script>alert('Data Sudah Tersimpan'); location.href='index.php';</script>";
}
else {
    echo "<script>alert('Data Tidak Tersimpan'); location.href='index.php';</script>";
}

?>