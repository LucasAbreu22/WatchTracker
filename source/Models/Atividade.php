<?php

namespace Source\Models;

use Exception;
use Source\DAO\AtividadeDAO;

class Atividade
{
    private ?int $id_atividade;
    private int $id_usuario;
    private int $id_grupo_idea;
    private string $tarefas;
    private string $status;
    private string $data_conclusao;

    function __construct()
    {
        $this->id_atividade = null;
    }

    public function getIdAtividade()
    {
        return $this->id_atividade;
    }

    public function setIdAtividade(int $param)
    {
        if ($param < 0) throw new Exception("<br>[ERRO][Atividade Clss 01] Informação de ID inválida!");

        $this->id_atividade = $param;
    }

    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    public function setIdUsuario(int $param)
    {
        if (empty($param)) throw new Exception("<br>[ERRO][Atividade Clss 02] Informação de ID do usuário vazia!");

        if ($param < 0) throw new Exception("<br>[ERRO][Atividade Clss 03] Informação de ID do usuário inválida!");

        $this->id_usuario = $param;
    }

    public function getIdGrupoIdea()
    {
        return $this->id_grupo_idea;
    }

    public function setIdGrupoIdea(int $param)
    {
        if (empty($param)) throw new Exception("<br>[ERRO][Atividade Clss 04] Informação de ID do GRUPO IDEA vazia!");

        if ($param < 0) throw new Exception("<br>[ERRO][Atividade Clss 05] Informação de ID do GRUPO IDEA inválida!");

        $this->id_grupo_idea = $param;
    }

    public function getTafera()
    {
        return $this->tarefas;
    }

    public function setTafera(string $param)
    {
        if (empty($param)) throw new Exception("<br>[ERRO][Atividade Clss 06] Informação de tarefa vazia!");

        $this->tarefas = $param;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus(string $param)
    {
        if (empty($param)) throw new Exception("<br>[ERRO][Atividade Clss 07] Informação de status vazia!");

        $this->status = $param;
    }

    public function getDataConclusao()
    {
        return $this->data_conclusao;
    }

    public function setDataConclusao(string $param)
    {
        $this->data_conclusao = $param;
    }

    public function getAtividades($param)
    {
        $atividadeDAO = new AtividadeDAO;
        return $atividadeDAO->getAtividades($param);
    }

    public function criarAtividades(array $param)
    {
        $callback = [];
        $callbackDelete = false;

        $atividadeDAO = new AtividadeDAO;

        if (!empty($param["incluir"])) {
            if ($atividadeDAO->checarAtividadeExcluir($param["id_usuario"], $param["incluir"])) {
                $callback["criacao"] = $atividadeDAO->criarAtividades($param["id_usuario"], $param["incluir"], "INCLUIR");
            } else {
                $callback["delete"] = $atividadeDAO->deletarAtividades($param["id_usuario"], $param["incluir"], "EXCLUIR");
            }
        }

        if (!empty($param["excluir"])) {
            if ($atividadeDAO->checarAtividadeIncluir($param["id_usuario"], $param["excluir"])) {
                $callback["criacao"] = $atividadeDAO->criarAtividades($param["id_usuario"], $param["excluir"], "EXCLUIR");
            } else {
                $callback["delete"] = $atividadeDAO->deletarAtividades($param["id_usuario"], $param["excluir"], "INCLUIR");
            }
        }

        return $callback;
    }

    public function concluirAtividade()
    {
        $callback = [];

        $atividadeDAO = new AtividadeDAO;
        $callback = $atividadeDAO->concluirAtividade($this->id_atividade, $this->data_conclusao);

        return $callback;
    }

    public function excluirAtividade()
    {
        $callback = [];

        $atividadeDAO = new AtividadeDAO;
        $callback = $atividadeDAO->excluirAtividade($this->id_atividade);

        return $callback;
    }
}
