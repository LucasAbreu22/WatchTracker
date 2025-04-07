<?php

namespace Source\App;

use Source\Models\Atividade;


class Atividades
{
    public function getAtividades($param): void
    {
        try {

            $atividade = new Atividade();

            $callback = $atividade->getAtividades($param);

            echo json_encode($callback);
        } catch (\Throwable $e) {
            echo json_encode(["message" => $e->getMessage()]);
        }
    }

    public function concluirAtividade($param): void
    {
        try {

            $atividade = new Atividade();

            $atividade->setIdAtividade((int) $param["id_atividade"]);
            $atividade->setDataConclusao($param["data_conclusao"]);

            $callback = $atividade->concluirAtividade();

            echo json_encode($callback);
        } catch (\Throwable $e) {
            echo json_encode(["message" => $e->getMessage()]);
        }
    }

    public function excluirAtividade($param): void
    {
        try {

            $atividade = new Atividade();

            $atividade->setIdAtividade((int) $param["id_atividade"]);

            $callback = $atividade->excluirAtividade();

            echo json_encode($callback);
        } catch (\Throwable $e) {
            echo json_encode(["message" => $e->getMessage()]);
        }
    }
}
