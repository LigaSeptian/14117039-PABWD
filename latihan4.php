<?php
$prima=2;

while ($prima < 37) {
    $pembagi=2;
    $apakahPrima=true;
    while ($pembagi < $prima) {
        if ($prima % $pembagi == 0) {
            $apakahPrima=false;
            break;
        }
        $pembagi++;
    }

    if ($apakahPrima == true) {
        echo $prima; echo "<br>";
    }
    $prima++;
}