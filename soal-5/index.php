<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal 5</title>
</head>
<body>
    <h1>Soal 5</h1>
 <form action="hitung_bilangan.php" method="post">
 <label for="bilangan">Bilangan:</label>
 <input type="number" id="bilangan" name="bilangan" min="5" max="20">
 <label for="pilihan">Pilihan:</label>
 <select id="pilihan" name="pilihan">
 <option value="ganjil">Ganjil</option>
 <option value="genap">Genap</option>
 </select>
 <button type="submit">Hitung Bilangan</button>
 </form>
</body>
</html>
    <?php ?>