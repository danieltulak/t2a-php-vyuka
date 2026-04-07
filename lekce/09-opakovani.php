<?php

declare(strict_types=1);

/**
 * 1. Do dvou proměnných zadejte hodnotu začátku a konce intervalu (např. $a=10, $b=150)
 * 2. Pomocí cyklu zjistěte počet lichých čísel v tomto intervalu a vypište tuto informaci.
 * 3. Dále zjistěte, kolik čísel končí číslicí 1 nebo 7 a vypište tuto hodnotu.
 * 4. Do pole uložte všechny hodnoty, pro které platí v daném intervalu všechny tyto podmínky:
 * - trojciferné číslo
 * - dělitelné 5
 * - je menší než 500
 * (může nastat případ, že pole bude prázdné)
 * 5. Vypište pomocí foreach prvky tohoto pole, v případě, že pole je prázdné, vypište tuto informaci.
 */

/*
$a = 10;
$b = 150;
$lichych = 0;
$konciNa1nebo7 = 0;
$podminkyPole = [];
for ($i = $a; $i <= $b; $i++) {
    if ($i % 2 !== 0) {
        $lichych++;
    }
    if ($i % 10 === 1 || $i % 10 === 7) {
        $konciNa1nebo7++;
    }
    if ($i >= 100 && $i < 500 && $i % 5 === 0) {
        $podminkyPole[] = $i;
    }
}
echo "Počet lichých čísel: {$lichych}\n";
echo "Počet čísel končících na 1 nebo 7: {$konciNa1nebo7}\n";
if (empty($podminkyPole)) {
    echo "Pole je prázdné\n";
} else {
    echo "Prvky pole:\n";
    foreach ($podminkyPole as $cislo) {
        echo $cislo . "\n";
    }
}
*/

$a = 50;
$b = 300;
$sudecislo = 0;
$konci2n8 = 0;
$pole = [];

for ($i = $a; $i <= $b; $i++)
{
    if ($i % 2 == 0)
    {
        $sudecislo++;
    }
    if ($i % 10 === 2 || $i % 10 === 8)
    {
        $konci2n8++;
    }
    if ($i > 20 && $i <= 99 && $i % 3 === 0)
    {
        $pole[] = $i;
    }
}
echo "Počet sudých čísel: {$sudecislo}\n";
echo "Počet čísel, kterých končí číslicí 2 nebo 8: {$konci2n8}\n";

if (empty($pole))
{
    echo "Pole je prádné\n";
}
else
{
    echo "Prvky pole:\n";
    foreach($pole as $cislo)
    {
        echo $cislo . "\n";
    }
}