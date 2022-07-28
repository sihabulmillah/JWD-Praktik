<?php

for ($i = 0; $i <= 5; $i++) {
    echo "* <br>";
}

$peserta = [
    "Tasya",
    "Shopi",
    "Wayan",
    "Selvi"
];

echo "<h3>Daftar Peserta JWD7</h3>";
echo "<ol>";
foreach ($peserta as $p) {
    echo "<li>$p</li>";
}
echo "</ol>";

function tambahSatau($value)
{
    $value = $value + 1;
}

function tambahSatu(&$value)
{
    $value = $value + 1;
}

$a = 5;
tambahSatau($a);
echo $a;

$b = 5;
tambahSatu($b);
echo $b;
