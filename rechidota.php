<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    session_start();
    if ($_POST) {
        if (isset($_POST['kakojpredmet']) && isset($_POST['predmetidota'])) {
            $kakojpredmet = ($_POST['kakojpredmet']);
            $predmetidota = json_decode($_POST['predmetidota']);
            $secretBuild = isset($_POST['predmeti-na-pobedu']);

            echo "<h1>Ви вибрали предмет: $predmetidota[$kakojpredmet]</h1>";
            if ($secretBuild) {
                echo "<p>СЄКРЄТНИЙ БІЛД НА ПОБЮЄДУ :</p>";
                echo $predmetidota[4] . "\n x3\n";
                echo $predmetidota[6] . "\n x2\n";
                echo $predmetidota[7] . "\n x1\n";
                echo $predmetidota[5] . "\n x2\n";
            }    
        } else {
            echo "<p>nICHO NE VIBRAV</p>";
        }
    } else {
        echo "<p>nE VVIV TO CHO NADA</p>";
    }
?>

</body>
</html>