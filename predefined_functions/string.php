<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //String functions

    //String length
    $str = "Today is a sunny day";

    echo strlen($str);

    //String word count
    $firstNAme = "My first name is Lamia";
    echo "<br>";
    echo str_word_count($firstNAme);
    echo "<br>";

    //How to find text within a string
    $email = "lamiamoshrif@gmail.com";
        if (strpos($email,"@")) {
            echo "This is a valid email";
        } else {
            echo "This is a email input field !";
        }
        echo "<br>";

    //Ucwords  - Every first letter of a word is uppercase
    echo ucwords ("What is your name ?" . "<br>");

    //Whole string to uppercase
    echo strtoupper ("What is your name ?" . "<br>");

    //Whole string to lowecase
    echo strtolower ("WHAT IS YOUR NAME" . "<br>");

    
    ?>
</body>
</html>