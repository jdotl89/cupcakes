<?php
//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="cupcake.css">
    <title>Document</title>
</head>
<body>

<form action="ccvalidate.php" method="POST">

    <div class="form-group">
        <label for="yourName">Your Name</label>
        <input type="text" class="form-control" id="yourName" name="yourName">
        <span class="err" id="errFname">Please enter your name</span>
    </div>

    <legend>Cupcake Flavors</legend>

    <?php
    $flavors = array('grasshopper'=>'The Grasshopper', 'maple'=>'Whiskey Maple Bacon',
        'carrot'=>'Carrot Walnut', 'caramel'=>'Salted Caramel Cupcake',
        'velvet'=>'Red Velvet', 'lemon'=>'Lemon Drop', 'tiramisu'=>'Tiramisu');

    foreach($flavors as $flavor => $x) {
        echo "<div class=\"form-group\">
        <input class=\"form-check-label\" type=\"checkbox\" name=\"flavor[]\"
               id=\"$flavor\" value=\"$x\">
        <label class=\"form-check-label\" for=\"$flavor\">$x</label>
    </div>";
    }

    ?>


    <span class="err" id="errToppings">Please select at least one flavor.</span>

    <button type="submit">Order</button>
</form>

</body>
</html>
