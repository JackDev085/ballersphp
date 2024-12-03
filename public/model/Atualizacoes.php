<?php

class Atualizacoes{
    private int $id;
    private string $titulo;
    private string $descricao;

    public function __construct($id,$titulo,$descricao) {
        $this ->id = $id;
        $this ->titulo = $titulo;
        $this ->descricao = $descricao;
    }

    public function getId() : int {
        return $this ->id;
    }

    public function getTitulo() : string {
        return $this ->titulo;
    }
    public function getDescricao() : string {
        return $this ->descricao;
    }
    
}