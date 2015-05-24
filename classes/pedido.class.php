<?php

class Pedido {
    private $_codPed;
    private $_codCli;
    private $_status;
    private $_diaPed;
    private $_mesPed;
    private $_anoPed;
    private $_valorTotalPed;
    private $_formaPagPed;
    private $_statusPagPed;
    private $_qtdProdPed;
    private $_companhaPed;

    public function getCodPed() {
        return $this->_codPed;
    }

    public function setCodPed($codPed) {
        $this->_codPed = $codPed;
    }

    public function getCodCli() {
        return $this->_codCli;
    }

    public function setCodCli($codCli) {
        $this->_codCli = $codCli;
    }

    public function getStatus() {
        return $this->_status;
    }

    public function setStatus($status) {
        $this->_status = $status;
    }

    public function getDiaPed() {
        return $this->_diaPed;
    }

    public function setDiaPed($diaPed) {
        $this->_diaPed = $diaPed;
    }

    public function getMesPed() {
        return $this->_mesPed;
    }

    public function setMesPed($mesPed) {
        $this->_mesPed = $mesPed;
    }

    public function getAnoPed() {
        return $this->_anoPed;
    }

    public function setAnoPed($anoPed) {
        $this->_anoPed = $anoPed;
    }
    public function getValorTotalPed() {
        return $this->_valorTotalPed;
    }

    public function setValorTotalPed($valorTotalPed) {
        $this->_valorTotalPed = $valorTotalPed;
    }

    public function getFormaPagPed() {
        return $this->_formaPagPed;
    }

    public function setFormaPagPed($formaPagPed) {
        $this->_formaPagPed = $formaPagPed;
    }

    public function getStatusPagPed() {
        return $this->_statusPagPed;
    }

    public function setStatusPagPed($statusPagPed) {
        $this->_statusPagPed = $statusPagPed;
    }

    public function getQtdProdPed() {
        return $this->_qtdProdPed;
    }
    public function setQtdProdPed($qtdProdPed) {
        $this->_qtdProdPed = $qtdProdPed;
    }

    public function getCompanhaPed() {
        return $this->_companhaPed;
    }

    public function setCompanhaPed($companhaPed) {
        $this->_companhaPed = $companhaPed;
    }
}