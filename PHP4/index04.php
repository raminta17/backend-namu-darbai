<?php
    $cities = ['Berlynas', 'Roma', 'Londonas'];
    $cities[] = 'Tokijas';
    print_r($cities);
    echo '<br>';
    $cities2 = [
        'Tokijas' => 13.6,
        'Vasingtonas' => 0.6,
        'Maskva' => 11.5
    ];
    $cities2['Londonas'] = 8.6;
    foreach ($cities2 as $town => $population) {
        echo "$town - $population. ";
    }
?>
<!DOCTYPE html>
<html lang="lt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP4 namu darbas</title>
    </head>
    <body>
        <ul>
            <li><?php echo $cities[1]; ?></li>
        </ul>
        <ul>
           <li><?php echo 'Gyventojų skaičius: '. $cities2['Tokijas']. ' mln.'; ?></li>
        </ul>
    </body>
</html>
