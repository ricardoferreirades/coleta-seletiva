<?php

require_once("vendor/autoload.php");

use \Slim\Slim;
use \ColetaSeletiva\Page;
use \ColetaSeletiva\PageAdmin;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
    
    $page = new Page();
    
    $page->setTpl("index");
    
});

$app->get('/sobre', function() {
    
    $page = new Page();
    
    $page->setTpl("about");
    
});

$app->get('/como-funciona', function() {
    
    $page = new Page();
    
    $page->setTpl("how-it-works");
    
});

// admin routes
$app->get('/admin', function() {
    
    $page = new PageAdmin();
    
    $page->setTpl("index");
    
});

// admin routes
$app->get('/admin/signin', function() {
    
    $page = new PageAdmin([
        "header"=> false,
        "footer"=>false
    ]);
    
    $page->setTpl("signin");
    
});

$app->run();

?>