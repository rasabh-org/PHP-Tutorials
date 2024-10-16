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
     * Casting of objects to arrays:
     ** Objects converts into associative arrays,
     * where the property names becomes the keys and the property values becomes the values:
     */
    echo "<h2 style='color: Green'>Casting Objects into Arrays</h2>";

    class car {
        public $model, $color;

        public function __construct($model, $color) {
            $this->model = $model;
            $this->color = $color;
        }

        public function message() {
            return "<h4 style='color: Brown'>Car Model = $this->model</h4><h4 style='color: Brown'>Car Color = $this->color</h4>";
        }
    }

    $Volvo = new car("X90", "Black");

    echo $Volvo->message();

    $Volvo = (array) $Volvo;

    echo "<h3>Volvo after casting to array:<br>", var_dump($Volvo), "</h3>";

    /**
     * Casting to objects:
     * When converting into objects, most data types converts into a object
     * with one property, named "scalar", with the corresponding value.
     * NULL values converts to an empty object.
     */
    echo "<hr><h2 style='color: Green'>Casting into Objects</h2>";

    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "hello"; // String
    $d = true;    // Boolean
    $e = NULL;    // NULL

    $a = (object) $a;
    echo "<h4>Value of a after casting to object: $a->scalar</h4>";
    echo "<h4>Data type of a: ", var_dump($a), "</h4>";

    $b = (object) $b;
    echo "<h4>Value of b after casting to object: $b->scalar</h4>";
    echo "<h4>Data type of b: ", var_dump($b), "</h4>";

    $c = (object) $c;
    echo "<h4>Value of c after casting to object: $c->scalar</h4>";
    echo "<h4>Data type of c: ", var_dump($c), "</h4>";

    $d = (object) $d;
    echo "<h4>Value of d after casting to object: $d->scalar</h4>";
    echo "<h4>Data type of d: ", var_dump($d), "</h4>";

    $e = (object) $e;
    echo "<h4>Value of e after casting to object: $e->scalar</h4>"; // Undefined property
    echo "<h4>Data type of e: ", var_dump($e), "</h4>";

    /**
     * Casting indexed arrays to objects:
     * Indexed arrays converts into objects with
     * the index number as property name and the value as property value.
     */
    echo "<hr><h2 style='color: Green'>Casting Indexed Arrays into Objects</h2>";

    $arr = array("Volvo", "BMW", "Audi");

    $arr = (object) $arr;
    echo "<h4>Values of the arrays:<br>", var_dump($arr), "</h4>";

    /**
     * Casting associative array to objects:
     * Associative arrays converts into objects with the keys
     * as property names and values as property values.
     */
    echo "<hr><h2 style='color: Green'>Casting Associative Arrays into Objects</h2>";

    $arr = array("Raan"=>25, "Bipasha"=>22, "Peeyush"=>17);

    $arr = (object) $arr;
    echo "<h4>Values of the arrays:<br>", var_dump($arr), "</h4>";
    ?>
</body>
</html>