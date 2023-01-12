<?php

namespace App\models;

class Evento{
    private $id;
    private $nome;
    private $tipo;
    private $ano;
    private $anosAnteriores = array();
    private $descricao;
    private $areaDeEstudo;
    private $linkEvento;

    public function getId() {
        return $this->id;
    }
    public function getNome() {
        return $this->nome;
    }
    public function getTipo() {
        return $this->tipo;
    }
    public function getAno() {
        return $this->ano;
    }
    public function getAnosAnteriores() {
        return $this->anosAnteriores;
    }
    public function getDescricao() {
        return $this->descricao;
    }
    public function getAreaDeEstudo() {
        return $this->areaDeEstudo;
    }
    public function getLinkEvento() {
        return $this->linkEvento;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }
    public function setAno($ano) {
        $this->ano = $ano;
    }
    public function setAnosAnteriores($ano) {
        $this->array_push($anosAnteriores, $ano);
    }
    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
    public function setAreaDeEstudo($areaDeEstudo) {
        $this->areaDeEstudo = $areaDeEstudo;
    }
    public function setLinkEvento($linkEvento) {
        $this->linkEvento = $linkEvento;
    }

    public function cadastraEvento($id, $nome, $tipo, $ano, $anosAnteriores, $descricao, $areaDeEstudo, $linkEvento) {

    }
    public function verEventos() {

    }
    public function verEvento($id) {

    }
    public function editaEvento($id, $nome, $tipo, $ano, $anosAnteriores, $descricao, $areaDeEstudo, $linkEvento) {

    }
    public function editaLinkEvento($id) {

    }
    public function deletaEvento($id) {

    }
}