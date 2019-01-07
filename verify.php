<?php
/**
 * Created by PhpStorm.
 * User: Brandon
 * Date: 1/6/2019
 * Time: 3:45 PM
 */

//check if name is filled in
if(empty($_POST['name'])) {
    $nameError = "** Name field required";
    $isValid = false;
}

//check if a flavor is checked
if(empty($_POST['flavor'])) {
    $flavorError = "** Select at least one flavor";
    $isValid = false;
}

//check if user entered faulty data
if(!empty($_POST['flavor'])) {
    foreach($_POST['flavor'] as $flavor) {
        if(!in_array($flavor, $cupcakes)) {
            $faultyInfo = "** You tried to bypass the system. Try again";
            $isValid = false;
        }
    }
}
