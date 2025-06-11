<?php

namespace Source\App;

use Source\Models\Usuario;

class Logins
{
    public function logar($param): void
    {
        try {
            $login = new Usuario();
            $login->setEmail($param["email"]);
            $login->setSenha($param["senha"]);
            echo json_encode($login->logar());
        } catch (\Throwable $e) {
            echo json_encode(["message" => $e->getMessage()]);
        }
    }

    public function criarUsuario($param): void
    {
        try {
            $login = new Usuario();
            $login->setCpf($param["cpf"]);
            $login->setEmail($param["email"]);
            $login->setMatricula(isset($param["matricula"]) ? $param["matricula"] : null);
            $login->setNome($param["nome"]);
            $login->setSenha($param["senha"]);

            $callback = $login->criarUsuario();

            echo json_encode($callback);
        } catch (\Throwable $e) {
            echo json_encode(["message" => $e->getMessage()]);
        }
    }
}
