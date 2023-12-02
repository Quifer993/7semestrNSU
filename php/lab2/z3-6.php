<html lang="ru">
<head>
    <meta charset="utf-8">
    <title> z3-6 </title>
</head>
<body>

<?php

function printArray($num, $cast){
    print $num . ")<br>";
    foreach ($cast as $key => $val){
        print "<pre> &#9; $key : $val </pre>";
    }
}

$cast = array(
        'cnum' => 2001,
        'cname' => "Hoffman",
        'city' => "London",
        'snum' => 1001,
        'rating' => 100
);

printArray(1, $cast);

asort($cast);
printArray(2, $cast);

ksort($cast);
printArray(3, $cast);

sort($cast);
printArray(4, $cast);
?>

</body>
</html>