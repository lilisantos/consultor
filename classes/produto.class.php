<?php

class Produto {
    private $_codProd;
    private $_descricaoProd;
    private $_fotoProd;
    private $_qtdEstoqueProd;
    private $_precoUniProd;
    private $_fabricante;

    public function getCodProd() {
        return $this->_codProd;
    }

    public function setCodProd($codProd) {
        $this->_codProd = $codProd;
    }

    public function getDescricaoProd() {
        return $this->_descricaoProd;
    }

    public function setDescricaoProd($descricaoProd) {
        $this->_descricaoProd = $descricaoProd;
    }

    public function getFotoProd() {
        return $this->_fotoProd;
    }

    public function setFotoProd($fotoProd) {
        $this->_fotoProd = $fotoProd;
    }

    public function getQtdEstoqueProd() {
        return $this->_qtdEstoqueProd;
    }

    public function setQtdEstoqueProd($qtdEstoqueProd) {
        $this->_qtdEstoqueProd = $qtdEstoqueProd;
    }

    public function getPrecoUniProd() {
        return $this->_precoUniProd;
    }

    public function setPrecoUniProd($precoUniProd) {
        $this->_precoUniProd = $precoUniProd;
    }

    public function getFabricante() {
        return $this->_fabricante;
    }

    public function setFabricante($fabricante) {
        $this->_fabricante = $fabricante;
    }
}