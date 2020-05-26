<?php
    function currentDate() {
      //  echo '&copy; 2018-' . date ('Y');
        $year_web_page_created = 2018;
        $now = new DateTime();
        $currentYear =  $now -> format('Y');

        if ($currentYear == $year_web_page_created){
            echo '&copy;' . $currentYear;
        } else {
            echo "&copy; $year_web_page_created - $currentYear";
        }
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
