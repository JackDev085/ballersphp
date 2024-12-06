<?php

class TreinosRepository{
    private PDO $pdo;

    public function __construct(PDO $pdo){
       $this -> pdo = $pdo;
}
    public function getAll() :array{
        $sql ="select * from treinos";
        $statemente = $this -> pdo -> query($sql);
        return $statemente->fetchAll(PDO::FETCH_ASSOC);
    }


}

