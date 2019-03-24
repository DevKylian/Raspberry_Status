<?php

// Main files
include_once '_config/config.php';
//include_once '_config/db.php';
include_once '_functions/functions.php';

// Current page
if (isset($_GET['page']) AND !empty($_GET['page'])) {
    $page = trim(strtolower($_GET['page']));
} else {
    $page = 'home';
}

// Array containing all the pages
$allPages = scandir('controllers/');

// Verifying the existence of the page
if (in_array($page.'_controller.php', $allPages)) {
    include_once 'models/'.$page.'_model.php';
    include_once 'controllers/'.$page.'_controller.php';
    include_once 'views/'.$page.'_view.php';
} else {
    echo 'Error 404';
}