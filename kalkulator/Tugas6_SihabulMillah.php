<?php
//membuat fungsi operator aritmatika dengan 2 parameter

//menangkap inputan user
$angka1 = $_POST['angka1'];
$angka2 = $_POST['angka2'];
$operator = $_POST['operator'];



//melakukan operasi aritmatika

if (isset($_POST['submit'])) {
    if ($operator == "+") {
        $hasil = $angka1 + $angka2;
    } elseif ($operator == "-") {
        $hasil = $angka1 -  $angka2;
    } elseif ($operator == "*") {
        $hasil = $angka1 * $angka2;
    } else {
        $hasil = $angka1 / $angka2;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_tugas6.css">
</head>

<body>
    <div class="container">
        <h2>Kalkulator Sederhana</h2>
        <div class="form">
            <form action="" method="post">
                <ul class="operand">
                    <label for="">Bilangan 1</label>
                    <li>
                        <input type="number" name="angka1" value="<?= $angka1 ?>">
                    </li>
                    <label for="">Bilangan 2</label>
                    <li>
                        <input type="number" name="angka2" value="<?= $angka2 ?>">
                    </li>
                </ul>
                <div class="radio">
                    <input type="radio" name="operator" id="tambah" value="+">
                    <input type="radio" name="operator" id="kurang" value="-">
                    <input type="radio" name="operator" id="kali" value="*">
                    <input type="radio" name="operator" id="bagi" value="/">
                    <input type="submit" name="submit" id="submit">
                </div>
            </form>
            <div class="operator">
                <div class="atas">
                    <label for="tambah">+</label>
                    <label for="kurang">-</label>
                </div>
                <div class="bawah">
                    <label for="kali">x</label>
                    <label for="bagi">/</label>
                </div>
            </div>
            <label for="submit" class="kirim">=</label>
        </div>
        <div class="hasil">
            <h2>Hasil</h2>
            <div class="angka">
                <?php //menampilkan hasil jika setelah di klik 
                if (isset($hasil)) {
                    echo $hasil;
                } else {
                    echo 0;
                }
                ?>
            </div>
        </div>

    </div>
</body>

</html>