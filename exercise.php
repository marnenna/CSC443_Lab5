<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $month = array("Splorch", "Sploo", "Splat", "Splatt", "Spleen", "Splune", "Spling", "Slendo", "Sploctember", "Splictember", "Splanet", "TheRest");    
    $monthDays = array("Splorch" => 23, "Sploo" => 28, "Splat" => 2, "Splatt" => 3, "Spleen" => 44, "Splune" => 30, "Spling" => 61, "Slendo" => 61, "Sploctember" => 31, "Splictember" => 31, "Splanet" => 30, "TheRest" => 22);

        echo "The number of days in the shortest month " . min($month);
        echo "The name of the shortest month " . min($monthDays);

    ?>
</body>
</html>