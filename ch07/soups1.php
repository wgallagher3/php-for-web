<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No Soup for You!</title>
</head>
<body>
    <h1>Mmm...soups</h1>
    <?php // Script 7.1 - soups1.php
    // This script creates and prints out an array.

    // Address error management, if you want.

    // Create the array:
    $soups = [
        'Monday' => 'Clam Chowder',
        'Tuesday' => 'White Chicken Chili',
        'Wednesday' => 'Vegetarian'
    ];

    // Try to print the array:
    print "<p>$soups</p>";

    // Print the contents of the array:
    print_r($soups);

    ?>
</body>
</html>