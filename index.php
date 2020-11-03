<?php

/*
 * Author: Coltin Espich
 * Date: 11/01/2020
 * Name: index.php
 * Description: short description about this file
 */

//include code in vendor/autoload.php file
require ("vendor/autoload.php");

//create an object of UserController
$user_controller = new UserController();

//add your code below this line to complete this file

//Determine what action is being called from the controller, defaulting to the index method.
$action = "index"; //Default action.

if (isset($_GET['action']) && !(empty($_GET['action']))) {
    $action = $_GET['action'];
}

//Call correct method based on action.
if ($action == "index") {
    $user_controller->index();
} else if ($action == "register") {
    $user_controller->register();
} else if ($action == "login") {
    $user_controller->login();
} else if ($action == "verify") {
    $user_controller->verify();
} else if ($action == "logout") {
    $user_controller->logout();
} else if ($action == "reset") {
    $user_controller->reset();
} else if ($action == "do_reset") {
    $user_controller->do_reset();
} else if ($action == "error") {
    $user_controller->error();
} else {
    $message = "Invalid action was requested";
    $user_controller->error($message);
}
