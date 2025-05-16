<?php

namespace Source\App;

use Source\Models\Login;

class Logins
{
    public function getLogin($param): void
    {
        try {
        } catch (\Throwable $e) {
            echo json_encode(["message" => $e->getMessage()]);
        }
    }

    public function criarConta($param): void
    {
        try {
            $login = new Login();
            $login->setCpf($param["cpf"]);
            $login->setEmail($param["email"]);
            $login->setMatricula(isset($param["matricula"]) ? $param["matricula"] : null);
            $login->setNome($param["nome"]);
            $login->setSenha($param["senha"]);

            $callback = $login->criarConta();

            echo json_encode($callback);
        } catch (\Throwable $e) {
            echo json_encode(["message" => $e->getMessage()]);
        }
    }
}
