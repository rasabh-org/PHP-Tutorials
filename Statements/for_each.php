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
     * The foreach loop - Loops through a block of code
     * for each element in an array or each property in an object.
     */

    // For indexed arrays
    $colors = array('White', 'Red', 'Orange', 'Yellow', 'Green', 'Blue', 'Indigo', 'Violet', 'Black');

    echo "<h2 style='color: Green'>Loop Through Indexed Array</h2>";
    echo "<h3>";
    foreach ($colors as $color) {
        if ($color == 'White') continue;
        elseif ($color == 'Black') break;

        echo "$color<br>";
    }
    echo "</h3>";

    // For associative arrays
    $cars = array('Volvo' => 'Red', 'BMW' => 'Blue', 'Audi' => 'Black', 'Jaguar' => 'White');

    echo "<hr><h2 style='color: Green'>Loop Through Associative Array</h2>";
    echo "<h3>";
    foreach ($cars as $car => $color) {
        echo "Car: <i>$car</i> and Color: <i>$color</i><br>";
    }
    echo "</h3>";

    // For objects
    class car {
        public $Model, $Color;

        public function __construct($Model, $Color) {
            $this->Model = $Model;
            $this->Color = $Color;
        }
    }

    $Volvo = new car('XC90', 'white');

    echo "<hr><h2 style='color: Green'>Loop Through Object Properties</h2>";
    echo "<h3>";
    foreach ($Volvo as $model => $color) {
        echo "$model: $color<br>";
    }
    echo "</h3>";

    // Looping by reference (&):
    echo "<hr><h2 style='color: Green'>Change Array Item By Reference</h2>";
    echo "<h3>";
    foreach ($cars as $car => &$color) {    // Use of reference operator
        if ($car == 'BMW') $color = 'Navy';

        echo "Car: <i>$car</i> and color: <i>$color</i><br>";
    }
    echo "</h3>";

    // Alternative syntax:
    echo "<hr><h2 style='color: Green'>Alternative Syntax of For-Each</h2>";
    echo "<h3>";
    foreach ($cars as $car => &$color):
        if ($car == 'BMW') $color = 'Blue';

        echo "Car: <i>$car</i> and color: <i>$color</i><br>";
    endforeach;
    echo "</h3>";
    ?>
</body>
</html>