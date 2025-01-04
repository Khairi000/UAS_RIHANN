<?php

if($_GET['proses']=='insert'){
    

    if (isset($_POST['submit'])) {
        include '../koneksi.php';

        $sql = mysqli_query($db, "INSERT INTO dosen (nip,nama_dosen,email,prodi_id,notelp,alamat)VALUES
            ('$_POST[nip]','$_POST[nama_dosen]','$_POST[email]','$_POST[prodi]','$_POST[notelp]','$_POST[alamat]')");
        if ($sql) {
            echo "<script> alert ('Data Sudah Di Input');window.location='index.php?p=dosen';</script>";
            //echo "<script>window.location"
        }

    }

    

}

    

if($_GET['proses']=='delete'){
    
    include '../koneksi.php';
    
    if (isset($_GET['nip'])) {
        $nip = $_GET['nip'];
        $hapus = mysqli_query($db, "DELETE FROM dosen WHERE nip='$nip'");
    
        if ($hapus) {
            echo "<script>alert('Data berhasil dihapus'); window.location='index.php?p=dosen';</script>";
        }
    }
    
    

}

if($_GET['proses']=='update'){
    if(isset($_POST['update'])){
    include'../koneksi.php';

   $sql= mysqli_query($db,"UPDATE dosen SET
   nama_dosen ='$_POST[nama_dosen]',
   email ='$_POST[email]',
   prodi_id ='$_POST[prodi]',
   notelp ='$_POST[notelp]',
   alamat ='$_POST[alamat]' WHERE nip='$_POST[nip]'");
    
   if($sql){
    echo "<script>alert('Data berhasil Diedit');window.location='index.php?p=dosen'</script>";
        }
    else{
    die("Query error: " . mysqli_error($db));
        }
    }
}