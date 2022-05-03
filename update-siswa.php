<?php 
include "koneksi.php";
$id = $_GET['kode'];

$query = mysqli_query($conn, "SELECT * FROM siswa WHERE id = '$id'");
$hasil = mysqli_fetch_assoc($query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Update</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>
    <style>
        body {
            background-color: #EFEFEF;
        }
        form {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            border-radius: 10px;
            background-color: white;
            width: auto;
             height: 320px; 
            margin-right: 350px;
            margin-left: 350px;
            margin-top: 150px;
            margin-bottom: 50px;
            padding-top: 0;
            padding-bottom: 50px;
        }
        .nama input {
            height: 20px;
        }
        .nomer input {
            height: 20px;
        }
        .telpn input {
            height: 20px;
        }
        .nama {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .nama p {
            font-family: "Poppins";
            width: 250px;
        }
        .telpn {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .telpn p {
            font-family: "Poppins";
            width: 250px;
        }
        .nomer {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .nomer p {
            font-family: "Poppins";
            width: 250px;
        }
        .tombol {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 140px;
            margin-top: 50px;
            margin-bottom: 60px;
            font-family: "Poppins";
            padding: 10px;
            border-radius: 20px;
            color: white;
            background-color: lightgreen;
        }
        h4 {
            font-family: "Oswald";
            font-size: 25px;
            margin-top: 110px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

<form action="proses-update.php" method="post">
            <h4>Form pendaftaran</h4>
            <div class="nama">
            <p>Masukkan NISN :</p>
            <input type="text" name="nisn"> <br>
            </div> 
            <div class="nama">
            <p>Masukkan Nama :</p>
            <input type="text" name="nisn"> <br>
            </div> 
            <div class="nama">
            <p>Masukkan Alamat :</p>
            <input type="text" name="alamat"> <br>
            </div> 
            <div class="nama">
            <p>Pilih Agama :</p>
            <select name="agama" id="">
                <option value="">Pilih</option>
                <option value="hindu">Hindu</option>
                <option value="islam">Islam</option>
                <option value="budha">Budha</option>
                <option value="konghucu">Konghucu</option>
                <option value="kristen">Kristen</option>
                <option value="kristenp">Kristem Protestan</option>
            </select>
            </div> 
            <div class="nama">
            <p>Pilih Jenis Kelamin :</p>
            <input type="radio" name="jenis_kelamin" value="laki"/>Laki-Laki 
            <input type="radio" name="jenis_kelamin" value="perempuan"/>Perempuan             
            <br>
            </div> 
            <div class="telpn">
            <p>Pilih Jurusan</p>
            <select name="jurusan" id="">
                <option value="">Pilih</option>
                <option value="rpl">Rekayasa Perangkat Lunak</option>
                <option value="mm">Multimedia</option>
                <option value="an">Animasi</option>
                <option value="tkj">Teknik Komputer dan Jaringan</option>
                <option value="dkv">Desain Komunikasi Visual</option>
            </select>

            <br>
            </div>
            <input class="tombol" type="submit" name="Simpat" value="Simpan">


        </form>    
    

</body>
</html>