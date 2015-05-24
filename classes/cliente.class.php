<?php

class Cliente {
    private $_codCli;
    private $_nomeCli;
    private $_descricaoCli;
    private $_emailCli;
    private $_telCli;

    public function getCodCli() {
        return $this->_codCli;
    }

    public function setCodCli($codCli) {
        $this->_codCli = $codCli;
    }

    public function getNomeCli() {
        return $this->_nomeCli;
    }

    public function setNomeCli($nomeCli)
    {
        $this->_nomeCli = $nomeCli;
    }

    public function getDescricaoCli() {
        return $this->_descricaoCli;
    }

    public function setDescricaoCli($descricaoCli) {
        $this->_descricaoCli = $descricaoCli;
    }

    public function getEmailCli() {
        return $this->_emailCli;
    }

    public function setEmailCli($emailCli) {
        $this->_emailCli = $emailCli;
    }

    public function getTelCli() {
        return $this->_telCli;
    }

    public function setTelCli($telCli) {
        $this->_telCli = $telCli;
    }
}