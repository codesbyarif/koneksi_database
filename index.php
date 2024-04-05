<?php 
require'functions.php';
$film = query("SELECT * FROM data_film");

// tombol cari ditekan?
if(isset($_POST["cari"])){
    $film = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="hias.css">
</head>
<body>
    <h1>Daftar Film</h1>
    <a href="tambah.php">Tambah Data Film</a>
    <br><br>

    <form action="" method="POST">
    <input type="text" name="keyword" size="30" autofocus placeholder="Masukkan kata kunci pencarian" autocomplete="off">
    <button type="submit" name="cari">Cari</button>
    </form>
    <br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Tahun</th>
            <th>Judul</th>
            <th>Bahasa</th>
            <th>Sutradara</th>
        </tr>
        <?php $i = 1;?>
        <?php foreach ($film as $row ): ?>
        <tr>
            <td><?=$i?></td>
            <td>
                <a href="ubah.php?id=<?= $row['id'];?>">ubah</a> |
                <a href="hapus.php?id=<?= $row['id'];?>">hapus</a>
            </td>
            <td>
                <img src="img/<?= $row['gambar']?>" alt="" width="50">
            </td>
            <td><?= $row['tahun']?></td>
            <td><?= $row['judul']?></td>
            <td><?= $row['bahasa']?></td>
            <td><?= $row['sutradara']?></td>
          
        </tr>
        <?php $i++;?>
        <?php endforeach; ?>
    </table>
</body>
</html>

