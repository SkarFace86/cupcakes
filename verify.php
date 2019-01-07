<?php
/**
 * Created by PhpStorm.
 * User: Brandon
 * Date: 1/6/2019
 * Time: 3:45 PM
 */

if(empty($_POST['name'])) {
    $isValid = false;
}

if(empty($_POST['flavor'])) {
    $isValid = false;
}