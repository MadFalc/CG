<?php
$urlMap = [
    '/blok1' => 'blok1.php',
    '/blok2pt1' => 'blok2pt1.php',
    '/blok2pt2' => 'blok2pt2.php',
    '/blok2EindOpdr' => 'blok2EindOpdr.php',
    '/login' => 'login.php',
    '/logout' => 'logout.php',
    '/name' => 'name.php',
    '/pictures' => 'pictures.php',
    '/random' => 'random.php',
    '/secret' => 'secret.php',
    '/list-tours' => 'list-tours.php',
    '/create-tour' => 'create-tour.php',
    '/edit-tour' => 'edit-tour.php',
    '/' => 'homepage.php'
];

$pathInfo = $_SERVER['PATH_INFO'] ?? '/';

if (isset($urlMap[$pathInfo])) {
    // Load a specific page script
    include(__DIR__ . '/../pages/' . $urlMap[$pathInfo]);
} else {
    // Produce a 404 response
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    include(__DIR__ . '/../pages/404.php');
}
;