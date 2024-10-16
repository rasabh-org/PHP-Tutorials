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
     * PHP has 9 predefined constants:
     * 1. __CLASS__	If used inside a class, the class name is returned.
     * 2. __DIR__ The directory of the file.
     * 3. __FILE__ The file name including the full path.
     * 4. __FUNCTION__ If inside a function, the function name is returned.
     * 5. __LINE__ The current line number.
     * 6. __METHOD__ If used inside a function that belongs to a class,
     *  both class and function name is returned.
     * 7. __NAMESPACE__	If used inside a namespace,
     *  the name of the namespace is returned.
     * 8. __TRAIT__	If used inside a trait, the trait name is returned.
     * 9. ClassName::class	Returns the name of the specified class
     *  and the name of the namespace, if any.
     *
     ** The magic constants are case-insensitive,
     ** meaning __LINE__ returns the same as __line__.
     */
    echo "<h3>The current directory of the file: ", __DIR__, "</h3>";
    echo "<h3>The full path of the current file: ", __FILE__, "</h3>";
    echo "<h3>The current line number: ", __LINE__, "</h3>";
    ?>
</body>
</html>