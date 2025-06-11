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
$router->post("/getDetalhes", "Pontos:getDetalhes");

$router->group("configuracoes");
$router->get("/", "Web:configuracoes");
$router->post("/carregarFerias", "Configuracoes:carregarFerias");

$router->group("login");
$router->get("/", "Web:login");
$router->post("/logar", "Logins:logar");
$router->get("/criarUsuario", "Web:criarUsuario");
$router->post("/criarUsuario", "Logins:criarUsuario");

/* ROTA DE ERRO */
$router->group("error");
$router->get("/{errcode}", "Web:error");

$router->dispatch();

if ($router->error()) {
    $router->redirect("/error/{$router->error()}");
}
