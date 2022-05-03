<?php 

include "koneksi.php";
$id=$_POST['id'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$agama=$_POST['agama'];
$jk=$_POST['jenis_kelamin'];
$jurusan=$_POST['jurusan'];

$simpan=mysqli_query($conn, "UPDATE siswa SET 
nisn='$nisn'nama='$nama', alamat='$alamat', agama='$agama', jenis_kelamin='$jk', jurusan='$jurusan' WHERE id='$id'");
if ($simpan)
{
    echo "<script>alert('Data Sudah Tersimpan'); location.href='index.php';</script>";
}
else {
    echo "<script>alert('Data Tidak Tersimpan'); location.href='index.php';</script>";
}

?>

?>