<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greetings</title>
    <style>
        .bold {
            font-weight: bolder;
        }
    </style>
</head>
<body>
    <?php // Script 3.7 - hello.php

    ini_set('display_errors', 1); // Let me learn from my mistakes
    error_reporting(E_ALL); // Show all possible problems

    // This page should recieve a name value in the URL

    // Say "Hello":

    $name = $_GET['name'];
    print "<p>Hello, <span class=\"bold\">$name</span>!</p>";

    ?>
    
</body>
</html>