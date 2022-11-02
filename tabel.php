<?php
include("koneksi.php");?>

<html>
    <head>
</head>
<body>
    <h1>Tarif Parkir</h1>
    <h4> <a href=tambah.php>Tambah</a></h4>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Jenis Kendaraan</th>
            <th>Jumlah Jam Parkir</th>
            <th>Total Parkir</th>
</tr>

<?php
include("koneksi.php");
$sql='SELECT * FROM tarif_parkir';
$query = mysqli_query($koneksi, $sql);
while($parkir=mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>".$parkir['id']."</td>";
    echo "<td>".$parkir['jenis_kendaraan']."</td>";
    echo "<td>".$parkir['jumlah_jam_parkir']."</td>";
    echo "<td>".$parkir['total_biaya_parkir']."</td>";
    echo "<td>";
    echo "</td>";
    echo "</tr>";
 }
 ?>
 </table>
</body>
</html>