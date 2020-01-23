<?php
/**
 * Created in PhpStorm
 * @author Brian Kiehn
 * @date 1/12/2020
 * @version 1.0
 * index.php
 * https://github.com/medioxumate/dating2.git
 * GreenRiverDev
 */

//Session
session_start();

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function(){
    $view = new Template();
    echo $view-> render('views/home.html');
});

//Form routes
$f3->route('POST /form', function($f3) {
    $view = new Template();
    echo $view->render('views/form1.html');
});

//Run Fat-free
$f3->run();