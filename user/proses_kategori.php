<?php

if ($_GET['proses'] == 'insert') {

    if (isset($_POST['submit'])) {
        include '../koneksi.php';

        $sql = mysqli_query($db, "INSERT INTO kategori (nama_kategori)VALUES
        ('$_POST[nama_kategori]')");
        if ($sql) {
            echo "<script> alert ('Alah ta input');window.location='index.php?p=kategori';</script>";
        }
    }
}

if ($_GET['proses'] == 'delete') {

    include '../koneksi.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $hapus = mysqli_query($db, "DELETE FROM kategori WHERE id='$id'");

        if ($hapus) {
            echo "<script>alert('Data berhasil dihapus'); window.location='index.php?p=kategori';</script>";
        }
    }
}


if ($_GET["proses"] == 'update') {

    include '../koneksi.php';

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $nama_kategori = $_POST['nama_kategori'];

        $sql = mysqli_query($db, "UPDATE kategori SET 
        nama_kategori='$nama_kategori' 
        WHERE id='$id'");

        if ($sql) {
            echo "<script>alert('Data berhasil diupdate'); window.location='index.php?p=kategori';</script>";
        } else {
            echo "Error: " . mysqli_error($db);
        }
    }

}