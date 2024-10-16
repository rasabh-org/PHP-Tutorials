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
 * PHP supports the following data types:
 * 1. integer
 * 2. string
 * 3. boolean
 * 4. float
 * 5. array
 * 6. object (related to OOP and Classes)
 * 7. NULL
 ** 8. Resource: The special resource type is not an actual data type.
 **     It is the storing of a reference to functions and resources external to PHP.
 **     A common example of using the resource data type is a database call.
 */
/**
 * Integers can be specified in:
 ** 1. decimal (base 10) (default),
 * 2. hexadecimal (base 16),
 * 3. octal (base 8),
 * 4. binary (base 2) notation
 */
$x = 5;
echo '<h4>Data type of x: ', var_dump($x) , '</h4>';

$str = "Hello";
echo '<h4>Data type of str: ', var_dump($str), '</h4>';

/**
 * A float (floating point number) is a number with:
** 1. a decimal point (default) or
* 2. a number in exponential form.
*/
$double = 10.5;
echo '<h4>Data type of double: ', var_dump($double), '</h4>';

$bool = false;
echo '<h4>Data type of bool: ', var_dump($bool), '</h4>';

$arr = array('Volvo', 'BMW', 'Audi'); // An array stores multiple values in one single variable
echo '<h4>Data type of arr: ', var_dump($arr), '</h4>';

/**
 * Null is a special data type which can have only one value: NULL.
* A variable of data type NULL is a variable that has no value assigned to it.
** If a variable is created without a value, it is automatically assigned a value of NULL.
** Variables can also be emptied by setting the value to NULL.
*/
$arr = NULL;
echo '<h4>Data type of arr after null: ', var_dump($arr), '</h4>';

// Change the data type:
$x = 5; // Integer
echo '<h4>Data type of x: ', var_dump($x), '</h4>';

$x = "This is a string"; // String
echo '<h4>Data type of x after change: ', var_dump($x), '</h4>';

/**
 * Type casting: Allows you to change the data type of a
 * variable without changing the value.
 */
$x = 5;
echo '<hr><h4>Value of x before change: ' . $x . '</h4>';
echo '<h4>Data type of x before change: ', var_dump($x), '</h4>';

$x = (string) $x;
echo '<h4>Value of x after change: ' . $x . '</h4>';
echo '<h4>Data type of x after change: ', var_dump($x), '</h4>';
?>
</body>
</html>