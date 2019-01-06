<?php
/**
 * Created by PhpStorm.
 * User: Brandon Skar
 * Date: 1/6/2019
 * Time: 3:25 PM
 */
ini_set('display_errors', 1);
error_reporting(E_ALL);

$isValid = false;
$username = $_POST['name'];
include('verify.php');
if($isValid) {
    header('confirmation.php');
}
$cupcakes = [
    "grasshopper" => "The Grasshopper",
    "carrot" => "Carrot Walnut",
    "caramel" => "Salted Caramel Cupcake",
    "velvet" => "Red Velvet",
    "lemon" => "Lemon Drop",
    "tiramisu" => "Tiramisu"
]
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cupcake Fundraiser</title>
</head>
<body>
    <h1>Cupcake Fundraiser</h1>

</body>
</html>
