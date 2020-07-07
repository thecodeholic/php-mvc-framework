<?php
/**
 * User: TheCodeholic
 * Date: 7/7/2020
 * Time: 9:57 AM
 */


use app\core\Application;

require_once __DIR__.'/../vendor/autoload.php';
$app = new Application();

$app->router->get('/', 'home');
$app->router->get('/contact', function(){
    return 'Contact';
});

$app->run();