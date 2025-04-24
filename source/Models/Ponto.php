<?php

namespace Source\Models;

use DateTime;
use Exception;
use Source\DAO\PontoDAO;

class Ponto
{
    private ?int $id;
    private int $horario;
    private int $dia;
    private array $observacao;

    function __construct()
    {
        $this->id = null;
    }

    public function getIdPonto()
    {
        return $this->id;
    }

    public function setIdPonto(int $param)
    {
        if ($param < 0) throw new Exception("<br>[ERRO][Ponto Clss 01] Informação de ID inválida!");

        $this->id = $param;
    }

    public function getHorario()
    {
        return $this->horario;
    }

    public function setHorario(string $param)
    {
        if (empty($param)) throw new Exception("<br>[ERRO][Ponto Clss 02] Informação de Horário vazia!");

        $this->horario = $param;
    }

    public function getDia()
    {
        return $this->dia;
    }

    public function setDia(string $param)
    {
        if (empty($param)) throw new Exception("<br>[ERRO][Ponto Clss 03] Informação de DIA vazia!");

        $this->dia = $param;
    }

    public function getTafera()
    {
        return $this->observacao;
    }

    public function setTafera(array $param)
    {
        return $this->observacao = $param;
    }

    public function getPontos($param)
    {

        if (!isset($param["mes"]) || $param["mes"] < 0) throw new Exception("<br>[ERRO][Ponto Clss 04] Informação de MÊS inválida!");
        if (!isset($param["ano"]) || $param["ano"] < 1950) throw new Exception("<br>[ERRO][Ponto Clss 05] Informação de ANO inválida!");
        $PontoDAO = new PontoDAO;
        return $PontoDAO->getPontos($this->criarPeriodo($param["mes"], $param["ano"]));
    }

    private function criarPeriodo($mes, $ano)
    {
        $mes++;

        $mes_anterior = $mes - 1;
        $ano_anterior = $ano;
        $mes_seguinte = $mes + 1;
        $ano_seguinte = $ano;

        if ($mes_anterior < 1) {
            $mes_anterior = 12;
            $ano_anterior = $ano - 1;
        }
        if ($mes_seguinte > 12) {
            $mes_seguinte = 1;
            $ano_seguinte = $ano + 1;
        }

        $inicio_periodo = "$ano_anterior-$mes_anterior-18";
        $final_periodo = "$ano_seguinte-$mes_seguinte-11";

        return ["inicio_periodo" => $inicio_periodo, "final_periodo" => $final_periodo];
    }

    public function calcularDia(array $pontos)
    {

        try {
            //code...
            $tempo_trabalhado = "00:00";
            $tempo_trabalhar = "00:00";
            $tempo_intervalo = "00:00";
            $periodos = [];

            for ($i = 0; $i < count($pontos); $i++) {
                if (isset($pontos[$i + 1])) {
                    $data1 = new DateTime($pontos[$i]['dia'] . " " . $pontos[$i]['horario']);
                    $data2 = new DateTime($pontos[$i + 1]['dia'] . " " . $pontos[$i + 1]['horario']);

                    if ($pontos[$i]['intervalo'] == 1 && $i % 2 === 1) $tempo_intervalo = $data1->diff($data2)->format('%Hh%I');

                    $periodos[] = ["periodo" => [$pontos[$i]['horario'], $pontos[$i + 1]['horario']], "tempo" => $data1->diff($data2)->format('%H:%I')];
                }
            }
            for ($i = 0; $i < count($periodos); $i++) {
                if ($i % 2 === 0) {
                    $tempo_trabalhado = explode(":", $tempo_trabalhado);
                    $horario = explode(":", $periodos[$i]["tempo"]);

                    $tempo_trabalhado[0] = intval($tempo_trabalhado[0]) + intval($horario[0]);
                    $tempo_trabalhado[1] = intval($tempo_trabalhado[1]) + intval($horario[1]);

                    $tempo_trabalhado = $tempo_trabalhado[0] . ":" . $tempo_trabalhado[1];
                }
            }

            $tempo_trabalhado = explode(":", $tempo_trabalhado); // Ex: "2:85"
            $hora = (int)$tempo_trabalhado[0];
            $minuto = (int)$tempo_trabalhado[1];

            // Converte todos os minutos para o total
            $minutosTotais = ($hora * 60) + $minuto;

            // Agora converte de volta para horas + minutos formatado
            $horasFinais = floor($minutosTotais / 60);
            $minutosFinais = $minutosTotais % 60;

            $tempo_trabalhado = sprintf('%02dh%02d', $horasFinais, $minutosFinais);

            return ["periodos" => $periodos, "tempo_intervalo" => $tempo_intervalo, "tempo_trabalhado" => $tempo_trabalhado];
        } catch (\Throwable $e) {
            throw new Exception("<br>[ERRO][Atividade 06] " . $e->getMessage());
        }
    }
}
