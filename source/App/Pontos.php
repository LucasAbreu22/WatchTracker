<?php

namespace Source\App;

use Source\Models\Ponto;


class Pontos
{
    public function getPontos($param): void
    {
        try {

            $ponto = new Ponto();

            $callback = $ponto->getPontos($param);

            echo json_encode($callback);
        } catch (\Throwable $e) {
            echo json_encode(["message" => $e->getMessage()]);
        }
    }

    public function calcularDia($param): void
    {
        try {

            $ponto = new Ponto();

            $callback = $ponto->calcularDia($param["pontos"]);

            echo json_encode($callback);
        } catch (\Throwable $e) {
            echo json_encode(["message" => $e->getMessage()]);
        }
    }
}
