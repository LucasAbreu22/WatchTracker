<?php

namespace Source\Models;

use DateTime;
use Exception;
use Source\DAO\PontoDAO;
use Source\DAO\UsuarioDAO;

class Login
{
    private ?int $id_usuario;
    private string $cpf;
    private string $email;
    private ?string $matricula;
    private string $nome;
    private string $senha;

    function __construct()
    {
        $this->id_usuario = null;
    }

    public function getIdUsuario(): ?int
    {
        return $this->id_usuario;
    }

    public function setIdUsuario(?int $id_usuario)
    {
        if ($id_usuario <= 0) throw new Exception("[ERRO][Login Clss 01] Informação de ID de usuário inválida!");

        $this->id_usuario = $id_usuario;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf)
    {
        if (empty($cpf)) throw new Exception("[ERRO][Login Clss 02] Informação de CPF vazia!");
        if (!$this->validarCPF($cpf)) throw new Exception("[ERRO][Login Clss 08] Informação de CPF inválida!");
        $this->cpf = $cpf;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        if (empty($email)) throw new Exception("[ERRO][Login Clss 03] Informação de E-MAIL vazia!");
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) throw new Exception("[ERRO][Login Clss 07] Informação de E-MAIL inválida!");

        $this->email = $email;
    }

    public function getMatricula(): ?string
    {
        return $this->matricula;
    }

    public function setMatricula(?string $matricula)
    {
        $this->matricula = $matricula;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome)
    {
        if (empty($nome)) throw new Exception("[ERRO][Login Clss 05] Informação de NOME vazia!");
        $this->nome = $nome;
    }

    public function getSenha(): string
    {
        return $this->senha;
    }

    public function setSenha(string $senha)
    {
        if (empty($senha)) throw new Exception("[ERRO][Login Clss 06] Informação de SENHA vazia!");

        $this->senha = password_hash($senha, PASSWORD_DEFAULT);;
    }

    public function logar()
    {
        $usuarioDAO = new UsuarioDAO();
        $login = $usuarioDAO->getUsuarioByEmail($this->email);

        if ($login && password_verify($this->senha, $login->senha)) {
            $_SESSION["id_usuario"] = $login->id_usuario;
            $_SESSION["nome"] = $login->nome;

            $callback["message"] = "LOGAR";
        } else {
            throw new Exception("[ERRO] E-MAIL ou SENHA inválida");
        }
    }

    public function criarConta()
    {
        $usuarioDAO = new UsuarioDAO();
        $rsDAO = $usuarioDAO->criar($this->cpf, $this->email, $this->matricula, $this->nome, $this->senha);

        if ($rsDAO) {
            return $callback["message"] = "Conta criada com sucesso!";
        }
    }

    function validarCPF($cpf)
    {

        $cpf = preg_replace('/[^0-9]/is', '', $cpf);

        if (strlen($cpf) != 11) {
            return false;
        }

        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }

        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return false;
            }
        }
        return true;
    }
}
