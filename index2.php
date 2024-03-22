<?php 
// koneksi ke database
$koneksi = mysqli_connect("localhost","root","","mahasiswa");

// ambil data dari tabel data_mhs/ query data mahasiswa
$result = mysqli_query($koneksi,"SELECT * FROM data_mhs");

// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array associatif
// mysqli_fetch_array() // mengambalikan array array numerik dan associatif
// mysqli_fetch_object() //mengembalikan sebuah object
// while($mhs = mysqli_fetch_assoc($result)){
//     var_dump($mhs["nama"]);

// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Email</th>
        </tr>
        <?php $i = 1;?>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?=$i?></td>
            <td>
                <a href="">ubah</a>
                <a href="">hapus</a>
            </td>
            <td>
                <img src="img/<?= $row['gambar']?>" alt="" width="50">
            </td>
            <td><?= $row['nim']?></td>
            <td><?= $row['nama']?></td>
            <td><?= $row['jurusan']?></td>
            <td><?= $row['email']?></td>
          
        </tr>
        <?php $i++;?>
        <?php endwhile; ?>
    </table>
</body>
</html>