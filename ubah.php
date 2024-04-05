<?php 
// koneksi DBMS 
require "functions.php";

//ambil data di URL
$id = $_GET["id"];
// query data mahasiswa berdasarkan id
$film = query("SELECT * FROM data_film WHERE id = $id")[0];
/// cek apakah tombol submit sudah ditekan atau belum?
if(isset($_POST["submit"])){
    // cek apakah data berhasil diubah atau tidak?
    if(ubah($_POST) > 0){
        echo "
        <script>alert('Data berhasil diubah');
        document.location.href = 'index.php';
        </script>
        ";

    }else {
        echo "Data Gagal diubah";
    }
  
}
// source gambar google.com
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Ubah Data</title>
    <link rel="stylesheet" href="hias.css">  
</head>
<body>
    <h1>Ubah Data Film</h1>
    <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $film["id"];?>">
        <ul>
          
            <li>
                <label for="tahun">Tahun :</label>
                <input type="text" name="tahun" required id="tahun" value="<?= $film["tahun"];?>">
            </li>
            <li>
                <label for="judul">Judul :</label>
                <input type="text" name="judul" required id="judul" value="<?= $film["judul"];?>">
            </li>
            <li>
                <label for="sutradara">Sutradara :</label>
                <input type="text" name="sutradara" required id="sutradara" value="<?= $film["sutradara"];?>">
            </li>
            <li>
                <label for="bahasa">Bahasa :</label>
                <input type="text" name="bahasa" required id="bahasa" value="<?= $film["bahasa"];?>">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" required id="gambar" value="<?= $film["gambar"];?>">
            </li>
            <br>
            <br>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>



