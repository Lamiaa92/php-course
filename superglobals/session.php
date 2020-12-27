<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //SESSION
    // USED TO STORE DATA ON A SERVER RATHER THAN ON THE COMPUTER OF THE USER.
    // GOOD TO USE FOR SENSITIVE INFORMATION.
    // Session exists as long as the browser is open.

    session_start();

    //Storing information
    $_SESSION["Name"] = "Lamia";
    $_SESSION["Age"] = 28;

    echo "Hello " . $_SESSION["Name"];

    session_destroy();

    ?>
</body>
</html>