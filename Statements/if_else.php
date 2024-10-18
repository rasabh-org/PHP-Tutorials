<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="server, php">
    <meta name="author" content="Raan Saurav Bhuyan">
    <meta name="description" content="PHP tutorial and guide.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /**
     * In PHP we have the following conditional statements:
     * 1. if statement - executes some code if one condition is true
     * 2. if...else statement - executes some code if a condition is true and another code
     *  if that condition is false
     * 3. if...elseif...else statement - executes different codes for more than two conditions
     * 4. switch statement - selects one of many blocks of code to be executed
     */
    $x = 5;
    $y = 10;

    if ($x === $y) {
        echo "<h3>$x is not identical to $y.</h3>";
    }
    else {
        echo "<h3>$x is not identical to $y.</h3>";

        // Nested if-else statements
        if ($x > $y) {
            echo "<h3>$x is greater than $y.</h3>";
        }
        elseif ($x < $y) {
            echo "<h3>$x is less than $y.</h3>";
        }
    }

    /**
     * Switch statements:
     * The expression is evaluated once.
     * The value of the expression is compared with the values of each case.
     * If there is a match, the associated block of code is executed.
     ** The break keyword breaks out of the switch block.
     ** The default code block is executed if there is no match.
     *
     * When PHP reaches a break keyword, it breaks out of the switch block.
     * This will stop the execution of more code, and no more cases are tested.
     */
    $favorite_color = 'White';

    switch ($favorite_color) {
        case 'Red':
            echo "<h3>My favorite color is <b style='color: Red'>$favorite_color</b>.</h3>";

            /**
             ** the next case will also be executed
             ** even if the evaluation does not match the case!
             */
            break;
        case 'Pink':
            echo "<h3>My favorite color is <b style='color: Pink'>$favorite_color</b>.</h3>";
            break;
        case 'Yellow':
            echo "<h3>My favorite color is <b style='color: Yellow'>$favorite_color</b>.</h3>";
            break;
        case 'Orange':
            echo "<h3>My favorite color is <b style='color: Orange'>$favorite_color</b>.</h3>";
        case 'Green':
            echo "<h3>My favorite color is <b style='color: Green'>$favorite_color</b>.</h3>";
            break;
        case 'Violet':
            echo "<h3>My favorite color is <b style='color: violet'>$favorite_color</b>.</h3>";
            break;
        case 'Blue':
            echo "<h3>My favorite color is <b style='color: Blue'>$favorite_color</b>.</h3>";
            break;
        case 'White':
            echo "<h3>My favorite color is <b>$favorite_color</b>.</h3>";
            break;
        default:
            echo "<h3>My favorite color is <b>$favorite_color</b>.</h3>";
    }
    ?>
</body>
</html>