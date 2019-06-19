<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body,
        pre {
            font-family: "Arial", cursive, sans-serif;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    require_once 'models/f16.php';
    require_once 'models/aircraft.php';
    require_once 'models/f35.php';
    $f16 = new F16;

    echo $f16->GetType();

    $f16->Refill(30);
    $f16->Fight();
    echo "<pre>";
    var_dump($f16);
    echo "</pre>";

    echo $f16->GetStatus() . "<br>";
    



    ?>


</body>

</html>