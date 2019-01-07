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
//print_r($flavor);
echo "<p>Thank you, $username, for your order!</p>";

echo "<p>Order Summary:</p>
    <ul>";
        foreach($flavor as $flav) {
            echo "<li><strong>$flav</strong></li>";
        }
echo "</ul><br>";

echo "Order Total: $" . number_format((double)$total, 2, '.', '');
exit;