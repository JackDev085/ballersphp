<?php

class AtualizacoesRepository{
    private PDO $pdo;

    public function __construct(PDO $pdo){
       $this -> pdo = $pdo;
}
    public function getAll() :array{
        $sql ="select * from atualizacoes";
        $statemente = $this -> pdo -> query($sql);
        return $statemente->fetchAll(PDO::FETCH_ASSOC);
    }


}
