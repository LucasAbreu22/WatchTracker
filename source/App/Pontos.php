<?php

namespace Source\App;

use Exception;
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

    public function setPontos($param): void
    {
        try {
            $pontosList = $param["pontosList"] ?? [];

            if (empty($pontosList)) {
                throw new Exception("Nenhum ponto encontrado!", 501);
            }

            $callback = [];
            $index = 0;

            do {
                $ponto = new Ponto();

                if (isset($pontosList[$index]["id_pontos_batidos"])) $ponto->setIdPonto($pontosList[$index]["id_pontos_batidos"]);

                $ponto->setHorario($pontosList[$index]["horario"]);
                $ponto->setDia($pontosList[$index]["dia"]);
                $ponto->setIntervalo($pontosList[$index]["intervalo"]);

                $callback = $ponto->salvarHorario();

                $index++;
            } while ($index < count($pontosList));


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
