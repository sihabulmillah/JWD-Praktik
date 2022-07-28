<?php
// Mencetak Bilangan Ganjil Genap dengan loooping for dan if else

echo "=============== CETAK BILANGAN GANJIL GENAP 1-100 ===============";
echo "<br>";

//menginisialisasi $i dengan nilai awal 1
//dan memberikan kondisi sampai nilai $i menjadi 100
//lalu di akhiri dengan increment($i++) supaya setiap perulangan $i bertambah 1 nilai 

for ($i = 1; $i <= 100; $i++) {
    //menentukan bilangan ganjil dengan operator modulus
    if ($i % 2 == 1) {
        echo "$i adalah Bilangan Ganjil. <br>";
    } else {
        echo "$i adalah Bilangan Genap <br>";
    }
};
