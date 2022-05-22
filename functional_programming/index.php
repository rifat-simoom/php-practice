<?php

$routes = [];

storeRoute('/', function(){
    echo 'Home Page!';
});

storeRoute('/login', function (){
   echo 'Login Page!';
});

function storeRoute(string $path, callable  $callback){
    global  $routes;
    $routes[$path] = $callback;
}

run();


function run()
{
    global $routes;
    $uri = $_SERVER['REQUEST_URI'];
    foreach ($routes as $path => $callback){
        if($path == $uri){
            $callback();
        }else{
            continue;
        }
    }
}

