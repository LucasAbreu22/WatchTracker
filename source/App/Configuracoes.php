<?php

namespace Source\App;

use Source\Models\Usuario;

class Configuracoes
{
    public function carregarFerias($param): void
    {
        try {

            $usuario = new Usuario();

            $usuario->setIdUsuario($_SESSION["id_usuario"]);
            $callback = $usuario->getFerias();

            echo json_encode($callback);
        } catch (\Throwable $e) {
            echo json_encode(["message" => $e->getMessage()]);
        }
    }
}
