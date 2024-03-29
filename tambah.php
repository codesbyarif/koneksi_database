<?php 
require "functions.php";
// koneksi DBMS 

/// cek apakah tombol submit sudah ditekan atau belum?
if(isset($_POST["submit"])){
    // cek apakah data berhasil ditambahkan atau tidak?
    if(tambah($_POST) > 0){
        echo "
        <script>alert('Data berhasil ditambahkan');
        document.location.href = 'index.php';
        </script>
        ";

    }else {
        echo "Data Gagal ditambahkan";
    }
  
}
// source gambar google.com
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Data</title>
    <link rel="stylesheet" href="hias.css">  
</head>
<body>
    <h1>Tambah Data Film</h1>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="tahun">Tahun :</label>
                <input type="text" name="tahun" required id="tahun">
            </li>
            <li>
                <label for="judul">Judul :</label>
                <input type="text" name="judul" required id="judul">
            </li>
            <li>
                <label for="sutradara">Sutradara :</label>
                <input type="text" name="sutradara" required id="sutradara">
            </li>
            <li>
                <label for="bahasa">Bahasa :</label>
                <input type="text" name="bahasa" required id="bahasa">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" required id="gambar">
            </li>
            <br>
            <br>
            <li>
                <button type="submit" name="submit">Simpan</button>
            </li>
        </ul>
    </form>
</body>
</html>



