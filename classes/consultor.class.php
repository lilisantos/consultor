<?php

class Consultor {
    private $_codCons;
    private $_nomeCons;
    private $_usuario;
    private $_senha;

    public function getCodCons() {
        return $this->_codCons;
    }

    public function setCodCons($codCons) {
        $this->_codCons = $codCons;
    }

    public function getNomeCons() {
        return $this->_nomeCons;
    }

    public function setNomeCons($nomeCons) {
        $this->_nomeCons = $nomeCons;
    }

    public function getUsuario() {
        return $this->_usuario;
    }

    public function setUsuario($usuario) {
        $this->_usuario = $usuario;
    }

    public function getSenha() {
        return $this->_senha;
    }

    public function setSenha($senha) {
        $this->_senha = $senha;
    }
}