<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // COOKIE
    // Small file that the Webserver stores in the client computer (Not used to track sensitive information).

    // ARGUMENT COOKIES
    // Name (Must)
    // Value (Must)
    // Expire (Must)
    // Path (Mendatory)
    // Domain (Mendatory)
    // Security (Mendatory)

    // If you do not include an expiration date, the cookie will only be stored for the current session.
   
    $time =  time() + 86400 * 30;

    setcookie("name", "Lamia", $time);

    print_r($_COOKIE);

    ?>
</body>
</html>