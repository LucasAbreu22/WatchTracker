<?php

namespace Source\DAO;

use Exception;
use PDO;
use Source\Connect;

class UsuarioDAO
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
            throw new Exception("<br>[ERRO][Atividade 01] " . $e->getMessage());
        }
    }

    public function getUsuarioByEmail(string $email)
    {
        try {
            $sql = "SELECT * FROM usuario WHERE email = ? ";

            $stmt = $this->connect->prepare($sql);
            $stmt->bindValue(1, $email, PDO::PARAM_STR);
            /* $stmt->debugDumpParams(); */
            $stmt->execute();
            return $stmt->fetch();
        } catch (\Throwable $e) {
            throw new Exception("<br>[ERRO][Atividade 05] " . $e->getMessage());
        }
    }

    public function criar(string $cpf, string $email, ?string $matricula, string $nome, string $senha)
    {
        try {

            $sql = "INSERT INTO usuario (cpf, email, matricula, nome, senha) VALUES (?, ?, ?, ?, ?)";
            $stmt = $this->connect->prepare($sql);

            /* $stmt->debugDumpParams(); */

            $stmt->bindValue(1, $cpf, PDO::PARAM_STR);
            $stmt->bindValue(2, $email, PDO::PARAM_STR);
            $stmt->bindValue(3, $matricula, PDO::PARAM_STR);
            $stmt->bindValue(4, $nome, PDO::PARAM_STR);
            $stmt->bindValue(5, $senha, PDO::PARAM_STR);
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
