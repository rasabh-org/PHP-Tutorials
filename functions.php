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
    // PHP function names are not case sensitive
    function print_name($name) {
        echo "<h3>My name is $name.</h3>";
    }

    print_name('Raan');
    Print_Name('Peeyush');
    PRINT_NAME('Bipasha');

    // Default argument values
    function print_age(int $age = 20) {
        echo "<h3>My age is $age.</h3>";
    }

    print_age('25'); // Prints the default age

    // Returning values
    function return_town($town_no) {
        switch ($town_no) {
            case 0:
                return 'Guwahati';
                break;
            case 1:
                return 'Amingaon';
                break;
            case 2:
                return 'Hajo';
                break;
            case 3:
                return 'Sarthebari';
                break;
            default: echo "\"error: Town is unknown\"";
        }
    }

    echo "<h3>I live in <i>", return_town(3), "</i>.</h3>";

    // Passing arguments as references
    $dob = NULL;

    function set_year($age, &$year) {
        $year = 2024 - $age;
    }

    set_year(25, $dob);
    echo "<h3>My birth year is $dob.</h3>";

    /**
     * Variable number of arguments:
     ** By using the ... operator in front of the function parameter,
     * the function accepts an unknown number of arguments. This is also called a variadic function.
     ** The variadic function argument becomes an array.
     ** You can only have one argument with variable length, and it has to be the last argument.
     */
    function list_of_cars(...$cars) {
        echo "<hr><h2 style='color: Green'>List of Cars</h2>";
        echo "<h3><ul>";
        foreach ($cars as $car) {
            echo "<li>$car</li>";
        }
        echo "</ul></h3>";
    }

    list_of_cars('Volvo', 'BMW', 'Audi', 'Toyota');

    function list_of_names($last, ...$first) {
        echo "<hr><h2 style='color: Green'>List of Names</h2>";
        echo "<h3><ul>";
        foreach ($first as $fname) {
            echo "<li><i>Hi, my name is $fname $last.</i></li>";
        }
        echo "</ul></h3>";
    }

    list_of_names('Bhuyan', 'Raan Saurav', 'Peeyush Kashyap', 'Khagendra Nath');
    ?>
</body>
</html>