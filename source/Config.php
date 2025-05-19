<?php

// define("URL_BASE", "http://10.120.1.125/WatchTracker");
define("URL_BASE", "http://localhost/WatchTracker");

define("CONNECT_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "watchtracker",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);

$tempoSessao = 60 * 20;

ini_set('session.gc_maxlifetime', $tempoSessao);
ini_set("session.cookie_lifetime", $tempoSessao);

session_start();

function checkRouteSession()
{
    // VERIFICAR A ROTA DA APLICAÇÃO
    if (str_contains(getRoute(), "route=/error/")) // CASO A ROTA SEJA A DE ERRO, RETORNE FALSO
    {
        return false;
    }
    switch (getRoute()) {
        case 'route=/login': // CASO A ROTA SEJA DE LOGIN
            // VERIFIQUE SE EXISTE A SESSÃO USUÁRIO
            // SE EXISTIR, REDIRECIONE PARA A HOME DO SISTEMA. SE NÃO RETORNE NADA
            return isset($_SESSION["usuario"]) ? redirect(url("/painel")) : false;

        case '': // CASO A ROTA SEJA A RAIZ, FAÇA NADA

        case 'route=/contato': // CASO A ROTA SEJA A DE CONTATO, FAÇA NADA            
            break;

        default: // CASO A ROTA SEJA QUALQUER OUTRA
            // VERIFIQUE SE EXISTE A SESSÃO USUÁRIO
            // SE NÃO EXISTIR, REDIRECIONE PARA A PÁGINA DE LOGIN DO SISTEMA. SE NÃO RETORNE NADA
            return !isset($_SESSION["usuario"]) ? redirect(url("/login")) :  true;
            break;
    }
}

function url(string $path): string
{
    if ($path) {
        return URL_BASE . "{$path}";
    }
    return URL_BASE;
}

function getRoute()
{
    return $_SERVER["QUERY_STRING"];
}
