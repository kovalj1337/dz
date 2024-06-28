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
    $predmetidota = ["нічо","dedalus","baterflya","desolator","tango","batlefury","momchik","hand of midas","topor","aegisssss","monkey king baaaaaar"];
    $_SESSION["one"] = json_encode($predmetidota);
    ?>
    <h1>ПРЕДМЕТИ ДОТА 2</h1>
    <form action="rechidota.php" method="POST">
        <input type="text" name="kakojpredmet">
        <label for="kakojpredmet">Який предмет вибираєш??!?!?!?! від 1 до 10</label>
        <input type="hidden" name="predmetidota" value='<?php echo json_encode($predmetidota); ?>'>
        <input type="checkbox" name="predmeti-na-pobedu" value="1">
        <label for="predmeti-na-pobedu">сєкрєтний білд на побєду</label>
        <input type="submit">
    </form>
</body>
</html>