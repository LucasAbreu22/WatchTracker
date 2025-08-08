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

            $callback = $ponto->calcularDia(isset($param["pontos"]) ? $param["pontos"] : null);

            echo json_encode($callback);
        } catch (\Throwable $e) {
            echo json_encode(["message" => $e->getMessage()]);
        }
    }

    public function getDetalhes($param): void
    {
        try {

            $ponto = new Ponto();

            $callback = $ponto->getDetalhes($param["date"]);

            echo json_encode($callback);
        } catch (\Throwable $e) {
            echo json_encode(["message" => $e->getMessage()]);
        }
    }
}
