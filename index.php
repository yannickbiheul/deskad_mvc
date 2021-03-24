<?php

require_once('controllers/Controller.php');
$controller = new Controller;

if (isset($_GET['action']) && isset($_GET['params'])) {

    if ($_GET['action'] == 'home' && isset($_GET['params'])) {
        $controller->home();
    }

} else if (isset($_GET['action'])) {

    if ($_GET['action'] == 'home') {
        $controller->home();
    }

    if ($_GET['action'] == 'connect') {
        $controller->connect();
    }

} else {
    $controller->home();
}