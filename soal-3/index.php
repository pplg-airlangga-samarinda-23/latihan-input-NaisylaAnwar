<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal 3</title>
</head>
<body>
    <h1>Soal 3: Kalkulator Sederhana</h1>
    <form action="kalkulator.php" method="post">
        <label for="num1">Angka Pertama:</label>
        <input type="number" id="num1" name="num1" step="any" required><br><br>

        <label for="num2">Angka Kedua:</label>
        <input type="number" id="num2" name="num2" step="any" required><br><br>

        <label>Pilih Operasi:</label><br>
        <input type="radio" id="add" name="operation" value="add" required>
        <label for="add">Penjumlahan</label><br>
        <input type="radio" id="subtract" name="operation" value="subtract">
        <label for="subtract">Pengurangan</label><br>
        <input type="radio" id="multiply" name="operation" value="multiply">
        <label for="multiply">Perkalian</label><br>
        <input type="radio" id="divide" name="operation" value="divide">
        <label for="divide">Pembagian</label><br><br>

        <input type="submit" value="Hitung">
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = 0;

    switch ($operation) {
        case 'add':
            $result = $num1 + $num2;
            echo "<h1>Hasil: " . $num1 . " + " . $num2 . " = " . $result . "</h1>";
            break;

        case 'subtract':
            $result = $num1 - $num2;
            echo "<h1>Hasil: " . $num1 . " - " . $num2 . " = " . $result . "</h1>";
            break;
            case 'multiply':
                $result = $num1 * $num2;
                echo "<h1>Hasil: " . $num1 . " * " . $num2 . " = " . $result . "</h1>";
                break;
    
             case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                    echo "<h1>Hasil: " . $num1 . " / " . $num2 . " = " . $result . "</h1>";
                } else {
                    echo "<h1>Pembagian dengan nol tidak diperbolehkan!</h1>";
                }
                break;}
} ?>