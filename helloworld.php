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
    echo "<h2>Hello World!</h2>";

    /**
     * phpversion() Library Function:
     * It returns the version number of the PHP.
     */
    echo "<a>The current PHP version is ", phpversion(), ".</a>";

    echo "<h2>PHP Detailed Information:</h2>";

    /**
     * phpinfo() Library Function:
     * It returns the overall detailed information of the
     * PHP environment.
     */
    phpinfo();
    ?>
</body>
</html>