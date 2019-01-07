<?php
/**
 * Created by PhpStorm.
 * User: Brandon
 * Date: 1/6/2019
 * Time: 3:45 PM
 */

if(empty($_POST['name'])) {
    $nameError = "** Name field required";
    $isValid = false;
}

if(empty($_POST['flavor'])) {
    $flavorError = "** Select at least one flavor";
    $isValid = false;
}