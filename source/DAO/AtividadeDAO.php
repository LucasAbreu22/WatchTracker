<?php

namespace Source\DAO;

use CoffeeCode\DataLayer\Connect;
use Exception;
use PDO;

class AtividadeDAO
{

    private $connect;
    private $error;

    public function __construct()
    {
        $this->connect = Connect::getInstance();
        $this->error = Connect::getError();
    }

    public function select()
    {
        try {
            $sql = "SELECT * FROM exemplo WHERE 1=1 AND visibilidade = true";

            $stmt = $this->connect->prepare($sql);

            /* $stmt->debugDumpParams(); */
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\Throwable $e) {
            throw new Exception("<br>[ERRO][Atividade 01] " . $e->getMessage());
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
            throw new Exception("<br>[ERRO][Atividade 02] " . $e->getMessage());
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
            throw new Exception("<br>[ERRO][Atividade 03] " . $e->getMessage());
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
            throw new Exception("<br>[ERRO][Atividade 04] " . $e->getMessage());
        }
    }
}
