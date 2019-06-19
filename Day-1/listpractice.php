<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    body {font-family: "Comic Sans MS", cursive, sans-serif;}</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $listA = array("Apple", "Avocado", "BlueBerries", "Durian", "Lychee");
    $listB = array("Apple", "Avocado", "BlueBerries", "Durian", "Lychee");
    if (in_array("Durian", $listA)==true) {
        echo 'Durian is in ListA!';
    }
    echo "<br>";

    unset($listB[3]);
    

    







    ?>

</body>
</html>