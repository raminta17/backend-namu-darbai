<?php
    $temp = [- 4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21];
    $suma = 0;
    foreach($temp as $value){
         $suma += $value;
    }
    $vidurkis = $suma / count($temp);
    echo 'Vidutinė mėnesio temperatūra: ' . round($vidurkis) . ' laipsniai (ių).';
    echo "<br>";
    rsort($temp);
    $five_warmest = array_slice($temp, 0 ,5);
    echo 'Šilčiausių penkių balandžio mėnesio dienų temperatūra buvo: ' . implode(' ', $five_warmest);
    echo "<br>";
    $five_coldest = array_slice($temp, -5 ,5);
    echo 'Šalčiausių penkių balandžio mėnesio dienų temperatūra buvo: ' . implode(' ', $five_coldest);
?>
<!DOCTYPE html>
<html lang="lt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP8 namu darbas</title>
    </head>
    <body>
    </body>
</html>
