<?php
/**
 * Created by PhpStorm.
 * User: Brandon
 * Date: 1/6/2019
 * Time: 3:43 PM
 */

$username = $_POST['name'];
$flavor = $_POST['flavor'];
$total = sizeof($flavor) * 3.50;
echo "<p>Thank you, $username, for your order!</p><br><br>";

echo "<p>Order Summary:</p><br>
    <ul>";
        foreach($flavor as $flav) {
            echo "<li><strong>$flav</strong></li>";
        }
echo "</ul><br>";

echo "Order Total: $$total";
exit;