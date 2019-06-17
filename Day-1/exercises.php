<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            font-family: "Comic Sans MS", cursive, sans-serif;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <?php
    // CODING HOURS: 
    $dailyCodingHours = 6;
    $semesterLengthWeeks = 17;
    $daysPerWeek = 5;
    echo "Coding hours:" . " " . $dailyCodingHours * $semesterLengthWeeks * $daysPerWeek . "<br>";

    // CUBOID:
    function CuboidFunction($a, $b, $c)
    {
        return $a * $b * $c;
    }
    echo CuboidFunction(5, 5, 5) . "<br>";

    //CONDITIONAL VARIABLE MUTATION:
    $a = 24;
    $out = 0;
    // if a is even increment out by one    
    if ($a % 2 === 0) {
        $out++;
        echo $out . "<br>";
    }

    $b = 21;
    $out2 = "";
    // if b is between 10 and 20 set out2 to "Sweet!"
    // if less than 10 set out2 to "Less!",
    // if more than 20 set out2 to "More!"
    if ($b >= 10 && $b <= 20) {
        $out2 = "Sweet!";
    } elseif ($b < 10) {
        $out2 = "Less!";
    } elseif ($b > 10) {
        $out2 = "More!";
    }
    echo $out2 . "<br>";

    $c = 123;
    $credits = 100;
    $isBonus = false;
    // if credits are at least 50,
    // and isBonus is false decrement c by 2
    // if credits are smaller than 50,
    // and isBonus is false decrement c by 1
    // if isBonus is true c should remain the same
    if ($credits >= 50 && $isBonus == false) {
        $c -= 2;
    } elseif ($credits < 50 && $isBonus == false) {
        $c --;
    }
    echo $c . "<br>";


    ?>

</body>

</html>