<?php
include("koneksi.php");

// jika tombol submit di klik
if (isset($_POST['submit'])){
    $nim = $_POST['nim'];
    $nama_mahasiswa = $_POST['nama_mahasiswa'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $program_studi = $_POST['program_studi'];
    $keahlian = implode(",", $_POST['keahlian']);

    $sql = "INSERT into mahasiswa(nim,nama_mahasiswa,jenis_kelamin,program_studi,keahlian)VALUES ('$nim', '$nama_mahasiswa', '$jenis_kelamin', '$program_studi', '$keahlian')"; 
    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        header('Location: index.php');
    }else{
        echo "Gagal menambahkan data mahasiswa <a href=index.php>Halaman PHP</a>";
    }
}else{
    echo "Anda tidak mempunyai akses <a href=index.php>Halaman Index</a>";
}

?>