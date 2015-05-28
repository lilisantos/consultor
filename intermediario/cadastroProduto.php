<?php
    function __autoload($classe) {
        include_once("../classes/$classe.class.php");
    }

    $con = new conexao();
    $con->connect();

if(isset ($_POST['cadastrar'])){
        $descricaoProd  = $_POST['descricaoProd'];
        $fotoProd       = $_POST['fotoProd'];
        $qtdEstoqueProd = $_POST['qtdEstoqueProd'];
        $precoUniProd   = $_POST['precoUniProd'];
        $fabricante     = $_POST['fabricante'];

        $crud = new crud('produto');  // instancia classe com as operaçoes crud, passando o nome da tabela como parametro
        $crud->inserir("descricaoProd,fotoProd,qtdEstoqueProd,precoUniProd,fabricante",
                       "'$descricaoProd','$fotoProd','$qtdEstoqueProd','$precoUniProd','$fabricante'",
                       'frmProduto.php'); // utiliza a funçao INSERIR da classe crud
    }

    $con->disconnect();
