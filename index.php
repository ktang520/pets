<?php
/*
 * Kasyn Tang
 * January 2024
 * http://ktang.greenriverdev.com/328/pets/
 * This is my Controller for the pets app
 */

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once ('vendor/autoload.php');

// Instantiate Fat-Free Framework (F3)
$f3 = Base::instance();

// Define a default route
$f3->route('GET /', function () {
//    echo "My pets";

    // display a view page
    $view = new Template();
    echo $view->render('views/home.html');
});

// Run Fat-Free
$f3->run();