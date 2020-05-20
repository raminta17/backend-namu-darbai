<?php
    $cities4 = ['Tokijas', 'Vašingtonas', 'Maskva', 'Londonas'];
?>
<!DOCTYPE html>
<html lang="lt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP7 namu darbas</title>
    </head>
    <body>
        <ul>
            <?php
                for ($city = 0; $city < count($cities4); $city++){
                    echo "<li> $cities4[$city] </li>";
                }
            ?>
        </ul>
        <ul>
            <?php
                foreach($cities4 as $city){
                    echo "<li> $city </li>";
                }
            ?>
        </ul>
    </body>
</html>
