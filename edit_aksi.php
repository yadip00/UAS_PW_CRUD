<?php
include("koneksi.php");

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama_mahasiswa = $_POST['nama_mahasiswa'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $program_studi = $_POST['program_studi'];
    $keahlian = implode(",",$_POST['keahlian']);
    

    $sql = "UPDATE mahasiswa set nim = '$nim', nama_mahasiswa = ' $nama_mahasiswa', jenis_kelamin = '$jenis_kelamin', program_studi = '$program_studi', keahlian = '$keahlian' where id = $id";
    $query = mysqli_query($koneksi, $sql);


    if($query) {
        header('Location: index.php');
    } else {
        echo "Gagal merubah data mahasiswa <a href=index.php>Halaman Index</a>";
    }
} else {
    echo"Anda tidak mempunyai akses <a href=index.php>Halaman Index</a>";
}
?>