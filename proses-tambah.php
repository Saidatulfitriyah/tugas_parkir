<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
   
    $jenis_kendaraan=$_POST['kendaraan'];
    $jumlah_jam_parkir=$_POST['jam'];

    $sql = "INSERT INTO tb_pasien(jenis_kendaraan, jam) VALUES ('$jenis_kendaraan', '$jumlah_jam_parkir')";
    $query = mysqli_query($koneksi, $sql);

    if($query){
        header('location:tabel.php?status=sukses');
    }else{
        header('location:tabel.php?status=gagal');
    }
}
?>