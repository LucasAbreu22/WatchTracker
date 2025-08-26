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
            $updatedPontos = $param["updatedPontos"] ?? [];

            if (empty($updatedPontos)) {
                throw new Exception("Nenhum ponto encontrado!", 501);
            }
            $ponto = new Ponto();

            $ponto->setIdPonto($updatedPontos["id_pontos_batidos"]);
            $ponto->setHorario($updatedPontos["horario"]);
            $ponto->setDia($updatedPontos["dia"]);
            $ponto->setObservacao($updatedPontos["id_observacao"]);

            echo json_encode($$ponto->salvarHorario());
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
