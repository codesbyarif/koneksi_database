<?php

$koneksi = mysqli_connect("localhost","root","","film");
function query ($query){
    global $koneksi;
    $result = mysqli_query($koneksi,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;

}

function tambah($data){
    global $koneksi;
    $judul = htmlspecialchars($data["judul"]);
    $tahun = htmlspecialchars($data["tahun"]);
    $sutradara = htmlspecialchars($data["sutradara"]);
    $bahasa = htmlspecialchars($data["bahasa"]);
    $gambar = htmlspecialchars($data["gambar"]);

       //query insert ke database
       $query = "INSERT INTO data_film VALUES(DEFAULT,'$judul','$tahun','$sutradara','$bahasa','$gambar')";

       mysqli_query($koneksi,$query);
       return mysqli_affected_rows($koneksi);
}

function hapus($id){
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM data_film WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}


function cari($keyword){
    $query = "SELECT * FROM data_film
                WHERE 
                judul LIKE '%$keyword%' OR
                tahun LIKE '%$keyword%' OR
                bahasa LIKE '%$keyword%' OR
                sutradara LIKE '%$keyword%'
               
    ";
    return query($query);
}

function ubah($data){
    global $koneksi;
    $id = $data["id"];
    $judul = htmlspecialchars($data["judul"]);
    $tahun = htmlspecialchars($data["tahun"]);
    $sutradara = htmlspecialchars($data["sutradara"]);
    $bahasa = htmlspecialchars($data["bahasa"]);
    $gambar = htmlspecialchars($data["gambar"]);

       //query insert ke database
       $query = "UPDATE data_film SET 
       judul ='$judul',
       tahun = '$tahun',
       sutradara = '$sutradara',
       bahasa = '$bahasa',
       gambar = '$gambar'
       WHERE id = $id
       
       ";

       mysqli_query($koneksi,$query);
       return mysqli_affected_rows($koneksi);
}
?>