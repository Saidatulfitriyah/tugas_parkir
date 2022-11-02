<html>
    <head>
</head>
<body>
    <h1>Tarif Parkir Kendaraan</h1>
    <form action="proses-tambah.php" method="POST">
        <form>
            <fieldset>
        <p>
        <label for="jenis_kendaraan">Jenis Kendaraan :</label>
        <select name="kendaraan">
        <option value="motor">Motor</option>
        <option value="mobil">Mobil </option>
        </select> 
        </p>
        <p>
        <label for="jumlah_jam_parkir">Jumlah Jam Parkir :</label>
        <input type="number" name="jumlah_jam_parkir" />
        </p>
        Nilai Pertama <input type="text" name="">
<p>
<input type="submit" value="Tambah" name="tambah" /> 
</p>
</fieldset>
</form>
</body>
</html>