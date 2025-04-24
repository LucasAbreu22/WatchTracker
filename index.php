<?php

use CoffeeCode\Router\Router;

require __DIR__ . "/vendor/autoload.php";

$router = new Router(URL_BASE);

$router->namespace("Source\App");


/* 
    EXEMPLO ROTA

    $router->group(null);
    $router->get("/", "Form:home", "form.home"); 
    $router->get("/{FILTER}", "Form:filter", "form.contato"); 

    $router->group("funcionarios");
    $router->get("/", "Web:funcionarios"); 
    $router->get("/{FILTER}", "Form:filter", "form.funcionarios"); 

*/

$router->group(null);
$router->get("/", "Web:home");
$router->post("/getPontos", "Pontos:getPontos");
$router->post("/calcularDia", "Pontos:calcularDia");

/* ROTA DE ERRO */
$router->group("error");
$router->get("/{errcode}", "Web:error");

$router->dispatch();

if ($router->error()) {
    $router->redirect("/error/{$router->error()}");
}
