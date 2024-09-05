<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal 4</title>
</head>
<body>
    <h1>Soal 4</h1>
<form method="POST">
    <div>
        <label>Tanggal lahir</label> <br> 
        <input type="date" name="tanggal lahir">
        <button type="submit">hitung umur</button>
    </div>
</form>
</body>

<?php
$tanggal_lahir = $_POST['tanggal_lahir'];
$tanggal_lahir = date_create($tanggal_lahir);
$sekarang = date_create();
$umur = date_diff($tanggal_lahir, $sekarang);

echo "umur anda adalah : " . $umur->y . "tahun, " . $umur->m . "bulan, dan" . $umur->d . " hari."; 

?>