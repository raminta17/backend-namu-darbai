<?php
    $first_name = "";
    $last_name = "";

    if(isset($_POST['vardas'])){
        $first_name = $_POST['vardas'];
    }
    if(isset($_POST['pavarde'])){
        $last_name = $_POST['pavarde'];
    }
    if($first_name && $last_name){
        if(preg_match("/[^a-zA-Z'-]/", $first_name) || preg_match("/[^a-zA-Z'-]/", $last_name)){
            echo "Įveskite duomenis iš naujo.";
        } else {
            echo 'Vartotojo vardas yra:' . $first_name . '<br>';
            echo 'Vartotojo pavardė yra:' . $last_name . '<br>';
            exit();
        }
    }
?>
<!DOCTYPE html>
<html lang="lt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP12 namu darbas</title>
    </head>
    <body>
        <form action="<?php $_PHP_SELF; ?>" method="POST">
            <label for="vardas">Vartotojo vardas:</label>
            <input type="text" name="vardas">
            <label for="pavarde">Vartotojo pavardė:</label>
            <input type="text" name="pavarde">
            <input type="submit">
        </form>
    </body>
</html>
