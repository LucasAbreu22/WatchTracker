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
            $sql = "SELECT id_pontos_batidos, 
            DATE_FORMAT(horario, '%H:%i') as horario, 
            dia, intervalo 
            FROM pontos_batidos 
            WHERE dia >= ? 
            AND dia <= ? 
            ORDER BY dia ASC, horario ASC";

            $stmt = $this->connect->prepare($sql);
            $stmt->bindValue(1, $periodo["inicio_periodo"], PDO::PARAM_STR);
            $stmt->bindValue(2, $periodo["final_periodo"], PDO::PARAM_STR);
            /* $stmt->debugDumpParams(); */
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\Throwable $e) {
            throw new Exception("[ERRO][Pontos DAO 01] " . $e->getMessage());
        }
    }

    public function getDetalhesDia($data)
    {
        try {
            $sql = "SELECT 
            pb.id_pontos_batidos, pb.dia, DATE_FORMAT(pb.horario, '%H:%i') as horario, pb.intervalo, 
            op.id_observacao, op.abono, op.observacao,
            op.periodo_ini, op.periodo_fim, op.tempo
            FROM pontos_batidos pb 
            LEFT JOIN observacao_ponto op 
            ON pb.id_pontos_batidos = op.id_pontos_batidos 
            WHERE 
            dia = ? 
            ORDER BY horario ASC";

            $stmt = $this->connect->prepare($sql);
            $stmt->bindValue(1, $data, PDO::PARAM_STR);
            /* $stmt->debugDumpParams(); */
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\Throwable $e) {
            throw new Exception("[ERRO][Pontos DAO 05] " . $e->getMessage());
        }
    }

    public function criar(string $exemplo)
    {
        try {

            $sql = "INSERT INTO pontos_batidos (exemplo) VALUES (?)";
            $stmt = $this->connect->prepare($sql);

            /* $stmt->debugDumpParams(); */

            $stmt->bindValue(1, $exemplo, PDO::PARAM_STR);
            $stmt->execute();

            return true;
        } catch (\Throwable $e) {
            throw new Exception("[ERRO][Pontos DAO 02] " . $e->getMessage());
        }
    }

    public function editar(int $id_exemplo, string $exemplo)
    {
        try {
            $sql = "UPDATE pontos_batidos SET exemplo = ? WHERE id_exemplo = ?";

            $stmt = $this->connect->prepare($sql);

            /* $stmt->debugDumpParams(); */
            $stmt->bindValue(1, $exemplo, PDO::PARAM_INT);
            $stmt->bindValue(2, $id_exemplo, PDO::PARAM_STR);
            $stmt->execute();

            return true;
        } catch (\Throwable $e) {
            throw new Exception("[ERRO][Pontos DAO 03] " . $e->getMessage());
        }
    }

    public function deletar(int $id_exemplo)
    {
        try {
            $sql = "UPDATE pontos_batidos SET visibilidade = false WHERE id_exemplo = ?";

            $stmt = $this->connect->prepare($sql);

            /* $stmt->debugDumpParams(); */
            $stmt->bindValue(1, $id_exemplo, PDO::PARAM_INT);
            $stmt->execute();

            return true;
        } catch (\Throwable $e) {
            throw new Exception("[ERRO][Pontos DAO 04] " . $e->getMessage());
        }
    }
}
