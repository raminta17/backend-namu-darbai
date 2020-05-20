<?php
    $cities3 = [
        'Tokijas' => [13.6, 1868, 'Japonija'],
        'Vasingtonas' => [0.6, 1790, 'JAV'],
        'Maskva' => [11.5, 1147, 'Rusija']
    ];
    foreach ($cities3 as $city => $info){
        echo "$city - ";
        foreach ($info as $value){
            echo $value .', ';
        }
        echo '<br>';
    }
    $cities3['Londonas'] = [8.6, 43, 'Anglija'];
?>
<!DOCTYPE html>
<html lang="lt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP5 namu darbas</title>
    </head>
    <body>
        <ul>
            <li><?php echo 'Gyventojų skaičius: '. $cities3['Londonas'][0]. ' mln.'; ?></li>
            <li><?php echo 'Įkurtas: '. $cities3['Londonas'][1]. ' m.'; ?></li>
            <li><?php echo 'Šalis: '. $cities3['Londonas'][2]; ?></li>
        </ul>
    </body>
</html>
