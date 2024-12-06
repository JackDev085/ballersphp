<?php

class Treinos {
    private int $id;
    private string $nome;
    private string $descricao;
    private string $duracao;
    private string $link_video_treino;
    private string $data_criacao;
    private string $categoria;
    private string $caminho_treino_url;

    public function __construct(
        int $id,
        string $nome,
        string $descricao,
        string $duracao,
        string $link_video_treino,
        string $data_criacao,
        string $categoria,
        string $caminho_treino_url
    ) {
        $this->id = $id;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->duracao = $duracao;
        $this->link_video_treino = $link_video_treino;
        $this->data_criacao = $data_criacao;
        $this->categoria = $categoria;
        $this->caminho_treino_url = $caminho_treino_url;
    }

    // Métodos getters
    public function getID(): int {
        return $this->id;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getDescricao(): string {
        return $this->descricao;
    }

    public function getDuracao(): string {
        return $this->duracao;
    }

    public function getLinkVideoTreino(): string {
        return $this->link_video_treino;
    }

    public function getDataCriacao(): string {
        return $this->data_criacao;
    }

    public function getCategoria(): string {
        return $this->categoria;
    }

    public function getCaminhoTreinoUrl(): string {
        return $this->caminho_treino_url;
    }
}
?>