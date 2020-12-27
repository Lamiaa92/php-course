<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    //Array functions

    $personnalInfo = array("Name" => "Lamia", "Age" => "28", "City" => "Menton");

    $moreInfo = array("State" => "PACA", "Weight" => "70");

    $personnalInfo  = array_merge($personnalInfo, $moreInfo);

    foreach ($personnalInfo as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }

    print_r($personnalInfo);

    //Print only keys
    print_r(array_keys($personnalInfo));
    echo "<br>";

    //Print only values
    print_r(array_values($personnalInfo));
    echo "<br>";

    //Add a value in array
    $cars = array("Volkswagen", "Audi", "Mercedes");
    array_push($cars, "Volvo");
    print_r($cars);
    echo "<br>";

    //Search inside of an array (index)
    echo array_search("Mercedes", $cars);
    echo "<br>";

    //Count the number of items in an array

    echo count($cars);

    ?>
</body>
</html>














