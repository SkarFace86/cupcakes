<?php
/**
 * Created by PhpStorm.
 * User: Brandon Skar
 * Date: 1/6/2019
 * Time: 3:25 PM
 */
ini_set('display_errors', 1);
error_reporting(E_ALL);

$cupcakes = [
    "grasshopper" => "The Grasshopper",
    "carrot" => "Carrot Walnut",
    "caramel" => "Salted Caramel Cupcake",
    "velvet" => "Red Velvet",
    "lemon" => "Lemon Drop",
    "tiramisu" => "Tiramisu"
];
$isValid = true;
$username = "";
$faultyInfo = "";
$nameError = "";
$flavorError = "";
$flavor = array();
if(!empty($_POST)) {
    include('verify.php');
    $username = $_POST['name'];
    if(!empty($_POST['flavor'])) { $flavor = $_POST['flavor']; }
}
if($isValid && !empty($_POST)) {
    require('confirmation.php');
}
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

    <form method="POST" action="">
        <fieldset>
            <!-- User Name -->
            <?php
                if(!empty($nameError)) { echo "<p style='color:red'>$nameError</p>"; }
            ?>
            <legend>Enter your name</legend>
            <label>Full Name:&nbsp;
                <input type="text" name="name"
                       value="<?php echo $username; ?>">
            </label>
        </fieldset>
        <br><br>
        <fieldset>
            <!-- Cupcakes -->
            <?php
                if(!empty($flavorError)) { echo "<p style='color:red'>$flavorError</p>"; }
                if(!empty($faultyInfo)) { echo "<p style='color:red'>$faultyInfo</p>"; }
            ?>+
            <legend>Select your cupcakes</legend>
            <label>
                <?php
                foreach($cupcakes as $key => $cupcake) {
                    echo "<input type='checkbox' name='flavor[]' value='$cupcake'";
                            if(in_array($cupcake, $flavor)) {
                                echo "checked='checked'";
                            }

                    echo "<label>&nbsp;$cupcake</label><br>";
                }
                ?>
            </label>
        </fieldset>
        <input type="submit" value="Place Order">
    </form>
</body>
</html>
