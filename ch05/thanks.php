<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks</title>
</head>
<body>
    <?php
    $name = $_GET['name'];
    $email = $_GET['email'];

    print "<p>Thank your, $name. We will contact you at $email.";
    ?>
</body>
</html>