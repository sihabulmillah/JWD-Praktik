<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        Jumlah Bintang = <input type="number" name="angka" placeholder="Masukan Angka"> <br>
        <input type="submit" value="kirim">
    </form>
    <br>
    <?php
    //menangkap nilai tang di input user dengan GET
    $a = $_GET['angka'];

    for ($i = 0; $i < $a; $i++) {
        //mencetak * pada baris
        echo "*";
        for ($j = 1; $j <= $i; $j++) {
            //mencetak * pada kolom
            echo "*";
        }
        echo "<br>";
    };

    ?>
</body>

</html>