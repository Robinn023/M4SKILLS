<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>

</head>

<body>

    <h2><?php

    $stringVariabele = "Robin";
    $leeftijd = "19";
    echo "Hallo wereld";
    print "</br>";
    print "Mijn naam is ";
    print $stringVariabele;
    print "</br>";

    $a = 13;
    print "</br>";
    $b = 6;


    $result = $a + $b;
    echo "$a + $b  antwoord: $result <br/>";


    $result = $a - $b;
    echo "$a - $b  antwoord: $result <br/>";


    $result = $a * $b;
    echo "$a * $b  antwoord: $result <br/>";


    $result = $a / $b;
    echo "$a / $b  antwoord: $result <br/>";


    $result = $a % $b;
    echo "$a % $b  antwoord: $result <br/>";
    echo "<br/>";

    $result = $a ** $b;
    echo "$a % $b  antwoord: $result <br/>";
    echo "<br/>";

    $c = 23;
    $d = 23;

if ($c == $d) {
    echo "$c is gelijk aan $d <br/>";
} else {
    echo "$c is niet gelijk aan $d <br/>";
}



if ($c != $d) {
    echo "$c is niet gelijk aan $d <br/>";
} else {
    echo "$c is gelijk aan $d <br/>";
}


if ($c === $d) {
    echo "$c is strikt gelijk aan $d <br/>";
} else {
    echo "$c is niet strikt gelijk aan $d <br/>";
}


if ($c !== $d) {
    echo "$c is niet strikt gelijk aan $d <br/>";
} else {
    echo "$c is strikt gelijk aan $d <br/>";
}


if ($c > $d) {
    echo "$c is groter dan $d <br/>";
} else {
    echo "$c is niet groter dan $d <br/>";
}


if ($c < $d) {
    echo "$c is kleiner dan $d <br/>";
} else {
    echo "$c is niet kleiner dan $d <br/>";
}


if ($c >= $d) {
    echo "$c is groter dan of gelijk aan $d <br/>";
} else {
    echo "$c is kleiner dan $d <br/>";
}


if ($c <= $d) {
    echo "$c is kleiner dan of gelijk aan $d <br/>";
} else {
    echo "$c is groter dan $d <br/>";
}






    ?></h2>
</body>

</html>