<?php 

class Programas{

    private int $id;
    private string $titulo;
    private string $link_treinos;

    public function __construct($id, $titulo, $link_treinos){
        $this->id = $id;
        $this->titulo = $titulo;
        $this->link_treinos = $link_treinos;
    }

    public function getID(){
        return $this->id;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function getLinktreinos(){
    return $this->link_treinos;
    }
}