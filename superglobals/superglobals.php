<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Superglobals => Variables that are available from any part of your code, used to store and get information from one page to another.
    // GLOBALS => Used for excess variables from anywhere in the PHP script.
    // $_POST => Used to collect data from the HTML form after submitting it. (The data is not visible in the query string whenever you use $_POST).
    // $_GET => Used to collect data from the HTML form after submitting it. (The data is visible in the query string whenever you use $_GET).
    // $_SERVER => Source information about HEADERS, PATHS, LOCATIONS.
    // $_COOKIE => A small file that the Webserver stores on the clients computer. They are used to track information such as the Username.
    // $_SESSION => Used to store data on a server rather than a computer. The $_SESSION information gets destroyed everytime a user closes the browser.
    // $_FILES => A two dimensional associative global array of items which have been uploaded via the post method. (Upload a file + saving it).

    // GLOBALS

    $x = 100;
    $y = 200;

    function add() {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    
    add();
    echo $z;


    ?>
</body>
</html>