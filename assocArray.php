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
    //answer of question a)
    $monthDays = array ('January' => 31, 'February' => 28, 'March' => 31,'April' => 30,'May' => 31, 'June' => 30, 'July' => 31, 'August' => 31,'September' => 30, 'October' => 31, 'November'=> 30, 'December' => 31);

    //answer of question b)
    foreach($monthDays as $days => $daysnumber){
    echo "$days" . " - " . "$daysnumber";
    echo "<br>";
    }
    echo "<br>";

    //answer of question c)
    foreach($monthDays as $days => $daysnumber30)
    {
        if($daysnumber30 == 30){
            echo "$days - $daysnumber30 <br>";
        }
    }
    ?>

</body>
</html>