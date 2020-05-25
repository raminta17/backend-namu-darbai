<?php
    $ilgis = "";
    $plotis = "";

    if(isset($_POST['ilgis'])){
        $ilgis = $_POST['ilgis'];
    }
    if(isset($_POST['plotis'])){
        $plotis = $_POST['plotis'];
    }
    function multiply($a,$b){
        $area = $a * $b;
        return $area;
    }
    if($ilgis && $plotis){
        if(preg_match("/\D/", $ilgis) || preg_match("/\D/", $plotis)){
            echo "Please input valid numbers.";
        } else {
            echo  'Stačiakampio plotas yra ' . multiply($ilgis,$plotis) . ' kv.vnt.';
            exit();
        }
    }
?>
<!DOCTYPE html>
<html lang="lt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP11 namu darbas</title>
    </head>
    <body>
        <form action="<?php $_PHP_SELF; ?>" method="POST">
            <label for="ilgis">Stačiakampio ilgis:</label>
            <input type="text" name="ilgis">
            <label for="plotis">Stačiakampio plotis:</label>
            <input type="text" name="plotis">
            <input type="submit">
        </form>
    </body>
</html>
