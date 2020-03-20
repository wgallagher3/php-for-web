<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        .error { color: red;}
    </style>
</head>
<body>
    <h1>Registration Results</h1>
    <?php // Script 6.2 - handle_reg.php
    /* This script receives seven values from register.html
    email, password, confirm, year, terms, color, submit */

    // Address error management, if you want.

    // Flag variable to track success:
    $okay = true;

    // Validate the email address:
    if (empty($_POST['email'])) {
        print '<p class="error">Please enter your email address.</p>';
        $okay = false;
    }

    // Validate the password:
    if (empty($_POST['password'])) {
        print '<p class="error">Please enter your password.</p>';
        $okay = false;
    }

    // Check the two passwords for equality:
    if ($_POST['password'] != $_POST['confirm']) {
        print '<p class="error">Your confirmed password does not match the original passowrd.</p>';
        $okay = false;
    }

    // Validate the birth year:
    if (is_numeric($_POST['year']) AND (strlen($_POST['year']) == 4)){
        // Check they were born before this year:
        if ($_POST['year'] < 2020) {
            $age = 2020 - $_POST['year']; //Calculate age this year
         }else {
            print '<p class="error">Either you entered your birth wrong or you come from the future!</p>';
            $okay = false;
        } // End of 2nd conditional
    } else {
        print '<p class="error">Please enter the year you were born as four digits.</p>';
            $okay = false;
    } // End of 1st conditional

    // Validate the terms:
    if (!isset($_POST['terms'])) {
        print '<p class="error">You must accept the terms.</p>';
        $okay = false;
    }

    // If there were no errors, print a success message:
    if ($okay) {
        print '<p>You have been successfully registered (but not really).</p>';
        print "<p>You will turn $age this year.</p>";
    }


    ?>
</body>
</html>