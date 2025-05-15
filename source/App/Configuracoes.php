<?php

namespace Source\App;

use Source\Models\Ponto;


class Configuracoes
{
    public function getConfiguracoes($param): void
    {
        try {

            $ponto = new Ponto();

            $callback = $ponto->getPontos($param);

            echo json_encode($callback);
        } catch (\Throwable $e) {
            echo json_encode(["message" => $e->getMessage()]);
        }
    }
}
