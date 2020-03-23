<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add an Event</title>
</head>
<body>
    <?php // Script 7.9 - event.php
    // This script handles the event form.

    // Address error management, if you want.

    // Print the text:
    print "<p>You want to add an event called <b>{$_POST['name']}</b> which takes place on: <br>";

    // Print each weekday:
    if (isset($_POST['days']) AND is_array($_POST['days'])) {
        foreach ($_POST['days'] as $day) {
            print "$day<br>\n";
        }
    } else {
        print 'Please select at least one weekday for this event!';
    }

    // Complete the paragraph:
    print '</p>';

    ?>
</body>
</html>