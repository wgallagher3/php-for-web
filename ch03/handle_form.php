<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Feedback</title>
</head>
<body>
    <?php // Script 3.3 handle_form.php

    ini_set('display_errors', 1); // Let me learn from my mistakes

    // This page receives the data from feedback.html

    // It will receive: title, name, email, response, comments, and submit in $_POST.

    // Create shorthand version of the variables:
    $title = $_POST['title'];
    $name = $_POST['name'];
    $response = $_POST['response'];
    $comments = $_POST['comments'];

    // Print the received data:
    print "<p>Thank you, $title $name, for your comments.</p>
        <p>You stated that you found this example to be '$response' and added:<br>$comments</p>"

    ?>
</body>
</html>