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
    require_once 'f16.php';
    require_once 'aircraft.php';
    require_once 'f35.php';
        $f16 = new F16;

        echo $f16->GetType();



    ?>


</body>

</html>