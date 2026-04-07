<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Výpis</title>
</head>
<body>

<?php

$c1 = $_GET["cislo1"];
$c2 = $_GET["cislo2"];
$c3 = $_GET["cislo3"];

// ===== Výpis podle checkboxu =====
if (!empty($_GET["vyber"])) {
    foreach ($_GET["vyber"] as $v) {
        if ($v == 1) echo $c1 . "<br>";
        if ($v == 2) echo $c2 . "<br>";
        if ($v == 3) echo $c3 . "<br>";
    }
} else {
    echo "neoznačeno<br>";
}

echo "<br>";

// ===== Výpočet =====
$op = $_GET["operace"];
$vysledek = 0;

switch ($op) {
    case "+":
        $vysledek = $c1 + $c2;
        break;
    case "-":
        $vysledek = $c1 - $c2;
        break;
    case "*":
        $vysledek = $c1 * $c2;
        break;
    case "/":
        if ($c2 != 0) {
            $vysledek = $c1 / $c2;
        } else {
            echo "Nelze dělit nulou<br>";
            $vysledek = null;
        }
        break;
}

if ($vysledek !== null) {
    echo "$c1 $op $c2 = $vysledek<br>";
}

echo "<br>";

// ===== Porovnání =====
$por = $_GET["porovnani"];

function porovnej($a, $b, $nazevA, $nazevB) {
    if ($a > $b) return "$nazevA je větší než $nazevB";
    if ($a < $b) return "$nazevA je menší než $nazevB";
    return "$nazevA se rovná $nazevB";
}

switch ($por) {
    case "1-3":
        echo porovnej($c1, $c3, "První číslo", "třetí číslo");
        break;
    case "1-2":
        echo porovnej($c1, $c2, "První číslo", "druhé číslo");
        break;
    case "2-3":
        echo porovnej($c2, $c3, "Druhé číslo", "třetí číslo");
        break;
}

?>

</body>
</html>