<?php

namespace Source\App;

use League\Plates\Engine;
use Source\Models\Caminho;
use Source\Models\GrupoIdea;
use Source\Models\Mapeamento;
use Source\Models\PerfilOperacional;
use Source\Models\Permissao;
use Source\Models\Setor;
use Source\Models\Usuario;
use stdClass;

class Web
{
    private $view;

    public function __construct($router)
    {
        $this->view = new Engine(dirname(__DIR__, 2) . '/theme', "php");

        $this->view->addData(["router" => $router]);
    }

    public function home($data): void
    {

        echo $this->view->render("home", [
            "title" => "Home",
        ]);
    }

    public function configuracoes($data): void
    {

        echo $this->view->render("configuracoes", [
            "title" => "Login",
        ]);
    }

    public function login($data): void
    {

        echo $this->view->render("login", [
            "title" => "Login",
        ]);
    }

    public function criarConta($data): void
    {

        echo $this->view->render("criarConta", [
            "title" => "criarConta",
        ]);
    }

    public function error($data): void
    {

        echo $this->view->render("error", [
            "title" => "Erro",
            "error" => $data["errcode"]
        ]);
    }
}
