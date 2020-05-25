<?php
    function currentDate() {
      //  echo '&copy; 2018-' . date ('Y');
        $now = new DateTime();
        echo '&copy; 2018-' . $now -> format('Y');
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP14 namu darbas</title>
        <style>
            footer {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <footer>
            <div><?php currentDate(); ?></div>
        </footer>
    </body>
</html>
