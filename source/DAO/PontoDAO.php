<?php

namespace Source\DAO;

use Exception;
use PDO;
use Source\Connect;

class PontoDAO
{

    private $connect;
    private $error;

    public function __construct()
    {
        $this->connect = Connect::getInstance();
    }

    public function getPontos($periodo)
    {
        try {
            $sql = "SELECT * FROM pontos_batidos WHERE dia >= ? AND dia <= ? ORDER BY dia ASC, horario ASC";

            $stmt = $this->connect->prepare($sql);
            $stmt->bindValue(1, $periodo["inicio_periodo"], PDO::PARAM_STR);
            $stmt->bindValue(2, $periodo["final_periodo"], PDO::PARAM_STR);
            /* $stmt->debugDumpParams(); */
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\Throwable $e) {
            throw new Exception("[ERRO][Atividade 01] " . $e->getMessage());
        }
    }

    public function getDetalhesDia($data)
    {
        try {
            $sql = "SELECT 
            pb.id, pb.dia, pb.horario, pb.intervalo, 
            op.id as id_observacao, op.abono, op.observacao,
            op.periodo_ini, op.periodo_fim, op.tempo
            FROM pontos_batidos pb 
            LEFT JOIN observacao_ponto op 
            ON pb.id = op.id_ponto 
            WHERE 
            dia = ? 
            ORDER BY horario ASC";

            $stmt = $this->connect->prepare($sql);
            $stmt->bindValue(1, $data, PDO::PARAM_STR);
            /* $stmt->debugDumpParams(); */
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\Throwable $e) {
            throw new Exception("[ERRO][Atividade 05] " . $e->getMessage());
        }
    }

    public function criar(string $exemplo)
    {
        try {

            $sql = "INSERT INTO atividade (exemplo) VALUES (?)";
            $stmt = $this->connect->prepare($sql);

            /* $stmt->debugDumpParams(); */

            $stmt->bindValue(1, $exemplo, PDO::PARAM_STR);
            $stmt->execute();

            return true;
        } catch (\Throwable $e) {
            throw new Exception("[ERRO][Atividade 02] " . $e->getMessage());
        }
    }

    public function editar(int $id_exemplo, string $exemplo)
    {
        try {
            $sql = "UPDATE atividade SET exemplo = ? WHERE id_exemplo = ?";

            $stmt = $this->connect->prepare($sql);

            /* $stmt->debugDumpParams(); */
            $stmt->bindValue(1, $exemplo, PDO::PARAM_INT);
            $stmt->bindValue(2, $id_exemplo, PDO::PARAM_STR);
            $stmt->execute();

            return true;
        } catch (\Throwable $e) {
            throw new Exception("[ERRO][Atividade 03] " . $e->getMessage());
        }
    }

    public function deletar(int $id_exemplo)
    {
        try {
            $sql = "UPDATE atividade SET visibilidade = false WHERE id_exemplo = ?";

            $stmt = $this->connect->prepare($sql);

            /* $stmt->debugDumpParams(); */
            $stmt->bindValue(1, $id_exemplo, PDO::PARAM_INT);
            $stmt->execute();

            return true;
        } catch (\Throwable $e) {
            throw new Exception("[ERRO][Atividade 04] " . $e->getMessage());
        }
    }
}
