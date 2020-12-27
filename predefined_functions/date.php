<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //Date
    // 'd' = Day
    // 'j' = Day without zeros
    // 'D' = Day of week (3 letters)
    // 'l' = Full day of the week
    // 'm' = Month as a number with zeros
    // 'n' = Month as a number without zeros 
    // 'M' = Month (3 letters)
    // 'F' = Full month
    // 'y' = Two-digit year
    // 'Y' = Full year

    echo date('d/m/Y');
    echo "<br>";

    //Times
    // 'g' = Hours in 12-hour format without zeros
    // 'h' = Hours in 12-hour format with zeros
    // 'G' = Hours in 24-hour format without zeros
    // 'H' = Hours in 24-hour format with zeros
    // 'a' = am/pm in lowercase
    // 'A' = am/pm in uppercase
    // 'i' = minutes without leading zeros
    // 's' = seconds without leading zeros

    echo date('H:i:s a');

    //Set timezone
    date_default_timezone_set('Europe/Paris');
    echo "<br>";

    //String to time 
    $time =strtotime("4:00pm December 03 2019");
    echo $time;
    echo "<br>";

    //The timestamp is the value represented as seconds calculated, since UNIX Epoch, January 1, 1970, and also called as UNIX timestamp.

    echo date('m/d/Y H:i:s a', $time);

    ?>
</body>
</html>