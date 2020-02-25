<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotes</title>
</head>
<body>
    <?php // Script 2.4 - quotes.php

    // Single or double quotation marks won't matter here:
    $first_name = 'William';
    $last_name = "Gallagher";

    // Single or double quotation marks DOES matter here:
    $name1 = '$first_name $last_name';
    $name2 = "$first_name $last_name";

    // Single or double quotation marks DOES matter here:
    print "<h1>Double Quotes</h1>
    <p>name1 is $name1 <br>
    name2 is $name2</p>";

    print '<h1>Single Quotes</h1>
    <p>name1 is $name1 <br>
    name2 is $name2</p>';

    ?>
</body>
</html>