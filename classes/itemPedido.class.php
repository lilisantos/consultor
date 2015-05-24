<?php

class ItemPedido {
    private $_codPed;
    private $_codProd;
    private $_numItemPed;
    private $_qtdItemPed;

    public function getCodPed() {
        return $this->_codPed;
    }

    public function setCodPed($codPed) {
        $this->_codPed = $codPed;
    }

    public function getCodProd() {
        return $this->_codProd;
    }

    public function setCodProd($codProd) {
        $this->_codProd = $codProd;
    }

    public function getNumItemPed() {
        return $this->_numItemPed;
    }

    public function setNumItemPed($numItemPed) {
        $this->_numItemPed = $numItemPed;
    }

    public function getQtdItemPed() {
        return $this->_qtdItemPed;
    }

    public function setQtdItemPed($qtdItemPed) {
        $this->_qtdItemPed = $qtdItemPed;
    }
}