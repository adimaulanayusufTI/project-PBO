<!-- Konversi Suhu -->

<?php
$suhu = 0.0; // Float
$asal = "Celsius"; // String
$tujuan = "Fahrenheit"; // String
$hasil = 0.0; // Float
$valid = false; // Boolean
$satuan = ["Celsius", "Fahrenheit", "Kelvin", "Reamur"]; // Array
$jumlahSatuan = count($satuan); // Integer


function konversi($suhu, $asal, $tujuan) {
    
    switch ($asal) {
        case "Celsius":
            $c = $suhu;
            break;
        case "Fahrenheit":
            $c = ($suhu - 32) * 5 / 9;
            break;
        case "Kelvin":
            $c = $suhu - 273.15;
            break;
        case "Reamur":
            $c = $suhu * 5 / 4;
            break;
        default:
            return null;
    }

    
    switch ($tujuan) {
        case "Celsius":
            return $c;
        case "Fahrenheit":
            return ($c * 9 / 5) + 32;
        case "Kelvin":
            return $c + 273.15;
        case "Reamur":
            return $c * 4 / 5;
        default:
            return null;
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST["suhu"] ?? "";
    $asal = $_POST["asal"] ?? "";
    $tujuan = $_POST["tujuan"] ?? "";

    if (
        $input !== "" &&
        is_numeric($input) &&
        in_array($asal, $satuan, true) &&
        in_array($tujuan, $satuan, true)
    ) {
        $suhu = (float) $input;
        $celsius = konversi($suhu, $asal, "Celsius");

        if ($celsius >= -273.15) {
            $hasil = konversi($suhu, $asal, $tujuan);
            $valid = ($hasil !== null);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Suhu</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        background-image: url("https://static.vecteezy.com/system/resources/thumbnails/068/821/745/small/serene-landscape-featuring-a-solitary-tree-by-a-reflective-lake-with-a-majestic-mountain-backdrop-photo.jpg");
        background-size: cover;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 500px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10%;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        color: #333;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    label {
        margin-top: 10px;
        margin-bottom: 5px;
        color: #555;
    }

    input, select, button {
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 4px;
        border: 1px solid #ccc;
    }

    button {
        background-color: #28a745;
        color: white;
        border: none;
        cursor: pointer;
    }

    button:hover {
        background-color: #218838;
    }

    .hasil {
        text-align: center;
        margin-top: 20px;
    }

    .error {
        color: red;
        text-align: center;
    }
</style>
<body>

<div class="container">
    <h1> Suhu</h1>
    <p> Konversi antara Celsius, Fahrenheit, Kelvin, dan Reamur.</p>

    <form method="POST">
        <label>Masukkan suhu</label>
        <input type="number" step="any" name="suhu" required>

        <label>Satuan asal</label>
        <select name="asal">
            <?php foreach ($satuan as $item): ?>
                <option value="<?= $item ?>"
                    <?= $asal == $item ? "selected" : "" ?>>
                    <?= $item ?>
                </option>
            <?php endforeach; ?>
        </select>

        <label>Satuan tujuan</label>
        <select name="tujuan">
            <?php foreach ($satuan as $item): ?>
                <option value="<?= $item ?>"
                    <?= $tujuan == $item ? "selected" : "" ?>>
                    <?= $item ?>
                </option>
            <?php endforeach; ?>
        </select>

        <button type="submit">Konversi</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <?php if ($valid): ?>
            <div class="hasil">
                <p>Hasil konversi:</p>
                <h2>
                    <?= number_format($hasil, 2, ',', '.') ?>
                    <?= $tujuan == "Kelvin" ? "K" : "° " . $tujuan ?>
                </h2>
            </div>
        <?php else: ?>
            <p class="error">
                Input tidak valid atau suhu di bawah nol mutlak.
            </p>
        <?php endif; ?>
    <?php endif; ?>
</div>

</body>
</html>