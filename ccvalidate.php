<?php
//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

var_dump($_POST);
const price = 3.50;

if(validForm()) {
    total($_POST['flavor']);
} else {
    echo "<p>Order Error!</p>";
}

function validForm() {
    return validName($_POST['yourName']) && validFlavors($_POST['flavor']);
}

function validName($name) {
    if(empty($name)) {
        echo "<p>Full name is required</p>";
        return false;
    }
    return true;
}

function validFlavors($check) {

    $flavors = array('The Grasshopper', 'Whiskey Maple Bacon', 'Carrot Walnut', 'Salted Caramel Cupcake', 'Red Velvet',
                     'Lemon Drop', 'Tiramisu');
    foreach($check as $item) {
        if(!in_array($item, $flavors)){
            echo "<p>stop spoofing</p>";
            return false;
        }
    }
    echo "<p>true</p>";
    return true;
}

function total($check) {
    $total = 0;
    $name = $_POST['yourName'];
    echo "<h1>Thank you, $name, for your order!</h1>";
    echo "Order Summary: <br>";
    echo "<ul>";
    foreach($check as $item) {
        echo "<li>$item</li>";
        $total += price;
    }
    echo "</ul>";
    echo "Order Total: $$total";
}
?>

