<?php

class ExerciciosRepository{
    private PDO $pdo;

    public function __construct(PDO $pdo){
       $this -> pdo = $pdo;
}
    public function getExerciciosPeloIdTreino($treino_id) :array{
        $sql ="select * from exercicios where treino_id=$treino_id";
        $statemente = $this -> pdo -> query($sql);
        return $statemente->fetchAll(PDO::FETCH_ASSOC);
    }


}

