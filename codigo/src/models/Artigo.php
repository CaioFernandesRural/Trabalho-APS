<?php

namespace App\models;

class Artigo {
    private $id;

    private $titulo;

    private $subtitulo;

    private $descricao;

    private $palavrasChave = array();

    private $dataPublicacao;

    private $arquivo;

    private $idioma;

    private $resumo;

    private $numPaginas;

    private $numDownloads;

    private $edicao;

    private $doi;

    private $autores = array();

    private $idEvento;


    function __construct($id, $titulo, $subtitulo, $descricao, $palavrasChave, $dataPublicacao, $arquivo,
    $idioma, $resumo, $numPaginas, $numDownloads, $edicao, $doi, $autores, $idEvento){
        $this->id = $id;
        $this->titulo = $titulo;
        $this->subtitulo = $subtitulo;
        $this->descricao = $descricao;
        $this->palavrasChave[] = $palavrasChave;
        $this->dataPublicacao = $dataPublicacao;
        $this->arquivo = $arquivo;
        $this->idioma = $idioma;
        $this->resumo = $resumo;
        $this->numPaginas = $numPaginas;
        $this->numDownloads = $numDownloads;
        $this->edicao = $edicao;
        $this->doi = $doi;
        $this->autores= $autores;
        $this->idEvento = $idEvento;
    }

    function getId() {
        return $this->id;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getSubtitulo() {
        return $this->subtitulo;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getPalavrasChave() {
        return $this->palavrasChave;
    }

    function getDataPublicacao() {
        return $this->dataPublicacao;
    }

    function getArquivo() {
        return $this->arquivo;
    }

    function getIdioma() {
        return $this->idioma;
    }

    function getResumo() {
        return $this->resumo;
    }

    function getNumPaginas() {
        return $this->numPaginas;
    }

    function getNumDownloads() {
        return $this->numDownloads;
    }

    function getEdicao() {
        return $this->edicao;
    }

    function getDoi() {
        return $this->doi;
    }

    function getAutores() {
        return $this->autores;
    }

    function getidEvento() {
        return $this->idEvento;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setSubtitulo($subtitulo) {
        $this->subtitulo = $subtitulo;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setPalavrasChave($palavra) {
        $this->palavrasChave[] = $palavra;
    }

    function setDataPublicacao($dataPublicacao) {
        $this->dataPublicacao =$dataPublicacao ;
    }

    function setArquivo($arquivo) {
        $this-> arquivo= $arquivo;
    }

    function setIdioma($idioma) {
        $this->idioma = $idioma;
    }

    function setResumo($resumo) {
        $this->resumo = $resumo;
    }

    function setNumPaginas($numPaginas) {
        $this->numPaginas = $numPaginas;
    }

    function setNumDownloads($numPaginas) {
        $this->numPaginas = $numPaginas;
    }

    function setEdicao($edicao) {
        $this->edicao = $edicao;
    }

    function setDoi($doi) {
        $this->doi = $doi;
    }

    function setAutores($autores) {
        $this->autores = $autores;
    }

    function setIdEvento($idEvento) {
        $this->idEvento = $idEvento;
    }

}